
<template>
  <v-layout row justify-center>
    <v-dialog v-model="dialog" fullscreen hide-overlay transition="dialog-bottom-transition">
      <v-card>
        <v-toolbar dark color="primary">

          <v-spacer></v-spacer>
          <v-toolbar-title class="white--text">Hitórico de operações</v-toolbar-title>
          <v-btn icon dark @click="closeDialog">
            <v-icon>mdi-close</v-icon>
          </v-btn>

        </v-toolbar>

        <v-container grid-list-xs v-if="!loading">
            <v-flex xs12>
                <v-timeline align-top>
                    <v-timeline-item
                    v-for="(item, i) in timeline"
                    :key="i"
                    :color="item.color"
                    :icon="item.icon"
                    fill-dot
                    >
                    <template v-slot:opposite>
                        <span
                        :class="`headline font-weight-bold ${item.color}--text`"
                        v-text="item.data"
                        ></span>
                    </template>

                    <v-card
                        :color="item.color"
                        dark
                    >
                        <v-card-title class="title">{{ item.tipo }}</v-card-title>
                        <v-card-text class="white text--primary">
                        <p>{{item.descricao}}</p>
                        <v-btn
                            color="info"
                            class="mx-0"
                            outline
                            flat
                        >
                            Detalhes
                        </v-btn>
                        </v-card-text>
                    </v-card>
                    </v-timeline-item>
                </v-timeline>
            </v-flex>
        </v-container>


        <template v-else>
            <div class="text-xs-center">
                <v-dialog
                v-model="loader"
                hide-overlay
                persistent
                width="300"
                >
                <v-card
                    color="primary"
                    dark
                >
                    <v-card-text>
                    Por favor aguarde
                    <v-progress-linear
                        indeterminate
                        color="white"
                        class="mb-0"
                    ></v-progress-linear>
                    </v-card-text>
                </v-card>
                </v-dialog>
            </div>
            </template>

      </v-card>
    </v-dialog>
  </v-layout>
</template>

<script>

    import {
        mapMutations,
        mapState,
        mapActions,
        mapGetters
    } from 'vuex'

    export default {
        props:['dialog', 'patrimonio'],
        data: () => ({
            notifications: false,
            sound: true,
            widgets: false,
        }),
        computed: {
            loader(){
                return this.dialog && this.loading
            },
            ...mapGetters({
                loading: 'getLoading',
                timeline: 'patrimonio/getTimeline',
            }),
        },
        methods: {
            ...mapActions('patrimonio', ['carregarTimeline']),
            closeDialog(){
                this.$emit('close')
            }
        },
        created () {
            this.carregarTimeline(this.patrimonio)
        }
    }
</script>