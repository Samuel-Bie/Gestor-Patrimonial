<template>
    <div class="Imovel">
         <v-container class="pa-0" grid-list-xl fluid >
            <v-layout align-end wrap >
                <v-flex xs6 md3 >
                    <h6 class="heading-6 text-uppercase">Tipo de imovel</h6>
                    <small class="small">{{ imovel.tipo_imovel }}</small>
                </v-flex>

                <v-flex xs6 md3 >
                    <h6 class="heading-6 text-uppercase">Domínio de imovel</h6>
                    <small class="small">{{ imovel.tipo_dominio }}</small>
                </v-flex>

                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Tipo de edificio</h6>
                    <small class="small">{{ imovel.tipo_edificio }}</small>
                </v-flex>

                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Número de divisões</h6>
                    <small class="small">{{ imovel.nr_divisoes }}</small>
                </v-flex>


                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Número de pisos</h6>
                    <small class="small">{{ imovel.nr_pisos }}</small>
                </v-flex>

                 <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Cor predominante</h6>
                    <small class="small">{{ imovel.cor }}</small>
                </v-flex>

                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Área de cobertura (m<sup>2</sup>)</h6>
                    <small class="small">{{ imovel.area_cobertura }}</small>
                </v-flex>

                 <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Área do terreno (m<sup>2</sup>)</h6>
                    <small class="small">{{ imovel.area_terreno }}</small>
                </v-flex>

                 <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Ano de construção </h6>
                    <small class="small">{{ imovel.ano_construcao }}</small>
                </v-flex>


                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Data de aquisição</h6>
                    <small class="small">{{ details.data_aquisicao }}</small>
                </v-flex>

                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Elevadores</h6>
                    <small class="small">{{ imovel.elevadores? "SIM": "NÃO" }}</small>
                </v-flex>

                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Rede contra incêndio</h6>
                    <small class="small">{{ imovel.sistema_incendio? "SIM": "NÃO" }}</small>
                </v-flex>

                <v-flex xs6 md3>
                    <h6 class="heading-6 text-uppercase">Valor de aquisição/avaliação</h6>
                    <small class="small">{{ details.valor_aquisicao }} MT</small>
                </v-flex>
                <!-- {{ details }} -->
            </v-layout>
        </v-container>
    </div>
</template>

<script>


export default {
    name: 'Imovel',
    props: ['imovel', 'details'],
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
