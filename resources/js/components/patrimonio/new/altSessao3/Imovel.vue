<template>
    <div>
        <material-card>
            <v-card-text>
                <div>
                    <v-container class="pa-0" grid-list-xl fluid>
                        <v-layout row wrap m0>
                            <v-flex xs12 m0>
                                <span class="heading-4 text-info">Informacao adicional do bem Imóvel</span>
                            </v-flex>
                        </v-layout>
                    </v-container>

                    <v-form>
                        <v-container class="pa-0" grid-list-xl fluid>
                            <v-layout align-end wrap>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="cons_reg_predial"
                                        label="Conservatoria de registro predial"
                                        :error-messages="cons_reg_predialErrors"
                                        required
                                        @input="$v.cons_reg_predial.$touch()"
                                        @blur="$v.cons_reg_predial.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                     <v-text-field
                                        v-model="nr_reg_predial"
                                        mask="#############"
                                        label="# de registro predial"
                                        :error-messages="nr_reg_predialErrors"
                                        required
                                        @input="$v.nr_reg_predial.$touch()"
                                        @blur="$v.nr_reg_predial.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md2>
                                    <v-text-field
                                        v-model="folhas_de_reg_predial"
                                        mask="####"
                                        label="Folhas de reg. predial"
                                        :error-messages="folhas_de_reg_predialErrors"
                                        required
                                        @input="$v.folhas_de_reg_predial.$touch()"
                                        @blur="$v.folhas_de_reg_predial.$touch()"
                                    ></v-text-field>
                                </v-flex>


                                <v-flex xs12 md2>
                                    <v-text-field
                                        v-model="livro_de_reg_predial"
                                        mask="####"
                                        label="Folhas de reg. predial"
                                        :error-messages="livro_de_reg_predialErrors"
                                        required
                                        @input="$v.livro_de_reg_predial.$touch()"
                                        @blur="$v.livro_de_reg_predial.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md2>
                                     <v-text-field
                                        v-model="ano_reg_predial"
                                        mask="####"
                                        label="Ano de registro predial"
                                        :error-messages="ano_reg_predialErrors"
                                        required
                                        @input="$v.ano_reg_predial.$touch()"
                                        @blur="$v.ano_reg_predial.$touch()"
                                    ></v-text-field>
                                </v-flex>

                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="cons_reg_fiscal"
                                        label="Conservatoria de registro fiscal"
                                        :error-messages="cons_reg_fiscalErrors"
                                        required
                                        @input="$v.cons_reg_fiscal.$touch()"
                                        @blur="$v.cons_reg_fiscal.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                     <v-text-field
                                        v-model="nr_reg_fiscal"
                                        mask="#############"
                                        label="# de registro fiscal"
                                        :error-messages="nr_reg_fiscalErrors"
                                        required
                                        @input="$v.nr_reg_fiscal.$touch()"
                                        @blur="$v.nr_reg_fiscal.$touch()"
                                    ></v-text-field>
                                </v-flex>


                                <v-flex xs12 md2>
                                    <v-text-field
                                        v-model="folhas_de_reg_fiscal"
                                        mask="####"
                                        label="Folhas de reg. fiscal"
                                        :error-messages="folhas_de_reg_fiscalErrors"
                                        required
                                        @input="$v.folhas_de_reg_fiscal.$touch()"
                                        @blur="$v.folhas_de_reg_fiscal.$touch()"
                                    ></v-text-field>
                                </v-flex>


                                <v-flex xs12 md2>
                                    <v-text-field
                                        v-model="livro_de_reg_fiscal"
                                        mask="####"
                                        label="Folhas de reg. fiscal"
                                        :error-messages="livro_de_reg_fiscalErrors"
                                        required
                                        @input="$v.livro_de_reg_fiscal.$touch()"
                                        @blur="$v.livro_de_reg_fiscal.$touch()"
                                    ></v-text-field>
                                </v-flex>



                                <v-flex xs12 md2>
                                     <v-text-field
                                        v-model="ano_reg_fiscal"
                                        mask="####"
                                        label="Ano de registro fiscal"
                                        :error-messages="ano_reg_fiscalErrors"
                                        required
                                        @input="$v.ano_reg_fiscal.$touch()"
                                        @blur="$v.ano_reg_fiscal.$touch()"
                                    ></v-text-field>
                                </v-flex>

                            </v-layout>

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
                                    <v-select
                                        v-model="seguro"
                                        :items="['SIM', 'NAO']"
                                        :error-messages="seguroErrors"
                                        label="Seguro"
                                        required
                                        @change="$v.seguro.$touch()"
                                        @blur="$v.seguro.$touch()">
                                    </v-select>
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

            cons_reg_predial:{required},
            cons_reg_fiscal:{required},

            nr_reg_predial:{required},
            nr_reg_fiscal:{required},

            livro_de_reg_predial:{required},
            livro_de_reg_fiscal:{required},

            folhas_de_reg_predial:{required},
            folhas_de_reg_fiscal:{required},

            ano_reg_predial:{required},
            ano_reg_fiscal:{required},

            empresa_fornecedora:{required},
            nuit:{required},

            endereco:{required},
            cidade:{required},


            tipo_comprovativo:{required},
            nr_comprovativo:{required},

            seguro:{required},

            observacoes:{},
        },

        props:['adicional'],
        created() {
            this.cons_reg_predial   = this.adicional.cons_reg_predial
            this.cons_reg_fiscal    = this.adicional.cons_reg_fiscal

            this.nr_reg_predial = this.adicional.nr_reg_predial
            this.nr_reg_fiscal  = this.adicional.nr_reg_fiscal

            this.ano_reg_fiscal     = this.adicional.ano_reg_fiscal
            this.ano_reg_predial    = this.adicional.ano_reg_predial

            this.livro_de_reg_predial   = this.adicional.livro_de_reg_predial
            this.livro_de_reg_fiscal    = this.adicional.livro_de_reg_fiscal

            this.empresa_fornecedora    = this.adicional.empresa_fornecedora
            this.nuit                   = this.adicional.nuit

            this.folhas_de_reg_predial = this.adicional.folhas_de_reg_predial
            this.folhas_de_reg_fiscal  = this.adicional.folhas_de_reg_fiscal

            this.endereco = this.adicional.endereco
            this.cidade   = this.adicional.cidade

            this.tipo_comprovativo  = this.adicional.tipo_comprovativo
            this.nr_comprovativo    = this.adicional.nr_comprovativo

            this.seguro         = this.adicional.seguro
            this.observacoes    = this.adicional.observacoes
        },
        data() {
            return {

                cons_reg_predial:null,
                cons_reg_fiscal:null,

                nr_reg_predial:null,
                nr_reg_fiscal:null,

                ano_reg_fiscal:null,
                ano_reg_predial:null,

                livro_de_reg_predial:null,
                livro_de_reg_fiscal:null,

                folhas_de_reg_predial:null,
                folhas_de_reg_fiscal:null,

                empresa_fornecedora:null,
                nuit:null,

                endereco:null,
                cidade:null,

                tipo_comprovativo:null,
                nr_comprovativo:null,

                seguro:null,
                observacoes:null,
            }
        },
        computed: {
            seguroErrors(){
                const errors = []
                if (!this.$v.seguro.$dirty) return errors
                !this.$v.seguro.required && errors.push('seguro é obrigtorio')
                return errors
            },
            folhas_de_reg_fiscalErrors(){
                const errors = []
                if (!this.$v.folhas_de_reg_fiscal.$dirty) return errors
                !this.$v.folhas_de_reg_fiscal.required && errors.push('Folhas de registro fiscal é obrigtorio')
                return errors
            },

            folhas_de_reg_predialErrors(){
                const errors = []
                if (!this.$v.folhas_de_reg_predial.$dirty) return errors
                !this.$v.folhas_de_reg_predial.required && errors.push('Folhas de registro predial é obrigtorio')
                return errors
            },

            cons_reg_predialErrors(){
                const errors = []
                if (!this.$v.cons_reg_predial.$dirty) return errors
                !this.$v.cons_reg_predial.required && errors.push('Conservatoria de registo predial é obrigtorio')
                return errors
            },

            cons_reg_fiscalErrors(){
                const errors = []
                if (!this.$v.cons_reg_fiscal.$dirty) return errors
                !this.$v.cons_reg_fiscal.required && errors.push('Conservatoria de registo fiscal é obrigtorio')
                return errors
            },

            nr_reg_predialErrors(){
                const errors = []
                if (!this.$v.nr_reg_predial.$dirty) return errors
                !this.$v.nr_reg_predial.required && errors.push('Nr de registro é obrigtorio')
                return errors
            },

            nr_reg_fiscalErrors(){
                const errors = []
                if (!this.$v.nr_reg_fiscal.$dirty) return errors
                !this.$v.nr_reg_fiscal.required && errors.push('Nr de registro é obrigtorio')
                return errors
            },

            ano_reg_fiscalErrors(){
                const errors = []
                if (!this.$v.ano_reg_fiscal.$dirty) return errors
                !this.$v.ano_reg_fiscal.required && errors.push('Ano de registro is required.')
                return errors
            },

            livro_de_reg_predialErrors(){
                const errors = []
                if (!this.$v.livro_de_reg_predial.$dirty) return errors
                !this.$v.livro_de_reg_predial.required && errors.push('Livro de registro is required.')
                return errors
            },

            livro_de_reg_fiscalErrors(){
                const errors = []
                if (!this.$v.livro_de_reg_fiscal.$dirty) return errors
                !this.$v.livro_de_reg_fiscal.required && errors.push('Livro de registro is required.')
                return errors
            },

            ano_reg_predialErrors(){
                const errors = []
                if (!this.$v.ano_reg_predial.$dirty) return errors
                !this.$v.ano_reg_predial.required && errors.push('Ano de registro is required.')
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
                        cons_reg_predial:this.cons_reg_predial,
                        cons_reg_fiscal:this.cons_reg_fiscal,

                        nr_reg_predial:this.nr_reg_predial,
                        nr_reg_fiscal:this.nr_reg_fiscal,

                        ano_reg_fiscal:this.ano_reg_fiscal,
                        ano_reg_predial:this.ano_reg_predial,

                        endereco:this.endereco,
                        cidade:this.cidade,

                        empresa_fornecedora:this.empresa_fornecedora,
                        nuit:this.nuit,

                        folhas_de_reg_predial:this.folhas_de_reg_predial,
                        folhas_de_reg_fiscal:this.folhas_de_reg_fiscal,

                        tipo_comprovativo:this.tipo_comprovativo,
                        nr_comprovativo:this.nr_comprovativo,

                        seguro:this.seguro,
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