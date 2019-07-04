<template>
    <div>
        <v-container
            fill-height
            fluid
            grid-list-xl
            >
            <v-layout wrap>
                <v-flex
                md12
                >
                    Patrimonio {{ bem }}
                </v-flex>
            </v-layout>
        </v-container>
    </div>
</template>
<script>
    import {
        mapMutations,
        mapState,
        mapActions,
        mapGetters
    } from 'vuex'

    export default {
        props: ['id'],
        computed: {
            ...mapGetters('patrimonio', ['getPatrimonio']),
            bem(){
                return this.getPatrimonio(this.id)
            },
        },
        methods: {
        },
        mounted () {

        }
    }
</script>
