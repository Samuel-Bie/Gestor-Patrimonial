<template>
    <div class="Movel">
         <v-container class="pa-0" grid-list-xl fluid >
            <v-layout align-end wrap >
                <!-- Here {{ veiculo }} -->
            </v-layout>
        </v-container>

    </div>
</template>

<script>


export default {
    name: 'Movel',
    props: ['veiculo', 'details'],
    data() {
        return {

        };
    },

    methods: {

    },
    mounted() {

    },
};
</script>
