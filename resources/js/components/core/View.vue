<template>
  <v-content>
    <div id="core-view">
      <v-fade-transition mode="out-in">
        <router-view />
      </v-fade-transition>
    </div>
    <core-footer v-if="$route.name !== 'Maps'" />
  </v-content>
</template>

<script>
export default {
  metaInfo () {
    return {
      title: 'Vuetify Material Dashboard by CreativeTim'
    }
  }
}
</script>

<style>
#core-view {
  padding-bottom: 100px;
}
</style>

<script>
export default {
  data: () => ({
    isMobile: false
  }),

  beforeDestroy () {
    if (typeof window !== 'undefined') {
      window.removeEventListener('resize', this.onResize, { passive: true })
    }
  },

  mounted () {
    this.onResize()
    window.addEventListener('resize', this.onResize, { passive: true })
  },

  methods: {
    onResize () {
      this.isMobile = window.innerWidth < 600
    }
  }
}
</script>
