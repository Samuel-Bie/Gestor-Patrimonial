<template>
  <v-container
    fill-height
    fluid
    grid-list-xl
  >
    <v-layout wrap>
         <v-flex
        md12
      >
          <v-data-table
            :headers="headers"
            :items="items"
            hide-actions
            v-if="patrimonios"
          >
            <template
              slot="headerCell"
              slot-scope="{ header }"
            >
              <span
                class="subheading font-weight-light text-success text--darken-3"
                v-text="header.text"
              />
            </template>
            <template
              slot="items"
              slot-scope="{ item }"

            >
              <tr>
                <tr @click="showPatrimonio(item)">
                <td>{{ item.nip }}</td>
                <td>{{ item.classe }}</td>
                <td>{{ item.ugb }}</td>
                <td>{{ item.data_aquisicao }}</td>
              </tr>
            </template>
          </v-data-table>
      </v-flex>
    </v-layout>
  </v-container>
</template>


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
      items(){
        return this.patrimonios
      },
      ...mapGetters('patrimonio', ['patrimonios'])
    },
    data() {
      return {
        headers: [
          {
            sortable: true,
            text: 'NIP',
            value: 'nip'
          },
          {
            sortable: true,
            text: 'Designação',
            value: 'designacao'
          },
          {
            sortable: true,
            text: 'Localizacao',
            value: 'localizacao'
          },
          {
            sortable: false,
            text: 'Data de aquisição',
            value: 'estado',
              // align: 'right'
          }
        ],
      };
    },

    methods: {
      ...mapActions('patrimonio', ['carregarBens']),
      showPatrimonio(item){
        this.$router.push({ name: 'Ver patrimonio', params: { id: item.id }})
      }
    },
    mounted() {
      this.carregarBens()
    },
};
</script>
