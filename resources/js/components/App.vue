<template>
  <v-app>
    <core-filter />

    <core-toolbar />

    <core-drawer />

    <core-view />

    <core-scroll-spy></core-scroll-spy>
  </v-app>
</template>

<style lang="scss">
    /* Remove in 1.2 */
    .v-datatable thead th.column.sortable i {
        vertical-align: unset;
    }
</style>
