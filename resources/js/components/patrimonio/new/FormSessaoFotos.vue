<template>
    <material-card color="info" title="Arquivos" text="Recomenda-se fotos">
        <v-card-text>
            <dropzone-index :options="dropzoneOpt" @fileSaved="fileSaved"></dropzone-index>
        </v-card-text>

        <v-card-actions>
            <v-btn color="danger"   @click="voltar">Voltar</v-btn>
            <v-btn color="info"     @click="submit">Gravar</v-btn>
        </v-card-actions>
    </material-card>
</template>


<script>
    import {
    mapMutations,
    mapState,
    mapActions,
    mapGetters
    } from 'vuex'
    export default {
        data() {
            return {
            }
        },
        methods: {
            fileSaved(args){
                this.$emit('fileSaved', args.data.id)
            },
            submit() {
                this.$emit('validado')
            }, voltar(){
                this.$emit('back')
            },
        },
        computed: {
            dropzoneOpt(){

                return {
                    url: window.location.origin+'/api/ficheiro',
                    maxFilesize: 10,
                    withCredentials:true,
                    addRemoveLinks:true,
                    headers: {
                        'Authorization' : 'Bearer '+localStorage.getItem('ACCESS_TOKEN'),
                    },
                    uploadMultiple:false
                }
            }
        },
    }
</script>

