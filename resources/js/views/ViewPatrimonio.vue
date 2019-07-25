<template>
    <div>
        <v-container>
            <v-layout justify-center align-center>
                <v-flex xs12>
                    <div v-if="!loading">
                        <material-card color="info" :title="classe.designacao" :text="details.nip+' '">
                            <v-card-text>
                                <div>
                                    <v-container class="pa-0" grid-list-xl fluid>
                                        <v-layout row wrap m0>
                                            <v-flex xs12 m0>
                                                <span class="heading-4 text-info">Entidade utilizadora</span>
                                            </v-flex>
                                        </v-layout>
                                    </v-container>

                                    <v-container class="pa-0" grid-list-xl fluid>
                                        <v-layout align-end wrap>
                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">UGB</h6>
                                                <small
                                                    class="small">{{ details.localizacao.ugb.codigo }}<br>{{ details.localizacao.ugb.designacao }}</small>
                                            </v-flex>

                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">UGE</h6>
                                                <small
                                                    class="small">{{ details.localizacao.uge.codigo }}<br>{{ details.localizacao.uge.designacao }}</small>
                                            </v-flex>

                                            <v-flex xs6 md3 v-if="details.localizacao.setor!==null">
                                                <h6 class="heading-6 text-uppercase">Setor</h6>
                                                <small
                                                    class="small">{{ details.localizacao.setor.codigo }}<br>{{ details.localizacao.setor.designacao }}</small>
                                            </v-flex>
                                            <!-- {{ details }} -->
                                        </v-layout>

                                        <v-layout align-end wrap>
                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Provincia</h6>
                                                <small class="small">{{ details.localizacao.ugb.provincia }}</small>
                                            </v-flex>
                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Distrito</h6>
                                                <small class="small">{{ details.localizacao.ugb.destrito }}</small>
                                            </v-flex>
                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Posto Administrativo</h6>
                                                <small
                                                    class="small">{{ details.localizacao.ugb.posto_administrativo }}</small>
                                            </v-flex>
                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Localidade</h6>
                                                <small class="small">{{ details.localizacao.ugb.localidade }}</small>
                                            </v-flex>
                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Bairro</h6>
                                                <small class="small">{{ details.localizacao.ugb.localidade }}<br>Classe:
                                                    {{ details.localizacao.ugb.classificador_territorial }}</small>
                                            </v-flex>
                                            <v-flex xs6 md6>
                                                <h6 class="heading-6 text-uppercase">Endereco</h6>
                                                <small class="small">{{ details.localizacao.ugb.endereco }}</small>
                                            </v-flex>
                                        </v-layout>
                                    </v-container>
                                </div>
                            </v-card-text>
                        </material-card>

                        <material-card color="info">
                            <v-card-text>
                                <div>
                                    <v-container class="pa-0" grid-list-xl fluid>
                                        <v-layout row wrap m0>
                                            <v-flex xs12 m0>
                                                <span class="heading-4 text-info">Identificação</span>
                                            </v-flex>
                                        </v-layout>
                                    </v-container>

                                    <v-container class="pa-0" grid-list-xl fluid>
                                        <v-layout align-end wrap>
                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Classificador</h6>
                                                <small
                                                    class="small">{{ classe.codigo }}<br>{{ classe.designacao }}</small>
                                            </v-flex>

                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Forma de aquisição</h6>
                                                <small
                                                    class="small">{{ getFormaAquisicao.codigo }}<br>{{ getFormaAquisicao.designacao }}</small>
                                            </v-flex>

                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Estado de aquisição</h6>
                                                <small class="small">{{ details.estado_aquisicao }}</small>
                                            </v-flex>

                                            <v-flex xs6 md3>
                                                <h6 class="heading-6 text-uppercase">Estado de conservação</h6>
                                                <small class="small">{{ details.estado_conservacao }}</small>
                                            </v-flex>
                                            <!-- {{ details }} -->
                                        </v-layout>
                                    </v-container>

                                    <patrimonio-identificacao-parts-imovel
                                        v-if="imovel !==null"
                                        :details="details"
                                        :imovel="imovel">
                                    </patrimonio-identificacao-parts-imovel>

                                    <patrimonio-identificacao-parts-movel
                                        v-if="movel !==null"
                                        :details="details"
                                        :movel="movel">
                                    </patrimonio-identificacao-parts-movel>

                                    <patrimonio-identificacao-parts-veiculo
                                        v-if="veiculo !==null"
                                        :details="details"
                                        :veiculo="veiculo">
                                    </patrimonio-identificacao-parts-veiculo>

                                    <patrimonio-identificacao-parts-livro
                                        v-if="livro !==null"
                                        :details="details"
                                        :livro="livro">
                                    </patrimonio-identificacao-parts-livro>

                                </div>
                            </v-card-text>
                        </material-card>


                        <material-card color="info" class="mt-4">
                            <v-card-text>
                                <div>
                                    <v-container class="pa-0" grid-list-xl fluid>
                                        <v-layout row wrap m0>
                                            <v-flex xs12 m0>
                                                <span class="heading-4 text-info">Informações adicionais</span>
                                            </v-flex>
                                        </v-layout>
                                    </v-container>

                                    <patrimonio-details-parts-details :details="details" :imovel="imovel" :movel="movel"
                                        :veiculo="veiculo" :livro="livro"></patrimonio-details-parts-details>

                                </div>
                            </v-card-text>
                        </material-card>

                        <material-card color="info" class="mt-4" v-if="details.ficheiros.length > 0">
                            <v-card-text>
                                <div>
                                    <v-container class="pa-0" grid-list-xl fluid>
                                        <v-layout row wrap m0>
                                            <v-flex xs12 m0>
                                                <span class="heading-4 text-info">Ficheiros</span>
                                            </v-flex>
                                        </v-layout>
                                    </v-container>
                                    <patrimonio-files :files="details.ficheiros"></patrimonio-files>
                                </div>
                            </v-card-text>
                        </material-card>
                    </div>


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
                </v-flex>
            </v-layout>
            <template>
                <v-card id="create">
                    <v-speed-dial v-model="fab" :top="top" :bottom="bottom" :right="right" :left="left"
                        :direction="direction" :open-on-hover="hover" :transition="transition">
                        <template v-slot:activator>
                            <v-btn v-model="fab" color="primary darken-2" dark fab>
                                <v-icon>mdi-cogs</v-icon>
                                <v-icon>mdi-close</v-icon>
                            </v-btn>
                        </template>
                        <v-btn fab dark small color="green">
                            <v-icon>mdi-pencil</v-icon>
                        </v-btn>
                        <v-btn fab dark small color="indigo">
                            <v-icon>mdi-plus</v-icon>
                        </v-btn>

                        <v-btn fab dark small color="red">
                            <v-icon>mdi-delete-outline</v-icon>
                        </v-btn>

                        <v-btn @click="timeline=true" fab dark small color="blue">
                            <v-icon>mdi-timeline-outline</v-icon>
                        </v-btn>
                    </v-speed-dial>
                </v-card>
            </template>


            <patrimonio-timeline :dialog="timeline" :patrimonio="id" @close="timeline=false"></patrimonio-timeline>
        </v-container>
    </div>
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
        props: ['id'],
        data: () => ({
            timeline:false,
            direction: 'left',
            fab: false,
            fling: false,
            hover: true,
            tabs: null,
            top: false,
            right: true,
            bottom: true,
            left: false,
            transition: 'scale-transition'
        }),
        computed: {
            ...mapGetters({
                getPatrimonio: 'patrimonio/getPatrimonio',
                getSelectedPatrimonio: 'patrimonio/getSelectedPatrimonio',
                getFormaAquisicao: 'patrimonio/getFormaAquisicao',
                getClasse: 'patrimonio/getClasse',
                loading: 'getLoading',
                getImovel: 'patrimonio/getImovel',
                getLivro: 'patrimonio/getLivro',
                getMovel: 'patrimonio/getMovel',
                getVeiculo: 'patrimonio/getVeiculo',

            }),
            activeFab () {
                switch (this.tabs) {
                case 'one': return { 'class': 'purple', icon: 'account_circle' }
                case 'two': return { 'class': 'red', icon: 'edit' }
                case 'three': return { 'class': 'green', icon: 'keyboard_arrow_up' }
                default: return {}
                }
            },
            details(){
                return this.getSelectedPatrimonio
            },
            imovel(){
                return this.getImovel
            },
            movel(){
                return this.getLivro
            },
            livro(){
                return this.getMovel
            },
            veiculo(){
                return this.getVeiculo
            },
            classe(){
                return this.getClasse
            }
        },
        methods: {
        },
        mounted () {
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
        },

        beforeCreate() {
        },
    }
</script>
