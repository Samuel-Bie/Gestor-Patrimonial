// https://vuex.vuejs.org/en/actions.html
import mutations from './mutations'
// import router from '@/router'

export default {
    createBem({commit}, payload){
        commit('setLoading', true, { root: true })

        console.log(payload)

        axios.post('api/patrimonio', payload)
        .then((response) => {
            commit('setLoading', false, { root: true })
            const data = response.data
            commit('setCreationSuccess', data)
            commit('setCreationError', null)

        })
        .catch((error) => {

            commit('setLoading', false, { root: true })
            commit('setCreationError', error)
            commit('setCreationSuccess', null)

        })
    }
}
