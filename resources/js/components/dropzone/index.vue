<template>
    <div class="dropzone">
        <vue-dropzone ref="myVueDropzone" id="dropzone" @vdropzone-success="fileSaved" :options="dropzoneOptions" :useCustomSlot=true>
            <div class="dropzone-custom-content">
                <h4 class="dropzone-custom-title">
                    <v-icon>mdi-cloud-upload</v-icon>
                    <span>Carregar Arquivos</span>
                </h4>
                <div class="subtitle">Ou faça arraste e solte aqui</div>
            </div>
        </vue-dropzone>
    </div>
</template>

<script>

  import vue2Dropzone from 'vue2-dropzone'
  import 'vue2-dropzone/dist/vue2Dropzone.min.css'

  export default {
    name: 'dropzone',
    components: {
      vueDropzone: vue2Dropzone
    },

    props:['options'],

    data: function () {
      return {

      }
    },
    methods: {
      fileSaved(file, response){
        this.$emit('fileSaved', response)
      },
    },
    computed: {
      dropzoneOptions(){
        return {
          ...this.options,
          thumbnailWidth: 150,
        }
      }
    },
  }
</script>

