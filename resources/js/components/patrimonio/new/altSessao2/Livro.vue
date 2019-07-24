
<template>
    <div>
        <material-card>
            <v-card-text>
                <div>
                    <v-container class="pa-0" grid-list-xl fluid>
                        <v-layout row wrap m0>
                            <v-flex xs12 m0>
                                <span class="heading-4 text-info">Identificaçao e caracterização do bem livro ou publicação</span>
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

                                <v-flex xs12 md7>
                                     <v-text-field
                                        v-model="assunto"
                                        label="Assunto"
                                        :error-messages="assuntoErrors"
                                        required
                                        @input="$v.assunto.$touch()"
                                        @blur="$v.assunto.$touch()"


                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md5>
                                    <v-text-field
                                        label="Tipo de obra ou livro"
                                        v-model="tipo_obra"
                                        :error-messages="tipo_obraErrors"
                                        required
                                        @input="$v.tipo_obra.$touch()"
                                        @blur="$v.tipo_obra.$touch()"

                                    ></v-text-field>
                                </v-flex>


                            </v-layout>

                             <v-layout align-end wrap>
                                <v-flex xs12>
                                    <v-text-field
                                        v-model="autor"
                                        label="Autor"
                                        :error-messages="autorErrors"
                                        required
                                        @change="$v.autor.$touch()"
                                        @blur="$v.autor.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md6>
                                     <v-text-field
                                        v-model="editora"
                                        label="Editora"
                                        :error-messages="editoraErrors"
                                        required
                                        @change="$v.editora.$touch()"
                                        @blur="$v.editora.$touch()"

                                    ></v-text-field>
                                </v-flex>
                                <v-flex xs12 md6>
                                     <v-text-field
                                        label="Local de edição"
                                        v-model="local_edicao"
                                        :error-messages="local_edicaoErrors"
                                        required
                                        @change="$v.local_edicao.$touch()"
                                        @blur="$v.local_edicao.$touch()"
                                    ></v-text-field>
                                </v-flex>
                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md3>
                                     <v-text-field
                                        v-model="nr_edicao"
                                        label="# Edição"
                                        :error-messages="nr_edicaoErrors"
                                        required
                                        @change="$v.nr_edicao.$touch()"
                                        @blur="$v.nr_edicao.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="Ano de Edição"
                                        v-model="ano_edicao"
                                        mask="####"
                                        :error-messages="ano_edicaoErrors"
                                        required
                                        @change="$v.ano_edicao.$touch()"
                                        @blur="$v.ano_edicao.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        label="# Páginas"
                                        v-model="nr_paginas"
                                        mask="####"
                                        :error-messages="nr_paginasErrors"
                                        required
                                        @change="$v.nr_paginas.$touch()"
                                        @blur="$v.nr_paginas.$touch()"

                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md3>
                                    <v-text-field
                                        v-model="nr_volume"
                                        mask="####"
                                        label="# Volume"
                                        :error-messages="nr_volumeErrors"
                                        required
                                        @change="$v.nr_volume.$touch()"
                                        @blur="$v.nr_volume.$touch()"
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
                                    <v-select
                                        v-model="estado_conservacao"
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
            local_edicao:{required},
            nr_edicao:{required},
            nr_paginas:{required},

            assunto:{required},
            tipo_obra:{required},

            estado_conservacao:{required},
            autor:{required,maxLength: maxLength(250)},
            editora:{required,maxLength: maxLength(250)},

            forma_aquisicao:{required},
            estado_aquisicao:{required},

            data_aquisicao:{required},
            ano_edicao:{required},

            nr_volume:{required},

            valor_aquisicao:{required}
        },

        props:['identificacao'],
        created() {
            this.classificador = this.identificacao.classificador
            this.local_edicao     = this.identificacao.local_edicao
            this.nr_edicao    = this.identificacao.nr_edicao
            this.nr_paginas   = this.identificacao.nr_paginas
            this.assunto    = this.identificacao.assunto
            this.tipo_obra       = this.identificacao.tipo_obra
            this.estado_conservacao = this.identificacao.estado_conservacao
            this.autor = this.identificacao.autor
            this.editora   = this.identificacao.editora
            this.forma_aquisicao    = this.identificacao.forma_aquisicao
            this.estado_aquisicao   = this.identificacao.estado_aquisicao
            this.data_aquisicao = this.identificacao.data_aquisicao
            this.ano_edicao = this.identificacao.ano_edicao
            this.nr_volume  = this.identificacao.nr_volume
            this.valor_aquisicao = this.identificacao.valor_aquisicao
        },
        data() {
            return {
                classificador:null,

                local_edicao:null,
                nr_edicao:null,
                nr_paginas:null,

                assunto:null,
                tipo_obra:null,

                estado_conservacao:null,

                autor:null,
                editora:null,

                forma_aquisicao:null,
                estado_aquisicao:null,

                data_aquisicao:null,
                ano_edicao:null,

                nr_volume:null,
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


            nr_volumeErrors(){
                const errors = []
                if (!this.$v.nr_volume.$dirty) return errors
                !this.$v.nr_volume.required && errors.push('nr_volume é obrigtorio')
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
            local_edicaoErrors(){
                const errors = []
                if (!this.$v.local_edicao.$dirty) return errors
                !this.$v.local_edicao.required && errors.push('Local de edicao é obrigtorio')
                return errors
            },
            nr_edicaoErrors(){
                const errors = []
                if (!this.$v.nr_edicao.$dirty) return errors
                !this.$v.nr_edicao.required && errors.push('nr de edicao é obrigtorio')
                return errors
            },
            nr_paginasErrors(){
                const errors = []
                if (!this.$v.nr_paginas.$dirty) return errors
                !this.$v.nr_paginas.required && errors.push('Nr de paginas é obrigtorio')
                return errors
            },

            assuntoErrors(){
                const errors = []
                if (!this.$v.assunto.$dirty) return errors
                !this.$v.assunto.required && errors.push('Assunto is required.')
                return errors
            },
            tipo_obraErrors(){
                const errors = []
                if (!this.$v.tipo_obra.$dirty) return errors
                !this.$v.tipo_obra.required && errors.push('Tipo de obra is required.')
                return errors
            },


            autorErrors(){
                const errors = []
                if (!this.$v.autor.$dirty) return errors
                !this.$v.autor.required && errors.push('Autor is required.')
                return errors
            },
            editoraErrors(){
                const errors = []
                if (!this.$v.editora.$dirty) return errors
                !this.$v.editora.required && errors.push('Editora is required.')
                return errors
            },

            data_aquisicaoErrors(){
                const errors = []
                if (!this.$v.data_aquisicao.$dirty) return errors
                !this.$v.data_aquisicao.required && errors.push('Data de aquisicao is required.')
                return errors
            },
            ano_edicaoErrors(){
                const errors = []
                if (!this.$v.ano_edicao.$dirty) return errors
                !this.$v.ano_edicao.required && errors.push('Ano de edicao is required.')
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
                        local_edicao:this.local_edicao,
                        nr_edicao:this.nr_edicao,
                        nr_paginas:this.nr_paginas,
                        assunto:this.assunto,
                        tipo_obra:this.tipo_obra,
                        estado_conservacao:this.estado_conservacao,
                        autor:this.autor,
                        editora:this.editora,
                        forma_aquisicao:this.forma_aquisicao,
                        estado_aquisicao:this.estado_aquisicao,
                        data_aquisicao:this.data_aquisicao,
                        ano_edicao:this.ano_edicao,
                        nr_volume:this.nr_volume,
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