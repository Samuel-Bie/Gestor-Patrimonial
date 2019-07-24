
<template>
    <div>
        <material-card>
            <v-card-text>
                <div>
                    <v-container class="pa-0" grid-list-xl fluid>
                        <v-layout row wrap m0>
                            <v-flex xs12 m0>
                                <span class="heading-4 text-info">Identificaçao e caracterização do bem Imóvel</span>
                            </v-flex>
                        </v-layout>
                    </v-container>

                    <v-form>
                        <v-container class="pa-0" grid-list-xl fluid>
                            <v-layout align-end wrap>
                                <v-flex xs12 md7>
                                    <v-text-field
                                        readonly
                                        label="Designacao"
                                        :value="nomeClassificador"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md5>
                                    <v-select
                                        v-model="classificador"
                                        :items="classificadores" item-text="designacao" item-value="codigo"
                                        :error-messages="classificadorErrors"
                                        label="Codigo geral" required @change="$v.classificador.$touch()" @blur="$v.classificador.$touch()">
                                    </v-select>
                                </v-flex>

                            </v-layout>
                            <v-layout align-end wrap>
                                <v-flex xs12 md4>
                                    <v-select v-model="tipoImovel"
                                        :items="tiposImovel" item-text="designacao" item-value="codigo"
                                        :error-messages="tipoImovelErrors"
                                        label="Tipo de imovel" required @change="$v.tipoImovel.$touch()" @blur="$v.tipoImovel.$touch()">
                                    </v-select>
                                </v-flex>
                                <v-flex xs12 md4>
                                    <v-select v-model="tipoDominio"
                                        :items="tiposDominio" item-text="designacao" item-value="codigo"
                                        :error-messages="tipoDominioErrors"
                                        label="Tipo de domínio" required @change="$v.tipoDominio.$touch()" @blur="$v.tipoDominio.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-select v-model="tipoEdificio"
                                        :items="tiposEdificio" item-text="designacao" item-value="codigo"
                                        :error-messages="tipoEdificioErrors"
                                        label="Tipo de edificio" required @change="$v.tipoEdificio.$touch()" @blur="$v.tipoEdificio.$touch()">
                                    </v-select>
                                </v-flex>
                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md4>
                                     <v-text-field
                                        v-model="nr_divisoes"
                                        mask="###"
                                        label="# Divisoes"
                                        :error-messages="nr_divisoesErrors"
                                        required
                                        @input="$v.nr_divisoes.$touch()"
                                        @blur="$v.nr_divisoes.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="nr_pisos"
                                        mask="###"
                                        label="# Pisos"
                                        :error-messages="nr_pisosErrors"
                                        required
                                        @input="$v.nr_pisos.$touch()"
                                        @blur="$v.nr_pisos.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="cor"
                                        label="Cor Predominante"
                                        :error-messages="corErrors"
                                        required
                                        @input="$v.cor.$touch()"
                                        @blur="$v.cor.$touch()"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md4>
                                    <v-select v-model="estado_conservacao"
                                        :items="['Muito Bom', 'Bom', 'Mau']"
                                        :error-messages="estado_conservacaoErrors"
                                        label="Estado de conservação"
                                        required
                                        @change="$v.estado_conservacao.$touch()"
                                        @blur="$v.estado_conservacao.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="area_cobertura"
                                        label="Area de cobertura"
                                        :error-messages="area_coberturaErrors"
                                        required
                                        @change="$v.area_cobertura.$touch()"
                                        @blur="$v.area_cobertura.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="area_terreno"
                                        label="Area do terreno"
                                        :error-messages="area_terrenoErrors"
                                        required
                                        @change="$v.area_terreno.$touch()"
                                        @blur="$v.area_terreno.$touch()"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md3>
                                    <v-select
                                        v-model="forma_aquisicao"
                                        :items="formasAquisicao"
                                        item-text="designacao" item-value="codigo"
                                        :error-messages="forma_aquisicaoErrors"
                                        label="Forma de aquisicao"
                                        required
                                        @change="$v.forma_aquisicao.$touch()"
                                        @blur="$v.forma_aquisicao.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-select
                                        v-model="estado_aquisicao"
                                        :items="['Novo', 'Usado']"
                                        :error-messages="estado_aquisicaoErrors"
                                        label="Estado de aquisicao"
                                        required
                                        @change="$v.estado_aquisicao.$touch()"
                                        @blur="$v.estado_aquisicao.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="data_aquisicao"
                                        mask="##/##/####"
                                        label="Data de aquisicao"
                                        :error-messages="data_aquisicaoErrors"
                                        required
                                        @change="$v.data_aquisicao.$touch()"
                                        @blur="$v.data_aquisicao.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="ano_construcao"
                                        mask="####"
                                        label="Ano de Construcao"
                                        :error-messages="ano_construcaoErrors"
                                        required
                                        @change="$v.ano_construcao.$touch()"
                                        @blur="$v.ano_construcao.$touch()"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>


                            <v-layout align-end wrap>
                                <v-flex xs12 md4>
                                    <v-select
                                        v-model="elevador"
                                        :items="['SIM', 'NAO']"
                                        :error-messages="elevadorErrors"
                                        label="Tem Elevadores"
                                        required
                                        @change="$v.elevador.$touch()"
                                        @blur="$v.elevador.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-select
                                        v-model="rede_incendio"
                                        :items="['SIM', 'NAO']"
                                        :error-messages="rede_incendioErrors"
                                        label="Rede contra incendio"
                                        required
                                        @change="$v.rede_incendio.$touch()"
                                        @blur="$v.rede_incendio.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="valor_aquisicao"
                                        label="Valor de aquisição"
                                        :error-messages="valor_aquisicaoErrors"
                                        required
                                        @change="$v.valor_aquisicao.$touch()"
                                        @blur="$v.valor_aquisicao.$touch()"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-flex xs12 md6>
                                <v-btn color="danger" @click="voltar">Voltar</v-btn>
                                <v-btn color="secondary" @click="clear">Limpar</v-btn>
                                <v-btn color="info" @click="submit">Proximo</v-btn>
                            </v-flex>
                        </v-container>
                    </v-form>
                </div>
            </v-card-text>
        </material-card>
    </div>
