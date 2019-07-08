<template>
    <div class="Livro">
         <v-container class="pa-0" grid-list-xl fluid >
            <v-layout align-end wrap >
                Here {{ livro }}
            </v-layout>
        </v-container>

    </div>
</template>

<script>


export default {
    name: 'Livro',
    props: ['livro', 'details'],
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
