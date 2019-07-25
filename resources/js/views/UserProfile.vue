<template>
    <v-container fill-height fluid grid-list-xl>
        <v-layout justify-center wrap>
            <v-flex xs12 md8>
                <material-card color="green" title="Editar perfil" text="Dados importantes">
                    <v-form>
                        <v-container py-0>
                            <v-layout wrap>
                                <v-flex xs12 md4>
                                    <v-text-field label="Unizambeze" disabled />
                                </v-flex>

                                <v-flex xs12 md4>
                                    <v-text-field label="Email" class="purple-input" />
                                </v-flex>
                                <v-flex xs12 md6>
                                    <v-text-field label="Apelido" class="purple-input" />
                                </v-flex>
                                <v-flex xs12 md6>
                                    <v-text-field label="Nome" class="purple-input" />
                                </v-flex>

                                <v-flex xs12>
                                    <v-textarea class="purple-input" label="Sobre"
                                        value="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
                                </v-flex>
                                <v-flex xs12 text-xs-right>
                                    <v-btn class="mx-0 font-weight-light" color="success">
                                        Atualizar perfil
                                    </v-btn>
                                </v-flex>
                            </v-layout>
                        </v-container>
                    </v-form>
                </material-card>
            </v-flex>
            <v-flex xs12 md4>
                <material-card class="v-card-profile">
                    <v-avatar slot="offset" class="mx-auto d-block" size="130">
                        <img src="img/bie.jpg">
                    </v-avatar>
                    <v-card-text class="text-xs-center">
                        <h6 class="category text-gray font-weight-thin mb-3">Programador</h6>
                        <h4 class="card-title font-weight-light">Samuel Bie</h4>
                        <p class="card-description font-weight-light">Nada há tão perfeito que não possa ser melhorado</p>
                        <v-btn color="success" round class="font-weight-light">Contraar</v-btn>
                    </v-card-text>
                </material-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
export default {
  //
}
</script>
