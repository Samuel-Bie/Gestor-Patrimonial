<template>
  <v-container fill-height fluid grid-list-xl>
    <v-layout wrap>
      <v-flex xs12>
        <patrimonio-listagem-export-options></patrimonio-listagem-export-options>
      </v-flex>

      <v-flex md12 mt-1>
        <patrimonio-listagem-datatable></patrimonio-listagem-datatable>
      </v-flex>
    </v-layout>

    <template>
      <v-card id="create">
        <v-speed-dial
          v-model="fab"
          :top="top"
          :bottom="bottom"
          :right="right"
          :left="left"
          :direction="direction"
          :open-on-hover="hover"
          :transition="transition"
        >
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
            <template v-slot:activator="{ on }" >
              <v-btn fab dark small color="red" v-on="on" v-on:click="importer = true">
                <v-icon>mdi-database-import</v-icon>
              </v-btn>
            </template>
            <span class="white--text">Importar registros</span>
          </v-tooltip>
        </v-speed-dial>
      </v-card>
    </template>

    <patrimonio-listagem-import :importer="importer" @closed="importer=false"></patrimonio-listagem-import>


  </v-container>
</template>


<style scoped>
/* This is for documentation purposes and will not be needed in your application */
#create .v-speed-dial {
  position: fixed;
  z-index: 100;
}

#create .v-btn--floating {
  position: relative;
}
</style>



<script>
import { mapMutations, mapState, mapActions, mapGetters } from "vuex";

export default {
  name: "Patrimonio",
  computed: {
    ...mapState("app", ["image", "color"])
  },
  data() {
    return {
      direction: "left",
      fab: false,
      fling: false,
      hover: true,
      tabs: null,
      top: false,
      right: true,
      bottom: true,
      left: false,
      transition: "scale-transition",
      importer:false
    };
  },

  methods: {
    ...mapActions("patrimonio", ["carregarBens"]),
    displayImporter(){
      console.log('ola')
    }
  },
  mounted() {
    this.carregarBens();
  },

  watch: {
    top(val) {
      this.bottom = !val;
    },
    right(val) {
      this.left = !val;
    },
    bottom(val) {
      this.top = !val;
    },
    left(val) {
      this.right = !val;
    }
  }
};
</script>