</template>

<script>
    import { validationMixin } from 'vuelidate'
    import { required, maxLength } from 'vuelidate/lib/validators'
    import {
        mapMutations,
        mapState,
        mapActions,
        mapGetters
    } from 'vuex'


    export default {
        mixins: [validationMixin],
        validations: {
            classificador: { required },
            tipoImovel:{required},
            tipoDominio:{required},
            tipoEdificio:{required},

            nr_divisoes:{required,maxLength: maxLength(4)},
            nr_pisos:{required,maxLength: maxLength(3)},
            cor:{required,maxLength: maxLength(255)},

            estado_conservacao:{required},
            area_cobertura:{required,maxLength: maxLength(50)},
            area_terreno:{required,maxLength: maxLength(50)},

            forma_aquisicao:{required},
            estado_aquisicao:{required},

            data_aquisicao:{required},
            ano_construcao:{required},

            elevador:{required},
            rede_incendio:{required},

            valor_aquisicao:{required},


        },

        props:['identificacao'],
        created() {
            this.classificador = this.identificacao.classificador
            this.tipoImovel     = this.identificacao.tipoImovel
            this.tipoDominio    = this.identificacao.tipoDominio
            this.tipoEdificio   = this.identificacao.tipoEdificio
            this.nr_divisoes    = this.identificacao.nr_divisoes
            this.nr_pisos       = this.identificacao.nr_pisos
            this.cor            = this.identificacao.cor
            this.estado_conservacao = this.identificacao.estado_conservacao
            this.area_cobertura = this.identificacao.area_cobertura
            this.area_terreno   = this.identificacao.area_terreno
            this.forma_aquisicao    = this.identificacao.forma_aquisicao
            this.estado_aquisicao   = this.identificacao.estado_aquisicao
            this.data_aquisicao = this.identificacao.data_aquisicao
            this.ano_construcao = this.identificacao.ano_construcao
            this.elevador       = this.identificacao.elevador
            this.rede_incendio  = this.identificacao.rede_incendio
            this.valor_aquisicao = this.identificacao.valor_aquisicao
        },
        data() {
            return {
                classificador:null,

                tipoImovel:null,
                tipoDominio:null,
                tipoEdificio:null,

                nr_divisoes:null,
                nr_pisos:null,
                cor:null,

                estado_conservacao:null,

                area_cobertura:null,
                area_terreno:null,

                forma_aquisicao:null,
                estado_aquisicao:null,

                data_aquisicao:null,
                ano_construcao:null,

                elevador:null,
                rede_incendio:null,
                valor_aquisicao:null,

                tiposEdificio:[
                    {
                        codigo:1,
                        designacao:'Imovel Autonomo'
                    },{
                        codigo:2,
                        designacao:'Agrupamento Imobiliario'
                    },{
                        codigo:3,
                        designacao:'Agrupamento de infraestruturas'
                    },
                ],

                tiposDominio:[
                    {
                        codigo:1,
                        designacao:'Dominio Publico'
                    },
                    {
                        codigo:2,
                        designacao: 'Dominio Privado'
                    }
                ],
                tiposImovel:[
                    {
                        codigo:1,
                        designacao:'Urbano'
                    },
                    {
                        codigo:2,
                        designacao:'Rustico'
                    }
                ]
            }
        },
        computed: {

            ...mapGetters({
                classificadores: 'general/getClassificador',
                formasAquisicao: 'general/getFormasAquisicao',
            }),
            nomeClassificador(){
                if(this.classificador){
                    let cls = this.classificadores.find((clss) => {
                        return clss.codigo === this.classificador
                    })
                    return cls.codigo+'-'+cls.designacao
                }else{
                    return ''
                }
            },

            elevadorErrors(){
                const errors = []
                if (!this.$v.elevador.$dirty) return errors
                !this.$v.elevador.required && errors.push('elevador é obrigtorio')
                return errors
            },
            rede_incendioErrors(){
                const errors = []
                if (!this.$v.rede_incendio.$dirty) return errors
                !this.$v.rede_incendio.required && errors.push('rede_incendio é obrigtorio')
                return errors
            },

            forma_aquisicaoErrors(){
                const errors = []
                if (!this.$v.forma_aquisicao.$dirty) return errors
                !this.$v.forma_aquisicao.required && errors.push('forma_aquisicao é obrigtorio')
                return errors
            },
            estado_aquisicaoErrors(){
                const errors = []
                if (!this.$v.estado_aquisicao.$dirty) return errors
                !this.$v.estado_aquisicao.required && errors.push('estado_aquisicao é obrigtorio')
                return errors
            },

            estado_conservacaoErrors(){
                const errors = []
                if (!this.$v.estado_conservacao.$dirty) return errors
                !this.$v.estado_conservacao.required && errors.push('Estado de conservacao é obrigtorio')
                return errors
            },
            classificadorErrors(){
                const errors = []
                if (!this.$v.classificador.$dirty) return errors
                !this.$v.classificador.required && errors.push('Classificador geral é obrigtorio')
                return errors
            },
            tipoImovelErrors(){
                const errors = []
                if (!this.$v.tipoImovel.$dirty) return errors
                !this.$v.tipoImovel.required && errors.push('Tipo de Imovel é obrigtorio')
                return errors
            },
            tipoDominioErrors(){
                const errors = []
                if (!this.$v.tipoDominio.$dirty) return errors
                !this.$v.tipoDominio.required && errors.push('Tipo de Dominio é obrigtorio')
                return errors
            },
            tipoEdificioErrors(){
                const errors = []
                if (!this.$v.tipoEdificio.$dirty) return errors
                !this.$v.tipoEdificio.required && errors.push('Tipo de edificio é obrigtorio')
                return errors
            },

            nr_divisoesErrors(){
                const errors = []
                if (!this.$v.nr_divisoes.$dirty) return errors
                !this.$v.nr_divisoes.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.nr_divisoes.required && errors.push('Numero de divisoes is required.')
                return errors
            },
            nr_pisosErrors(){
                const errors = []
                if (!this.$v.nr_pisos.$dirty) return errors
                !this.$v.nr_pisos.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.nr_pisos.required && errors.push('Nr de pisos is required.')
                return errors
            },
            corErrors(){
                const errors = []
                if (!this.$v.cor.$dirty) return errors
                !this.$v.cor.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.cor.required && errors.push('Cor is required.')
                return errors
            },


            area_coberturaErrors(){
                const errors = []
                if (!this.$v.area_cobertura.$dirty) return errors
                !this.$v.area_cobertura.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.area_cobertura.required && errors.push('Area de cobertura is required.')
                return errors
            },
            area_terrenoErrors(){
                const errors = []
                if (!this.$v.area_terreno.$dirty) return errors
                !this.$v.area_terreno.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.area_terreno.required && errors.push('Area do terreno is required.')
                return errors
            },

            data_aquisicaoErrors(){
                const errors = []
                if (!this.$v.data_aquisicao.$dirty) return errors
                !this.$v.data_aquisicao.required && errors.push('Data de aquisicao is required.')
                return errors
            },
            ano_construcaoErrors(){
                const errors = []
                if (!this.$v.ano_construcao.$dirty) return errors
                !this.$v.ano_construcao.required && errors.push('Ano de construcao is required.')
                return errors
            },

            valor_aquisicaoErrors(){
                const errors = []
                if (!this.$v.valor_aquisicao.$dirty) return errors
                !this.$v.valor_aquisicao.required && errors.push('Valor de aquisicao is required.')
                return errors
            },
        },

        methods: {
            submit() {
                this.$v.$touch()
                if (!this.$v.$invalid) {
                    this.$emit('dados_atualizados', {
                        classificador:this.classificador,
                        tipoImovel:this.tipoImovel,
                        tipoDominio:this.tipoDominio,
                        tipoEdificio:this.tipoEdificio,
                        nr_divisoes:this.nr_divisoes,
                        nr_pisos:this.nr_pisos,
                        cor:this.cor,
                        estado_conservacao:this.estado_conservacao,
                        area_cobertura:this.area_cobertura,
                        area_terreno:this.area_terreno,
                        forma_aquisicao:this.forma_aquisicao,
                        estado_aquisicao:this.estado_aquisicao,
                        data_aquisicao:this.data_aquisicao,
                        ano_construcao:this.ano_construcao,
                        elevador:this.elevador,
                        rede_incendio:this.rede_incendio,
                        valor_aquisicao:this.valor_aquisicao,
                    })
                    this.$emit('validado')
                }
            }, voltar(){
                this.$emit('back')
            },
            clear () {
                this.$v.$reset()
                this.name   = ''
                this.select = null
            }
        }
    }
</script>