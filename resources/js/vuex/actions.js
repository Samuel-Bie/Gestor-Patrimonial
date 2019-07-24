// https://vuex.vuejs.org/en/actions.html
import state from "./state";

export default {
    login({ commit }, payload) {
        commit('setLoading', true)
        commit('clearError')
        let data = {
            grant_type:  'password',
            client_id:  state.APP_PASSPORT_CLIENT_ID,
            client_secret:  state.APP_PASSPORT_CLIENT_SECRET,
            username:  payload.email,
            password:  payload.password,
            scope:  '',
        }

        if(payload.remember){
            let credencials =  {
                email: payload.email,
                password: payload.password,
            }
            commit('saveCredencials', credencials)
        }

        commit('setAuthUserfailded', false)
        axios.post('oauth/token', data)
            .then((dados) => {
                commit('setAuthUser', true)
                commit('setAuthToken', dados.data.access_token)
                commit('setAuthRefreshToken',  dados.data.refresh_token)
                commit('setAuthUserSuccess',  true)
                commit('setLoading', false)
                axios.defaults.headers.common['Authorization'] = 'Bearer ' +dados.data.access_token;
            })
            .catch((error) => {
                commit('setLoading', false)
                commit('setAuthUserfailded', error.response.data.error_description)
            })
        // Send credencials to API
    },

    logout({ commit }){
        commit('setAuthUser', null)
    }
}
