<template>
    <div>
        <material-card
            color="info"
            title="Tipo de Bem"
            >
            <v-card-text >
                <v-container class="pa-0" grid-list-xl fluid px-0 >
                    <v-radio-group v-model="escolha">
                        <v-layout row wrap>
                            <v-flex xs6 md3 v-for="(item, index) in primaryOptions" :key="index">
                                <v-radio
                                    :label="item"
                                    :value="item"
                                ></v-radio>
                            </v-flex>
                        </v-layout>
                    </v-radio-group>
                </v-container>
            </v-card-text>
        </material-card>

        <patrimonio-new-alt-sessao2-imovel  :identificacao="identificacao" v-if="escolha==='Imovel'"  v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao2-imovel>
        <patrimonio-new-alt-sessao2-movel   :identificacao="identificacao" v-if="escolha==='Movel'"   v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao2-movel>
        <patrimonio-new-alt-sessao2-veiculo :identificacao="identificacao" v-if="escolha==='Veiculo'" v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao2-veiculo>
        <patrimonio-new-alt-sessao2-livro   :identificacao="identificacao" v-if="escolha==='Livro'"   v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao2-livro>
    </div>
</template>

<script>
    export default {
        props:['tipo','identificacao'],
        data() {
            return {
                escolha:null,

                primaryOptions:[
                    'Imovel',
                    'Movel',
                    'Veiculo',
                    'Livro',
                ]
            }
        },
        created() {
            this.escolha = this.tipo
        },
        methods: {
            validado(){
                this.$emit('validado')
            },
            voltar(){
                this.$emit('back')
            },
            atualizarDados(dados){
                this.$emit('dados_atualizados', dados)
            }
        },
        watch: {
            escolha (val) {
                if(val!=this.tipo)
                this.$emit('seletedTipo', this.escolha)
            },
        }
    }
</script>