<template>
  <div>
       <v-container class="pa-0" grid-list-xl fluid>
            <v-layout row wrap m0>
                <v-flex xs12>
                    <gallery :images="images" :index="index" @close="index = null"></gallery>
                    <div
                        class="image"
                        v-for="(image, imageIndex) in files"
                        :key="imageIndex"
                        @click="index = imageIndex"
                        :style="{ backgroundImage: 'url(' + image.src + ')', width: '300px', height: '200px' }"
                    ></div>
                </v-flex>
            </v-layout>
       </v-container>

  </div>
</template>

<script>
  import VueGallery from 'vue-gallery';

  export default {
    props: ['files'],
    data: function () {
      return {
        index: null
      };
    },

    computed: {
        images(){
            return this.files.map(img => { return img.src })
        }
    },
    methods: {

    },

    components: {
      'gallery': VueGallery
    },
  }
</script>

<style scoped>
  .image {
    float: left;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    border: 1px solid #ebebeb;
    margin: 5px;
  }
</style>