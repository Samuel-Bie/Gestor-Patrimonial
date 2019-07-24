
<template>
    <div>
        <material-card>
            <v-card-text>
                <div>
                    <v-container class="pa-0" grid-list-xl fluid>
                        <v-layout row wrap m0>
                            <v-flex xs12 m0>
                                <span class="heading-4 text-info">Informacao adicional do Livro</span>
                            </v-flex>
                        </v-layout>
                    </v-container>

                    <v-form>
                        <v-container class="pa-0" grid-list-xl fluid>
                            <v-layout align-end wrap>
                                <v-flex xs12 md6>
                                    <v-text-field
                                        v-model="empresa_fornecedora"
                                        label="Empresa construtora/fornecedora"
                                        :error-messages="empresa_fornecedoraErrors"
                                        required
                                        @input="$v.empresa_fornecedora.$touch()"
                                        @blur="$v.empresa_fornecedora.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="nuit"
                                        label="NUIT"
                                        :error-messages="nuitErrors"
                                        required
                                        @input="$v.nuit.$touch()"
                                        @blur="$v.nuit.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="cidade"
                                        label="Cidade"
                                        :error-messages="cidadeErrors"
                                        required
                                        @change="$v.cidade.$touch()"
                                        @blur="$v.cidade.$touch()"
                                    ></v-text-field>
                                </v-flex>



                            </v-layout>

                            <v-layout align-end wrap>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="endereco"
                                        label="Endereco"
                                        :error-messages="enderecoErrors"
                                        required
                                        @change="$v.endereco.$touch()"
                                        @blur="$v.endereco.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="tipo_comprovativo"
                                        label="Tipo de comprovativo"
                                        :error-messages="tipo_comprovativoErrors"
                                        required
                                        @change="$v.tipo_comprovativo.$touch()"
                                        @blur="$v.tipo_comprovativo.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="nr_comprovativo"
                                        label="# Comprovativo"
                                        :error-messages="nr_comprovativoErrors"
                                        required
                                        @change="$v.nr_comprovativo.$touch()"
                                        @blur="$v.nr_comprovativo.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="utilizador"
                                        label="Utilizador"
                                        :error-messages="utilizadorErrors"
                                        required
                                        @change="$v.utilizador.$touch()"
                                        @blur="$v.utilizador.$touch()"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>


                            <v-layout align-end wrap>
                                <v-flex xs12>
                                    <v-textarea
                                        v-model="observacoes"
                                        label="Observacoes"
                                        :error-messages="observacoesErrors"
                                        @change="$v.observacoes.$touch()"
                                        @blur="$v.observacoes.$touch()"
                                    ></v-textarea>
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

    export default {
        mixins: [validationMixin],
        validations: {
            empresa_fornecedora:{required},
            nuit:{required},

            endereco:{required},
            cidade:{required},


            tipo_comprovativo:{required},
            nr_comprovativo:{required},

            utilizador:{required},

            observacoes:{},
        },

        props:['adicional'],
        created() {
            this.empresa_fornecedora    = this.adicional.empresa_fornecedora
            this.nuit                   = this.adicional.nuit


            this.endereco = this.adicional.endereco
            this.cidade   = this.adicional.cidade

            this.tipo_comprovativo  = this.adicional.tipo_comprovativo
            this.nr_comprovativo    = this.adicional.nr_comprovativo

            this.utilizador         = this.adicional.utilizador
            this.observacoes    = this.adicional.observacoes
        },
        data() {
            return {
                empresa_fornecedora:null,
                nuit:null,

                endereco:null,
                cidade:null,

                tipo_comprovativo:null,
                nr_comprovativo:null,

                utilizador:null,
                observacoes:null,
            }
        },
        computed: {
            utilizadorErrors(){
                const errors = []
                if (!this.$v.utilizador.$dirty) return errors
                !this.$v.utilizador.required && errors.push('utilizador é obrigtorio')
                return errors
            },
            empresa_fornecedoraErrors(){
                const errors = []
                if (!this.$v.empresa_fornecedora.$dirty) return errors
                !this.$v.empresa_fornecedora.required && errors.push('Empresa fornecedora is required.')
                return errors
            },
            nuitErrors(){
                const errors = []
                if (!this.$v.nuit.$dirty) return errors
                !this.$v.nuit.required && errors.push('NUIT is required.')
                return errors
            },
            enderecoErrors(){
                const errors = []
                if (!this.$v.endereco.$dirty) return errors
                !this.$v.endereco.required && errors.push('Endereco is required.')
                return errors
            },
            cidadeErrors(){
                const errors = []
                if (!this.$v.cidade.$dirty) return errors
                !this.$v.cidade.required && errors.push('Cidade is required.')
                return errors
            },

            tipo_comprovativoErrors(){
                const errors = []
                if (!this.$v.tipo_comprovativo.$dirty) return errors
                !this.$v.tipo_comprovativo.required && errors.push('Tipo de comprovativo is required.')
                return errors
            },
            nr_comprovativoErrors(){
                const errors = []
                if (!this.$v.nr_comprovativo.$dirty) return errors
                !this.$v.nr_comprovativo.required && errors.push('nr do comprovativo is required.')
                return errors
            },

            observacoesErrors(){
                const errors = []
                if (!this.$v.observacoes.$dirty)
                    return errors
                return errors
            },
        },

        methods: {
            submit() {
                this.$v.$touch()
                if (!this.$v.$invalid) {
                    this.$emit('dados_atualizados', {

                        endereco:this.endereco,
                        cidade:this.cidade,

                        empresa_fornecedora:this.empresa_fornecedora,
                        nuit:this.nuit,

                        tipo_comprovativo:this.tipo_comprovativo,
                        nr_comprovativo:this.nr_comprovativo,

                        utilizador:this.utilizador,
                        observacoes:this.observacoes,
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