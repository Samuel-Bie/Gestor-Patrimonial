
<template>
    <div>
        <material-card>
            <v-card-text>
                <div>
                    <v-container class="pa-0" grid-list-xl fluid>
                        <v-layout row wrap m0>
                            <v-flex xs12 m0>
                                <span class="heading-4 text-info">Identificaçao e caracterização do bem móvel</span>
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
                                    <v-select v-model="classificador" :items="classificadores" item-text="designacao" item-value="codigo" :error-messages="classificadorErrors"
                                        label="Codigo geral" required @change="$v.classificador.$touch()" @blur="$v.classificador.$touch()">
                                    </v-select>
                                </v-flex>

                            </v-layout>

                            <v-layout  align-end row wrap>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="Marca"
                                        v-model="marca"
                                        :error-messages="marcaErrors"
                                        required
                                        @change="$v.marca.$touch()"
                                        @blur="$v.marca.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="# Serie"
                                        v-model="nr_serie"
                                        :error-messages="nr_serieErrors"
                                        required
                                        @change="$v.nr_serie.$touch()"
                                        @blur="$v.nr_serie.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                 <v-flex xs12 md3>
                                    <v-text-field
                                        label="Modelo"
                                        v-model="modelo"
                                        :error-messages="modeloErrors"
                                        required
                                        @change="$v.modelo.$touch()"
                                        @blur="$v.modelo.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="cor"
                                        label="Cor Predominante"
                                        :error-messages="corErrors"
                                        required
                                        @input="$v.cor.$touch()"
                                        @blur="$v.cor.$touch()"
                                    ></v-text-field>
                                </v-flex>
                                </v-flex>
                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="Comprimento"
                                        v-model="comprimento"
                                        :error-messages="comprimentoErrors"
                                        required
                                        @change="$v.comprimento.$touch()"
                                        @blur="$v.comprimento.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="largura"
                                        label="Largura"
                                        :error-messages="larguraErrors"
                                        required
                                        @change="$v.largura.$touch()"
                                        @blur="$v.largura.$touch()"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="altura"
                                        label="Altura"
                                        :error-messages="alturaErrors"
                                        required
                                        @change="$v.altura.$touch()"
                                        @blur="$v.altura.$touch()"
                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="material"
                                        label="Material predominante"
                                        :error-messages="materialErrors"
                                        required
                                        @change="$v.material.$touch()"
                                        @blur="$v.material.$touch()"
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
                                     <v-select v-model="estado_conservacao"
                                        :items="['Muito Bom', 'Bom', 'Mau']"
                                        :error-messages="estado_conservacaoErrors"
                                        label="Estado de conservação"
                                        required
                                        @change="$v.estado_conservacao.$touch()"
                                        @blur="$v.estado_conservacao.$touch()">
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
                            </v-layout>


                            <v-layout align-end wrap>
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
            marca:{required},
            nr_serie:{required},
            modelo:{required},

            material:{required,maxLength: maxLength(255)},
            cor:{required,maxLength: maxLength(255)},

            estado_conservacao:{required},

            altura:{required,maxLength: maxLength(6)},
            comprimento:{required,maxLength: maxLength(6)},
            largura:{required,maxLength: maxLength(6)},

            forma_aquisicao:{required},
            estado_aquisicao:{required},

            data_aquisicao:{required},

            valor_aquisicao:{required}
        },

        props:['identificacao'],
        created() {
            this.classificador = this.identificacao.classificador
            this.marca     = this.identificacao.marca
            this.nr_serie    = this.identificacao.nr_serie
            this.modelo   = this.identificacao.modelo
            this.material    = this.identificacao.material
            this.altura       = this.identificacao.altura
            this.cor            = this.identificacao.cor
            this.estado_conservacao = this.identificacao.estado_conservacao
            this.comprimento = this.identificacao.comprimento
            this.largura   = this.identificacao.largura
            this.forma_aquisicao    = this.identificacao.forma_aquisicao
            this.estado_aquisicao   = this.identificacao.estado_aquisicao
            this.data_aquisicao = this.identificacao.data_aquisicao
            this.valor_aquisicao = this.identificacao.valor_aquisicao
        },
        data() {
            return {
                classificador:null,

                marca:null,
                nr_serie:null,
                modelo:null,

                material:null,
                altura:null,
                cor:null,

                estado_conservacao:null,

                comprimento:null,
                largura:null,

                forma_aquisicao:null,
                estado_aquisicao:null,

                data_aquisicao:null,
                valor_aquisicao:null,
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
            marcaErrors(){
                const errors = []
                if (!this.$v.marca.$dirty) return errors
                !this.$v.marca.required && errors.push('marca é obrigtorio')
                return errors
            },
            nr_serieErrors(){
                const errors = []
                if (!this.$v.nr_serie.$dirty) return errors
                !this.$v.nr_serie.required && errors.push('Nr de serie é obrigtorio')
                return errors
            },
            modeloErrors(){
                const errors = []
                if (!this.$v.modelo.$dirty) return errors
                !this.$v.modelo.required && errors.push('Modelo é obrigtorio')
                return errors
            },

            materialErrors(){
                const errors = []
                if (!this.$v.material.$dirty) return errors
                !this.$v.material.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.material.required && errors.push('material is required.')
                return errors
            },
            alturaErrors(){
                const errors = []
                if (!this.$v.altura.$dirty) return errors
                !this.$v.altura.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.altura.required && errors.push('Altura is required.')
                return errors
            },
            corErrors(){
                const errors = []
                if (!this.$v.cor.$dirty) return errors
                !this.$v.cor.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.cor.required && errors.push('Cor is required.')
                return errors
            },


            comprimentoErrors(){
                const errors = []
                if (!this.$v.comprimento.$dirty) return errors
                !this.$v.comprimento.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.comprimento.required && errors.push('Comprimemnto is required.')
                return errors
            },
            larguraErrors(){
                const errors = []
                if (!this.$v.largura.$dirty) return errors
                !this.$v.largura.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.largura.required && errors.push('largura is required.')
                return errors
            },

            data_aquisicaoErrors(){
                const errors = []
                if (!this.$v.data_aquisicao.$dirty) return errors
                !this.$v.data_aquisicao.required && errors.push('Data de aquisicao is required.')
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
                        marca:this.marca,
                        nr_serie:this.nr_serie,
                        modelo:this.modelo,
                        material:this.material,
                        altura:this.altura,
                        cor:this.cor,
                        estado_conservacao:this.estado_conservacao,
                        comprimento:this.comprimento,
                        largura:this.largura,
                        forma_aquisicao:this.forma_aquisicao,
                        estado_aquisicao:this.estado_aquisicao,
                        data_aquisicao:this.data_aquisicao,
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