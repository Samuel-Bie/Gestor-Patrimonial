<template>
    <v-container fill-height fluid grid-list-xl>
        <v-layout wrap>

            <v-flex sm6 xs12 md6 lg3>
                <material-stats-card color="green" icon="mdi-store" title="Inventario" value="350000"
                    sub-icon="mdi-calendar" sub-text="Desde 1 de Janeiro" />
            </v-flex>
            <v-flex sm6 xs12 md6 lg3>
                <material-stats-card color="orange" icon="mdi-swap-horizontal" title="Transferidos" value="2"
                    small-value="" sub-icon="mdi-alert" sub-icon-color="error" sub-text="Desde 1 de Janeiro"
                    sub-text-color="text-primary" />
            </v-flex>
            <v-flex sm6 xs12 md6 lg3>
                <material-stats-card color="red" icon="mdi-delete-outline" title="Abatidos" value="0"
                    sub-icon="mdi-tag" sub-text="Desde 1 de Janeiro" />
            </v-flex>
            <v-flex sm6 xs12 md6 lg3>
                <material-stats-card color="info" icon="mdi-new-box" title="Novos" value="1500"
                    sub-icon="mdi-update" sub-text="Desde 1 de Janeiro" />
            </v-flex>

        </v-layout>
    </v-container>
</template>


<script>
export default {
  data () {
    return {

    }
  },
  methods: {

  }
}
</script>
