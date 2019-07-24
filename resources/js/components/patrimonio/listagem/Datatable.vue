<template>


  <div>
    <v-data-table
        :headers="headers"
        :items="items"
        class="elevation-1"
        hide-actions
        v-if="patrimonios"
    >
        <template v-slot:items="props">
            <tr  @click="showPatrimonio(props.item)">
                <td class="text-xs-rigth">{{ props.item.nip }}</td>
                <td class="text-xs-left">{{ props.item.tipo }}</td>
                <td class="text-xs-left">{{ props.item.classe }}</td>
                <td class="text-xs-left">{{ props.item.ugb }}</td>
                <td class="text-xs-rigth">{{ props.item.data_aquisicao }}</td>
            </tr>
        </template>
    </v-data-table>
  </div>
</template>

<script>

    import {
        mapMutations,
        mapState,
        mapActions,
        mapGetters
    } from 'vuex'
  export default {
    data () {
      return {
        headers: [
          {
            sortable: false,
            align: 'left',
            text: 'NIP',
            value: 'nip'
          }, {
            sortable: false,
            align: 'left',
            text: 'Tipo',
            value: 'tipo'
          },
          {
            sortable: true,
            align: 'left',
            text: 'Designação',
            value: 'classe'
          },
          {
            sortable: true,
            align: 'left',
            text: 'Localizacao',
            value: 'ugb'
          },
          {
            sortable: true,
            align: 'left',
            text: 'Data de aquisição',
            value: 'data_aquisicao',
          }
        ],
      }
    },
    computed: {
        items(){
            return this.patrimonios
        },
        ...mapGetters('patrimonio', ['patrimonios'])
    },
    methods: {
        ...mapActions('patrimonio', ['carregarBem']),
        showPatrimonio(item){
            this.carregarBem(item.id)
            this.$router.push({ name: 'Ver patrimonio', params: { id: item.id }})
        }
    },
  }
</script>