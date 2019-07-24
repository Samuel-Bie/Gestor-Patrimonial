
<template>
    <div>
        <material-card>
            <v-card-text>
                <div>
                    <v-container class="pa-0" grid-list-xl fluid>
                        <v-layout row wrap m0>
                            <v-flex xs12 m0>
                                <span class="heading-4 text-info">Identificaçao e caracterização do bem Veiculos</span>
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

                             <v-layout align-end wrap>
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
                                        label="Combustivel"
                                        v-model="combustivel"
                                        :error-messages="combustivelErrors"
                                        required
                                        @change="$v.combustivel.$touch()"
                                        @blur="$v.combustivel.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="Cilindrada"
                                        v-model="cilindrada"
                                        :error-messages="cilindradaErrors"
                                        required
                                        @change="$v.cilindrada.$touch()"
                                        @blur="$v.cilindrada.$touch()"

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
                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="# Motor"
                                        v-model="motor"
                                        :error-messages="motorErrors"
                                        required
                                        @change="$v.motor.$touch()"
                                        @blur="$v.motor.$touch()"

                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        mask="##"
                                        label="# Portas"
                                        v-model="portas"
                                        :error-messages="portasErrors"
                                        required
                                        @change="$v.portas.$touch()"
                                        @blur="$v.portas.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="# Chassis"
                                        v-model="chassis"
                                        :error-messages="chassisErrors"
                                        required
                                        @change="$v.chassis.$touch()"
                                        @blur="$v.chassis.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="Lotaçao"
                                        v-model="lotacao"
                                        :error-messages="lotacaoErrors"
                                        required
                                        @change="$v.lotacao.$touch()"
                                        @blur="$v.lotacao.$touch()"

                                    ></v-text-field>
                                </v-flex>
                            </v-layout>



                            <v-layout align-end wrap>
                                <v-flex xs12 md3>
                                   <v-text-field
                                        label="Matricula"
                                        v-model="matricula"
                                        :error-messages="matriculaErrors"
                                        required
                                        @change="$v.matricula.$touch()"
                                        @blur="$v.matricula.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                   <v-text-field
                                        label="Matricula Nova"
                                        v-model="matricula_nova"
                                        :error-messages="matricula_novaErrors"
                                        required
                                        @change="$v.matricula_nova.$touch()"
                                        @blur="$v.matricula_nova.$touch()"

                                    ></v-text-field>
                                </v-flex>


                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="ano_fabrico"
                                        mask="####"
                                        label="Ano de fabrico"
                                        :error-messages="ano_fabricoErrors"
                                        required
                                        @change="$v.ano_fabrico.$touch()"
                                        @blur="$v.ano_fabrico.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        mask="######"
                                        label="Tonelagem"
                                         v-model="tonelagem"
                                        :error-messages="tonelagemErrors"
                                        required
                                        @change="$v.tonelagem.$touch()"
                                        @blur="$v.tonelagem.$touch()"

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
                                     <v-select v-model="estado_conservacao"
                                        :items="['Muito Bom', 'Bom', 'Mau']"
                                        :error-messages="estado_conservacaoErrors"
                                        label="Estado de conservação"
                                        required
                                        @change="$v.estado_conservacao.$touch()"
                                        @blur="$v.estado_conservacao.$touch()">
                                    </v-select>
                                </v-flex>
                            </v-layout>


                            <v-layout align-end wrap>

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
            modelo:{required},

            combustivel:{required},
            cilindrada:{required},
            motor:{required},
            portas:{required},
            chassis:{required},
            lotacao:{required},
            matricula:{required},
            matricula_nova:{required},
            tonelagem:{required},

            cor:{required,maxLength: maxLength(255)},

            estado_conservacao:{required},

            forma_aquisicao:{required},
            estado_aquisicao:{required},

            data_aquisicao:{required},
            ano_fabrico:{required},

            valor_aquisicao:{required},
        },

        props:['identificacao'],
        created() {
            this.classificador = this.identificacao.classificador

            this.marca     = this.identificacao.marca
            this.modelo   = this.identificacao.modelo
            this.combustivel     = this.identificacao.combustivel
            this.cilindrada    = this.identificacao.cilindrada
            this.motor   = this.identificacao.motor

            this.portas    = this.identificacao.portas
            this.chassis       = this.identificacao.chassis
            this.lotacao = this.identificacao.lotacao
            this.matricula   = this.identificacao.matricula
            this.matricula_nova       = this.identificacao.matricula_nova
            this.tonelagem  = this.identificacao.tonelagem
            this.cor            = this.identificacao.cor


            this.estado_conservacao = this.identificacao.estado_conservacao

            this.forma_aquisicao    = this.identificacao.forma_aquisicao
            this.estado_aquisicao   = this.identificacao.estado_aquisicao
            this.data_aquisicao = this.identificacao.data_aquisicao
            this.ano_fabrico = this.identificacao.ano_fabrico
            this.valor_aquisicao = this.identificacao.valor_aquisicao
        },
        data() {
            return {
                classificador:null,
                marca:null,
                modelo:null,
                combustivel:null,
                cilindrada:null,
                motor:null,

                portas:null,
                chassis:null,
                cor:null,
                lotacao:null,
                matricula:null,
                matricula_nova:null,
                tonelagem:null,



                estado_conservacao:null,
                forma_aquisicao:null,
                estado_aquisicao:null,

                data_aquisicao:null,
                ano_fabrico:null,

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
            modeloErrors(){
                const errors = []
                if (!this.$v.modelo.$dirty) return errors
                !this.$v.modelo.required && errors.push('Modelo é obrigtorio')
                return errors
            },
            combustivelErrors(){
                const errors = []
                if (!this.$v.combustivel.$dirty) return errors
                !this.$v.combustivel.required && errors.push('Combustivel é obrigtorio')
                return errors
            },

            cilindradaErrors(){
                const errors = []
                if (!this.$v.cilindrada.$dirty) return errors
                !this.$v.cilindrada.required && errors.push('Cilindrada é obrigtorio')
                return errors
            },
            motorErrors(){
                const errors = []
                if (!this.$v.motor.$dirty) return errors
                !this.$v.motor.required && errors.push('Nr de Motor é obrigtorio')
                return errors
            },

            portasErrors(){
                const errors = []
                if (!this.$v.portas.$dirty) return errors
                !this.$v.portas.required && errors.push('Numero de Portas is required.')
                return errors
            },
            chassisErrors(){
                const errors = []
                if (!this.$v.chassis.$dirty) return errors
                !this.$v.chassis.required && errors.push('Nr de chassis is required.')
                return errors
            },

            lotacaoErrors(){
                const errors = []
                if (!this.$v.lotacao.$dirty) return errors
                !this.$v.lotacao.required && errors.push('Lotacao is required.')
                return errors
            },
            matriculaErrors(){
                const errors = []
                if (!this.$v.matricula.$dirty) return errors
                !this.$v.matricula.required && errors.push('Matricula is required.')
                return errors
            },

            matricula_novaErrors(){
                const errors = []
                if (!this.$v.matricula_nova.$dirty) return errors
                !this.$v.matricula_nova.required && errors.push('Matricula is required.')
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


            corErrors(){
                const errors = []
                if (!this.$v.cor.$dirty) return errors
                !this.$v.cor.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.cor.required && errors.push('Cor is required.')
                return errors
            },

            tonelagemErrors(){
                const errors = []
                if (!this.$v.tonelagem.$dirty) return errors
                !this.$v.tonelagem.required && errors.push('tonelagem is required.')
                return errors
            },
            data_aquisicaoErrors(){
                const errors = []
                if (!this.$v.data_aquisicao.$dirty) return errors
                !this.$v.data_aquisicao.required && errors.push('Data de aquisicao is required.')
                return errors
            },
            ano_fabricoErrors(){
                const errors = []
                if (!this.$v.ano_fabrico.$dirty) return errors
                !this.$v.ano_fabrico.required && errors.push('Ano de construcao is required.')
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
                        modelo:this.modelo,
                        combustivel:this.combustivel,
                        cilindrada:this.cilindrada,
                        motor:this.motor,
                        portas:this.portas,
                        chassis:this.chassis,
                        cor:this.cor,
                        estado_conservacao:this.estado_conservacao,
                        lotacao:this.lotacao,
                        matricula:this.matricula,
                        forma_aquisicao:this.forma_aquisicao,
                        estado_aquisicao:this.estado_aquisicao,
                        data_aquisicao:this.data_aquisicao,
                        ano_fabrico:this.ano_fabrico,
                        matricula_nova:this.matricula_nova,
                        tonelagem:this.tonelagem,
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