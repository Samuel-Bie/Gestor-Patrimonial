<template>
  <v-app>
    <core-filter />

    <core-toolbar />

    <core-drawer />

    <core-view />
    <dropzone-index></dropzone-index>
  </v-app>
</template>

<style lang="scss">
    /* Remove in 1.2 */
    .v-datatable thead th.column.sortable i {
        vertical-align: unset;
    }
</style>
