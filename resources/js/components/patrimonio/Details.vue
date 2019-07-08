<template>
    <div class="Details">
         <v-container class="pa-0" grid-list-xl fluid >
           <div v-if="imovel">
                <v-layout align-end wrap>
                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Conservatória de Registo Predial</h6>
                        <small class="small">
                            {{ imovel.registros.registro_predial.conservatoria_registro_predial }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Número de Registo Predial</h6>
                        <small class="small">
                            {{ imovel.registros.registro_predial.nr_registro_predial }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Folhas de registro predial</h6>
                        <small class="small">
                            {{ imovel.registros.registro_predial.folhas_registro_predial }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Livro de Registo Predial</h6>
                        <small class="small">
                            {{ imovel.registros.registro_predial.livro_registro_predial }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Ano de Registo Predial</h6>
                        <small class="small">
                            {{ imovel.registros.registro_predial.ano_registro }}<br>
                        </small>
                    </v-flex>
                </v-layout>

                <v-layout align-end wrap>
                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Direcção da Área Fiscal</h6>
                        <small class="small">
                            {{ imovel.registros.matriz_predial.direcao_area_fiscal }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Número de Registo Predial</h6>
                        <small class="small">
                            {{ imovel.registros.matriz_predial.nr_matriz_predial }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Folhas de registro predial</h6>
                        <small class="small">
                            {{ imovel.registros.matriz_predial.folhas_matriz_predial }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Livro de Registo Predial</h6>
                        <small class="small">
                            {{ imovel.registros.matriz_predial.ano_matriz_predial }}<br>
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Ano de Registo Predial</h6>
                        <small class="small">
                            {{ imovel.registros.matriz_predial.livro_matriz_predial }}<br>
                        </small>
                    </v-flex>
                </v-layout>
           </div>

           <div>
                <v-layout align-end wrap >
                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Entidade fornecedora</h6>
                        <small class="small">
                            {{ details.informacoes.fornecedor.nome }}<br>
                            NUIT: {{ details.informacoes.fornecedor.nuit }}
                        </small>
                    </v-flex>

                    <v-flex xs12 md6 >
                        <h6 class="heading-6 text-uppercase">Endereço</h6>
                        <small class="small">{{ details.informacoes.fornecedor.cidade }}<br>{{ details.informacoes.fornecedor.endereco }}</small>
                    </v-flex>

                    <v-flex xs12 md4 >
                        <h6 class="heading-6 text-uppercase">Comprovativo</h6>
                        <small class="small">
                            {{ details.informacoes.fornecedor.comprovativo_compra }}<br>
                            {{ details.informacoes.fornecedor.nr_comprovativo }}
                        </small>
                    </v-flex>

                    <v-flex xs12 md4  v-if="veiculo!==null || imovel!==null">
                        <h6 class="heading-6 text-uppercase">Seguro</h6>
                        <small class="small">
                            {{ details.informacoes.seguro? "SIM":"NÃO" }}
                        </small>
                    </v-flex>

                    <v-flex xs12 md4  v-if="movel!==null || veiculo!==null">
                        <h6 class="heading-6 text-uppercase">Assistencia Técnica</h6>
                        <small class="small">
                            {{ details.informacoes.fornecedor.assistencia_tecnica? "SIM":"NÃO" }}
                        </small>
                    </v-flex>

                    <v-flex xs12 md4 v-if="movel!==null || veiculo!==null" >
                        <h6 class="heading-6 text-uppercase">Garantia (mêses)</h6>
                        <small class="small">
                            {{ details.informacoes.fornecedor.garantia }}
                        </small>
                    </v-flex>

                    <v-flex xs12 md4  v-if="veiculo!==null">
                        <h6 class="heading-6 text-uppercase">Kit de ferramentas</h6>
                        <small class="small">
                            {{ details.informacoes.kit_ferramentas? "SIM":"NÃO" }}
                        </small>
                    </v-flex>

                    <v-flex xs12 md4  v-if="veiculo!==null">
                        <h6 class="heading-6 text-uppercase">Extintor</h6>
                        <small class="small">
                            {{ details.informacoes.extintor? 'SIM':'NÃO' }}
                        </small>
                    </v-flex>

                    <v-flex xs12 md4  v-if="imovel===null">
                        <h6 class="heading-6 text-uppercase">Utilizador</h6>
                        <small class="small">
                            {{ details.informacoes.utilizador? 'SIM':'NÃO' }}
                        </small>
                    </v-flex>


                </v-layout>
           </div>
        </v-container>
    </div>
</template>

<script>


export default {
    name: 'Details',
    props: ['imovel', 'movel', 'veiculo', 'livro', 'details'],
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
