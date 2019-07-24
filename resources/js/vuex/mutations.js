// https://vuex.vuejs.org/en/mutations.html
import state from './state'

export default {
  setLoading(state, payload) {
    state.loading = payload
  },
  setError(state, payload) {
    state.error = payload
  },
  clearError(state) {
    state.error = null
  },

  setAuthUser(state, payload){
    state.authUser = payload
  },

  setAuthUserfailded(state, payload){
    state.authUserfailded = payload
  },
  setAuthUserSuccess(state, payload){
    state.authUserSuccess = payload
  },

  setAuthToken(state, payload){
    state.authToken = payload
    localStorage.setItem('ACCESS_TOKEN', payload)
  },
  setAuthRefreshToken(state, payload){
    state.authRefreshToken = payload
    localStorage.setItem('REFRESH_TOKEN', payload)
  },

  saveCredencials(state, payload){
    localStorage.setItem('USER_EMAIL', payload.email)
    localStorage.setItem('USER_PASSWORD', payload.password)
  }
}
