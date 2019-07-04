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
}
