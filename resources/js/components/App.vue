<template>
  <v-app>
      <core-filter v-if="authUser" />

      <core-toolbar v-if="authUser" />

      <core-drawer v-if="authUser" />

      <core-view />
  </v-app>
</template>

<style lang="scss">
    /* Remove in 1.2 */
    .v-datatable thead th.column.sortable i {
      vertical-align: unset;
    }
</style>

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

  computed: {
    ...mapGetters(['authUser'])
  },

}
</script>