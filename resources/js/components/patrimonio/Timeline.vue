
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

        <v-container grid-list-xs>
            <v-flex xs12>
                <v-timeline align-top>
                    <v-timeline-item
                    v-for="(item, i) in items"
                    :key="i"
                    :color="item.color"
                    :icon="item.icon"
                    fill-dot
                    >
                    <template v-slot:opposite>
                        <span
                        :class="`headline font-weight-bold ${item.color}--text`"
                        v-text="item.year"
                        ></span>
                    </template>

                    <v-card
                        :color="item.color"
                        dark
                    >
                        <v-card-title class="title">{{ item.title }}</v-card-title>
                        <v-card-text class="white text--primary">
                        <p>Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus, vix an salutandi sententiae.</p>
                        <v-btn
                            :color="item.color"
                            class="mx-0"
                            outline
                        >
                            Button
                        </v-btn>
                        </v-card-text>
                    </v-card>
                    </v-timeline-item>
                </v-timeline>
            </v-flex>
        </v-container>

      </v-card>
    </v-dialog>
  </v-layout>
</template>

<script>
    export default {
        props:['dialog'],
        data: () => ({
            notifications: false,
            sound: true,
            widgets: false,
            items: [
                {
                    title: 'Registro',
                    color: 'lighten-2 green',
                    icon: 'mdi-content-save-outline',
                    year: '1975'
                },
                {
                    title: 'Manutencao ',
                    color: 'darken-1 accent',
                    icon: 'mdi-wrench-outline',
                    year: '1980'
                },
                {
                    title: 'Transferencia',
                    color: 'lighten-1 yellow',
                    icon: 'mdi-swap-horizontal',
                    year: '1986'
                },
                {
                    title: 'Abate',
                    color: 'red',
                    icon: 'mdi-delete-outline',
                    year: '1995'
                }
            ]
        }),
        methods: {
            closeDialog(){
                this.$emit('close')
            }
        },
  }
</script>