<template>
  <v-bottom-sheet v-model="sheet">
    <template v-slot:activator>
      <v-btn color="primary" dark>
        <v-icon>mdi-share-variant</v-icon>Exportar
      </v-btn>


    </template>
    <v-list>
      <v-subheader>Exportar em</v-subheader>
        <v-list-tile @click="sheet = false">
            <v-list-tile-avatar>
                <v-avatar size="32px" tile>
                    <img :src="`${pdf.img}`" :alt="pdf.title" />
                </v-avatar>
            </v-list-tile-avatar>
            <v-list-tile-title>{{ pdf.title }}</v-list-tile-title>
        </v-list-tile>

        <download-excel
            :data   = "items">
            <v-list-tile @click="sheet = false">
                <v-list-tile-avatar>
                    <v-avatar size="32px" tile>
                        <img :src="`${excel.img}`" :alt="excel.title" />
                    </v-avatar>
                </v-list-tile-avatar>
                <v-list-tile-title>{{ excel.title }}</v-list-tile-title>
            </v-list-tile>
        </download-excel>



        <download-csv :data="items">
            <v-list-tile @click="sheet = false">
                <v-list-tile-avatar>
                    <v-avatar size="32px" tile>
                        <img :src="`${csv.img}`" :alt="csv.title" />
                    </v-avatar>
                </v-list-tile-avatar>
                <v-list-tile-title>{{ csv.title }}</v-list-tile-title>
            </v-list-tile>
        </download-csv>

        <Download @click="sheet = false" :download-data="items"
            file-type="xls"
            file-name="Periyodik Tablo - Bazı Elementler"
            :data-titles="items"
            class="periodic_table color-1"
            button-text="Download Period Table As Excel"/>

        <v-list-tile @click="sheet = false">
            <v-list-tile-avatar>
                <v-avatar size="32px" tile>
                    <img :src="`${json.img}`" :alt="json.title" />
                </v-avatar>
            </v-list-tile-avatar>
            <v-list-tile-title>{{ json.title }}</v-list-tile-title>
        </v-list-tile>




    </v-list>
  </v-bottom-sheet>
</template>
<script>
import { mapMutations, mapState, mapActions, mapGetters } from "vuex";

export default {
  computed: {
    items() {
      return [
        {
          img: "https://image.flaticon.com/icons/svg/179/179483.svg",
          title: "PDF"
        },
        {
          img: "https://image.flaticon.com/icons/svg/888/888850.svg",
          title: "Excel"
        },
        {
          img: "https://image.flaticon.com/icons/png/512/377/377324.png",
          title: "CSV"
        },
        {
          img: "https://image.flaticon.com/icons/svg/136/136525.svg",
          title: "JSON"
        }
      ];
    }
  },
    data() {
        return {
            sheet: false,
            pdf:{
                img: "https://image.flaticon.com/icons/svg/179/179483.svg",
                title: "PDF"
            },
            excel: {
                img: "https://image.flaticon.com/icons/svg/888/888850.svg",
                title: "Excel"
            },
            csv:{
                img: "https://image.flaticon.com/icons/png/512/377/377324.png",
                title: "CSV"
            },
            json:{
                img: "https://image.flaticon.com/icons/svg/136/136525.svg",
                title: "JSON"
            }
        };
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
};
</script>


