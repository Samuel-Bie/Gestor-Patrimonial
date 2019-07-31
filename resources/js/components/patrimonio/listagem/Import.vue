<template>
  <v-dialog
    v-model="importer"
    fullscreen
    hide-overlay
    transition="dialog-bottom-transition"
    scrollable
  >
    <v-card tile>
      <v-toolbar card dark color="primary">
        <v-spacer></v-spacer>
        <v-toolbar-title class="white--text">Importação de registros</v-toolbar-title>
        <v-btn icon dark @click="closeModal">
          <v-icon>mdi-close</v-icon>
        </v-btn>
      </v-toolbar>
      <v-card-text>
        <dropzone-index :options="dropzoneOpt" @fileSaved="fileSaved"></dropzone-index>
        <v-divider></v-divider>previsualizacao
      </v-card-text>

      <div style="flex: 1 1 auto;"></div>
    </v-card>
  </v-dialog>
</template>

<script>
export default {
  props: ["importer"],
  data() {
    return {};
  },
  computed: {
    dropzoneOpt() {
      return {
        maxFilesize: 10,
        withCredentials: true,
        addRemoveLinks: true,
        headers: {
          Authorization: "Bearer " + localStorage.getItem("ACCESS_TOKEN")
        },
        uploadMultiple: false
      };
    }
  },
  methods: {
    closeModal() {
      this.$emit("closed");
    }
  }
};
</script>