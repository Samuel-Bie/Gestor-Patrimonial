// https://vuex.vuejs.org/en/actions.html
import mutations from './mutations'

export default {
    carregarUGEs({ commit }){
        commit('setLoading', true, { root: true })
        axios.get('/api/uge')
        .then((response) => {
            commit('setUGEs', response.data.data)
            commit('setLoading', false, { root: true })
        })
        .catch((error) => {
            console.log(error)
        })
    },
    carregarUGBs({ commit, dispatch }){
        commit('setLoading', true, { root: true })
        axios.get('/api/ugb')
        .then((response) => {
            commit('setUGBs', response.data.data)
            commit('setLoading', false, { root: true })

            response.data.data.forEach(element => {
                dispatch('carregarSetores', element.id)
            });

        })
        .catch((error) => {
            console.log(error)
        })
    },
    carregarSetores({ commit }, ugb){
        commit('setLoading', true, { root: true })
        axios.get(`/api/ugb/${ugb}/setores`)
        .then((response) => {
            let data = {
                id: ugb,
                setores: response.data.data,
            }
            commit('setSetores', data)
            commit('setLoading', false, { root: true })
        })
        .catch((error) => {
            console.log(error)
        })
    },
    carregarClassificador({ commit }){
        commit('setLoading', true, { root: true })
        axios.get('/api/classificador')
        .then((response) => {
            commit('setClassificador', response.data.data)
            commit('setLoading', false, { root: true })
        })
        .catch((error) => {
            console.log(error)
        })
    },
    carregarFormasAquisicao({ commit }){
        commit('setLoading', true, { root: true })
        axios.get('/api/forma-aquisicao')
        .then((response) => {
            commit('setFormasAquisicao', response.data.data)
            commit('setLoading', false, { root: true })
        })
        .catch((error) => {
            console.log(error)
        })
    },
}
