// https://vuex.vuejs.org/en/actions.html
import mutations from './mutations'

export default {
    carregarBens({ commit }){
        commit('setLoading', true, { root: true })

        axios.get('/api/patrimonio')
        .then((response) => {
            commit('setLoadedPatrimonio', response.data.data)
            commit('setLoading', false, { root: true })
        })
        .catch((error) => {
            console.log(error)
        })
    },

    carregarBem({commit}, payload){
        commit('setLoading', true, { root: true })
        axios.get(payload.links.self.href)
        .then((response) => {
            const data = response.data.data
            commit('setPS_data', data)
            return data
        }).then((data) => {
            let url = data.tipo.imovel ? data.tipo.imovel.href : data.tipo.veiculo? data.tipo.veiculo.href: data.tipo.livro? data.tipo.livro.href: data.tipo.movel.href

            axios.get(url)
            .then((dados) => {
                if (data.tipo.imovel)
                    commit('set_imovel',dados.data.data)
                if(data.tipo.veiculo)
                    commit('set_veiculo',dados.data.data)
                if(data.tipo.livro)
                    commit('set_livro',dados.data.data)
                if(data.tipo.movel)
                    commit('set_movel',dados.data.data)
            })
            return data
        })
        .then((data) => {
            // console.log(data)
            axios.all([
                axios.get(data.links.forma_aquisicao.href),
                axios.get(data.links.ficheiros.href),
                axios.get(data.links.classificador.href),
            ])
            .then(axios.spread(function (forma,ficheiros, classe) {
                // Both requests are now complete
                commit('set_classe', classe.data.data)
                commit('set_forma_aquisiciao', forma.data.data)
                commit('set_ficheiros', ficheiros.data.data)
                commit('setLoading', false, { root: true })
            }))
            .catch((error) => {
                console.log(error)
            })
        })
        .catch((error) => {
            console.log(error)
        })
    }
}
