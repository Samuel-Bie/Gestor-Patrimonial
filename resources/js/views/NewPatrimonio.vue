<template>
  <div>
    <v-flex v-if="!loading">
      <v-container grid-list-md text-xs-left>
        <v-layout row wrap>
          <v-flex xs10 sm6 v-if="created || failed">
            <v-alert
              v-model="alert"
              dismissible
              :color="alertStatus"
              border="left"
              elevation="2"
              colored-border
            >
              {{ aletrText }}
            </v-alert>
          </v-flex>

          <v-flex xs12 v-if="active_sessao1">
            <div class="px-0">
              <patrimonio-new-form-sessao1
                v-on:validado="goto2"
                v-on:dados_atualizados="changeInicialData"
                :dados="inicialData"
              ></patrimonio-new-form-sessao1>
            </div>
          </v-flex>

          <v-flex xs12 v-if="active_sessao2">
            <div class="px-0">
              <patrimonio-new-form-sessao2
                :tipo="tipoNovo"
                :identificacao="identificacao"
                v-on:dados_atualizados="changeIdentificacao"
                v-on:seletedTipo="changeTipo"
                v-on:validado="goto3"
                v-on:back="goto1"
              ></patrimonio-new-form-sessao2>
            </div>
          </v-flex>

          <v-flex xs12 v-if="active_sessao3">
            <div class="px-0">
              <patrimonio-new-form-sessao3
                :tipo="tipoNovo"
                :adicional="adicional"
                v-on:dados_atualizados="changeAdicional"
                v-on:validado="gotoFotos"
                v-on:back="goto2"
              ></patrimonio-new-form-sessao3>
            </div>
          </v-flex>

          <v-flex xs12 v-if="active_sessao4">
            <div class="px-0">
              <patrimonio-new-form-sessao-fotos
                v-on:fileSaved="fileSaved"
                v-on:validado="enviar"
                v-on:back="goto3"
              ></patrimonio-new-form-sessao-fotos>
            </div>
          </v-flex>
        </v-layout>
      </v-container>
    </v-flex>

    <div v-else>
      <material-card color="info" title="Carregando">
        <v-card-text>
          <v-container class="pa-0" grid-list-xl fluid>
            <template>
              <v-progress-linear :indeterminate="true"></v-progress-linear>
            </template>
          </v-container>
        </v-card-text>
      </material-card>
    </div>
  </div>
</template>

<script>
import { mapMutations, mapState, mapActions, mapGetters } from "vuex";

export default {
  data: () => ({
    alert: true,
    active_sessao1: true,
    active_sessao2: false,
    active_sessao3: false,
    active_sessao4: false,
    // tipoNovo:'Veiculo',
    tipoNovo: null,
    inicialData: {},
    identificacao: {},
    adicional: {},
    fotos: [],
  }),

  computed: {
    ...mapGetters({
      loading: "getLoading",
      created: "patrimoniomanagement/getCreatedPatrimonio",
      failed: "patrimoniomanagement/getCreationErrors",
    }),
    alertStatus() {
      if (this.created) return "success";
      if (this.failed) return "red";
    },
    aletrText() {
      if (this.created) return "Patrimonio criado";
      if (this.failed) return "Erro";
    },
  },
  created() {
    this.UGEs();
    this.UGBs();
    this.Classificador();
    this.FormasAquisicao();
  },
  methods: {
    ...mapActions({
      UGEs: "general/carregarUGEs",
      UGBs: "general/carregarUGBs",
      Classificador: "general/carregarClassificador",
      FormasAquisicao: "general/carregarFormasAquisicao",
      criarBem: "patrimoniomanagement/createBem",
    }),
    ...mapActions("patrimonio", ["carregarBens", "carregarBem"]),

    showPatrimonio(item) {
      this.carregarBens();
      this.$router.push({ name: "Ver patrimonio", params: { id: item.id } });
    },
    goto1() {
      this.active_sessao1 = true;
      this.active_sessao2 = false;
      this.active_sessao3 = false;
      this.active_sessao4 = false;
    },
    goto2() {
      this.active_sessao1 = false;
      this.active_sessao2 = true;
      this.active_sessao3 = false;
      this.active_sessao4 = false;
    },
    goto3() {
      this.active_sessao1 = false;
      this.active_sessao2 = false;
      this.active_sessao3 = true;
      this.active_sessao4 = false;
    },
    gotoFotos() {
      this.active_sessao1 = false;
      this.active_sessao2 = false;
      this.active_sessao3 = false;
      this.active_sessao4 = true;
    },
    changeTipo(tipo) {
      this.tipoNovo = tipo;
      this.identificacao = {};
      this.adicional = {};
    },
    changeInicialData(dados) {
      this.inicialData = dados;
    },
    changeIdentificacao(dados) {
      this.identificacao = dados;
    },
    changeAdicional(dados) {
      this.adicional = dados;
    },
    fileSaved(id) {
      this.fotos.push(id);
    },
    enviar() {
      const dados = {
        tipo: this.tipoNovo,
        inicial: {
          ...this.inicialData,
        },
        identificacao: {
          ...this.identificacao,
        },
        adicional: {
          ...this.adicional,
        },
        arquivos: [...this.fotos],
      };

      this.criarBem(dados);
    },
  },
  watch: {
    created(val) {
      if (val !== null) {
        this.showPatrimonio(val);
      }
    },
  },
};
</script>
