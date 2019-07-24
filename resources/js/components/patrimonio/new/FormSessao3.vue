<template>
    <div>
        <patrimonio-new-alt-sessao3-imovel  :adicional="adicional" v-if="tipo==='Imovel'"   v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao3-imovel>
        <patrimonio-new-alt-sessao3-movel   :adicional="adicional" v-if="tipo==='Movel'"    v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao3-movel>
        <patrimonio-new-alt-sessao3-veiculo :adicional="adicional" v-if="tipo==='Veiculo'"  v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao3-veiculo>
        <patrimonio-new-alt-sessao3-livro   :adicional="adicional" v-if="tipo==='Livro'"    v-on:dados_atualizados="atualizarDados" v-on:back="voltar"    v-on:validado="validado"></patrimonio-new-alt-sessao3-livro>
    </div>
</template>

<script>
    export default {
        props:['tipo', 'adicional'],
        methods: {
            validado(){
                this.$emit('validado')
            },
            voltar(){
                this.$emit('back')
            },
            atualizarDados(dados){
                this.$emit('dados_atualizados', dados)
            },
        },
    }
</script>