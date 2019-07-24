<template>
    <div>
        <material-card color="info" title="Titulo" text="Texto">
            <v-card-text>
                <div>
                    <v-form>
                        <v-container class="pa-0" grid-list-xl fluid>
                            <v-layout align-end wrap>
                                <v-flex xs12 md4>
                                    <v-select v-model="uge" :items="ls_uges" item-text="designacao" item-value="id" :error-messages="ugeErrors"
                                        label="UGE" required @change="$v.uge.$touch()" @blur="$v.uge.$touch()">
                                    </v-select>
                                </v-flex>
                                <v-flex xs12 md4>
                                    <v-select v-model="ugb"
                                        :items="ls_ugbs"
                                        item-text="designacao" item-value="id"
                                        :error-messages="ugbErrors"
                                        label="UGB" required @change="$v.ugb.$touch()" @blur="$v.ugb.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-select v-model="setor"
                                        :items="setores"
                                        item-text="nome" item-value="id"
                                        :error-messages="setorErrors"
                                        label="Setor" required @change="$v.setor.$touch()" @blur="$v.setor.$touch()">
                                    </v-select>
                                </v-flex>

                            </v-layout>

                            <v-layout align-end wrap>
                                <v-flex xs12 md4>
                                    <v-select v-model="provincia" :items="provincias" :error-messages="provinciaErrors"
                                        label="Provincia" required @change="$v.provincia.$touch()" @blur="$v.provincia.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-select v-model="destrito" :items="destritos" :error-messages="destritoErrors"
                                        label="Destrito" required @change="$v.destrito.$touch()" @blur="$v.destrito.$touch()">
                                    </v-select>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="posto"
                                        :error-messages="postoErrors"
                                        :counter="50"
                                        label="Posto administrativo"
                                        required
                                        @input="$v.posto.$touch()"
                                        @blur="$v.posto.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                 <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="localidade"
                                        :error-messages="localidadeErrors"
                                        :counter="50"
                                        label="Localidade"
                                        required
                                        @input="$v.localidade.$touch()"
                                        @blur="$v.localidade.$touch()"
                                    ></v-text-field>
                                </v-flex>



                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="bairro"
                                        :error-messages="bairroErrors"
                                        :counter="50"
                                        label="Bairro"
                                        required
                                        @input="$v.bairro.$touch()"
                                        @blur="$v.bairro.$touch()"
                                    ></v-text-field>
                                </v-flex>


                                <v-flex xs12 md4>
                                    <v-text-field
                                        v-model="classe_territorial"
                                        :error-messages="classe_territorialErrors"
                                        :counter="10"
                                        label="Classificador territorial"
                                        required
                                        @input="$v.classe_territorial.$touch()"
                                        @blur="$v.classe_territorial.$touch()"
                                    ></v-text-field>
                                </v-flex>


                                <v-flex xs12>
                                    <v-text-field
                                        v-model="endereco"
                                        :error-messages="enderecoErrors"
                                        :counter="255"
                                        label="Endereco"
                                        required
                                        @input="$v.endereco.$touch()"
                                        @blur="$v.endereco.$touch()"
                                    ></v-text-field>
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-btn color="secondary" @click="clear">Limpar</v-btn>
                                    <v-btn color="info" @click="submit">Proximo</v-btn>
                                </v-flex>
                            </v-layout>
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
        uge:  {required},
        ugb:  {required},
        setor: {required},

        provincia:  {required},
        destrito:  {required},
        endereco:  {required},

        posto:{maxLength: maxLength(255)},
        localidade:{maxLength: maxLength(255)},
        bairro:{maxLength: maxLength(255)},
        classe_territorial:{maxLength: maxLength(255)},
        endereco:{maxLength: maxLength(255)},
    },
    props:['dados'],
    data: () => ({

        provincias:['Sofala', 'Manica', 'Tete', 'Zambezia'],

        uge:null,
        ugb:null,
        setor:null,
        provincia:null,
        destrito:null,
        endereco:null,
        classe_territorial:null,
        bairro:null,
        localidade:null,
        posto:null,
    }),

    computed: {
        destritos(){

            let provincias = [
                {
                    nome:'Sofala',
                    distritos: [
                        'Buzi','Beira','Dondo',
                    ]
                },{
                    nome:'Manica',
                    distritos: [
                        'Gondola','Chimoio',
                    ]
                },{
                    nome:'Tete',
                    distritos: [
                        'Angonia','Ulongue','Tete',
                    ]
                },{
                    nome:'Zambezia',
                    distritos: [
                        'Mocuba','Quelimane',
                    ]
                },
            ]


            let prv = this.provincia
            if(this.provincia){
                let f_provincia = provincias.find((prv) => {
                    return prv.nome === this.provincia
                })
                return f_provincia.distritos
            }else{
                return []
            }

        },
        ...mapGetters({
            ls_uges: 'general/getUGEs',
            ls_ugbs: 'general/getUGBs',
            ls_setores: 'general/getSetores',
            ls_formasaquisicao: 'general/getFormasAquisicao',
        }),
        setores(){
            return this.ls_setores(this.ugb)
        },
        ugeErrors () {
            const errors = []
            if (!this.$v.uge.$dirty) return errors
            !this.$v.uge.required && errors.push('UGE is required')
            return errors
        },
        ugbErrors () {
            const errors = []
            if (!this.$v.ugb.$dirty) return errors
            !this.$v.ugb.required && errors.push('UGB is required')
            return errors
        },
        setorErrors () {
            const errors = []
            if (!this.$v.setor.$dirty) return errors
            !this.$v.setor.required && errors.push('Ssetor is required')
            return errors
        },

        provinciaErrors () {
            const errors = []
            if (!this.$v.provincia.$dirty) return errors
            !this.$v.provincia.required && errors.push('provincia is required')
            return errors
        },

        destritoErrors () {
            const errors = []
            if (!this.$v.destrito.$dirty) return errors
            !this.$v.destrito.required && errors.push('Item is required')
            return errors
        },



        enderecoErrors(){
            const errors = []
            if (!this.$v.endereco.$dirty) return errors
            !this.$v.endereco.maxLength && errors.push('Name must be at most 10 characters long')
            return errors
        },

        postoErrors(){
            const errors = []
            if (!this.$v.posto.$dirty) return errors
            !this.$v.posto.maxLength && errors.push('Name must be at most 10 characters long')
            return errors
        },

        localidadeErrors(){
            const errors = []
            if (!this.$v.localidade.$dirty) return errors
            !this.$v.localidade.maxLength && errors.push('Name must be at most 10 characters long')
            return errors
        },

        bairroErrors(){
            const errors = []
            if (!this.$v.bairro.$dirty) return errors
            !this.$v.bairro.maxLength && errors.push('Name must be at most 10 characters long')
            return errors
        },

        classe_territorialErrors(){
            const errors = []
            if (!this.$v.classe_territorial.$dirty) return errors
            !this.$v.classe_territorial.maxLength && errors.push('Name must be at most 10 characters long')
            return errors
        },

    },
    created() {
        this.uge    = this.dados.uge
        this.ugb    = this.dados.ugb
        this.setor  = this.dados.setor
        this.provincia  = this.dados.provincia
        this.destrito   = this.dados.destrito
        this.endereco   = this.dados.endereco
        this.classe_territorial = this.dados.classe_territorial
        this.bairro = this.dados.bairro
        this.localidade = this.dados.localidade
        this.posto  = this.dados.posto
    },

    methods: {
        submit() {
            this.$v.$touch()
            if (!this.$v.$invalid) {
                this.$emit('dados_atualizados', {
                    uge:this.uge,
                    ugb:this.ugb,
                    setor:this.setor,
                    provincia:this.provincia,
                    destrito:this.destrito,
                    endereco:this.endereco,
                    classe_territorial:this.classe_territorial,
                    bairro:this.bairro,
                    localidade:this.localidade,
                    posto:this.posto,
                })
                this.$emit('validado')
            }
        },
        clear () {
            this.$v.$reset()
            this.name   = ''
            this.select = null
        }
    }
  }

</script>

