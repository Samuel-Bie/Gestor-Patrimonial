<template>
    <div class="Movel">
         <v-container class="pa-0" grid-list-xl fluid >
            <v-layout align-end wrap >
                Here {{ movel }}
            </v-layout>
        </v-container>

    </div>
</template>

<script>


export default {
    name: 'Movel',
    props: ['movel', 'details'],
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
