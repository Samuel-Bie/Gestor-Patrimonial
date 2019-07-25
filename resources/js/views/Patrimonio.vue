<template>
  <v-container
    fill-height
    fluid
    grid-list-xl
  >
    <v-layout wrap >

      <v-flex xs12>
        <template>
          <v-bottom-sheet v-model="sheet">
            <template v-slot:activator>

            <v-btn
                color="primary"
                dark
              >
                <v-icon>mdi-share-variant</v-icon> Exportar
              </v-btn>

            </template>
            <v-list>
              <v-subheader>Exportar em</v-subheader>
              <v-list-tile
                v-for="tile in tiles"
                :key="tile.title"
                @click="sheet = false"
              >
                <v-list-tile-avatar>
                  <v-avatar size="32px" tile>
                    <img
                      :src="`${tile.img}`"
                      :alt="tile.title"
                    >
                  </v-avatar>
                </v-list-tile-avatar>
                <v-list-tile-title>{{ tile.title }}</v-list-tile-title>
              </v-list-tile>
            </v-list>
          </v-bottom-sheet>
        </template>
      </v-flex>

      <v-flex md12 mt-1 >
        <patrimonio-listagem-datatable></patrimonio-listagem-datatable>
      </v-flex>
    </v-layout>


    <template>
        <v-card id="create">
            <v-speed-dial v-model="fab" :top="top" :bottom="bottom" :right="right" :left="left" :direction="direction"
                :open-on-hover="hover" :transition="transition">
                <template v-slot:activator>
                    <v-btn v-model="fab" color="blue darken-2" dark fab>
                        <v-icon>mdi-plus</v-icon>
                        <v-icon>mdi-close</v-icon>
                    </v-btn>
                </template>

                <router-link :to="{ name: 'Criar patrimonio'}">
                  <v-tooltip top>
                    <template v-slot:activator="{ on }">
                      <v-btn fab dark small color="indigo" v-on="on">
                          <v-icon>mdi-plus</v-icon>
                      </v-btn>
                     </template>
                    <span class="white--text">Adicionar</span>
                  </v-tooltip>
                </router-link>

                <v-tooltip top>
                  <template v-slot:activator="{ on }">
                    <v-btn fab dark small color="red"  v-on="on">
                        <v-icon>mdi-database-import</v-icon>
                    </v-btn>
                    </template>
                  <span class="white--text">Importar registros</span>
                </v-tooltip>
            </v-speed-dial>
        </v-card>
    </template>

  </v-container>
</template>


<style scoped>
  /* This is for documentation purposes and will not be needed in your application */
  #create .v-speed-dial {
    position: fixed;
    z-index:100;
  }

  #create .v-btn--floating {
    position: relative;
  }
</style>



<script>

import {
  mapMutations,
  mapState,
  mapActions,
  mapGetters
} from 'vuex'

export default {
    name: 'Patrimonio',
    computed: {
      ...mapState('app', ['image', 'color']),
    },
    data() {
      return {

        direction: 'left',
        fab: false,
        fling: false,
        hover: true,
        tabs: null,
        top: false,
        right: true,
        bottom: true,
        left: false,
        transition: 'scale-transition',

        sheet: false,
        tiles: [
          { img: 'https://image.flaticon.com/icons/svg/179/179483.svg', title: 'PDF' },
          { img: 'https://image.flaticon.com/icons/svg/888/888850.svg', title: 'Excel' },
          { img: 'https://image.flaticon.com/icons/png/512/377/377324.png', title: 'CSV' },
          { img: 'https://image.flaticon.com/icons/svg/136/136525.svg', title: 'JSON' },
        ],
      };
    },

    methods: {
      ...mapActions('patrimonio', ['carregarBens']),
    },
    mounted() {
      this.carregarBens()
    },

    watch: {
        top (val) {
            this.bottom = !val
        },
        right (val) {
            this.left = !val
        },
        bottom (val) {
            this.top = !val
        },
        left (val) {
            this.right = !val
        }
    }
};
</script>
