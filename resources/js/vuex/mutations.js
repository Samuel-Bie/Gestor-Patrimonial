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
}
