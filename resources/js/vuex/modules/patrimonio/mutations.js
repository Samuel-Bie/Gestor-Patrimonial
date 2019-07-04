// https://vuex.vuejs.org/en/mutations.html
import state from "./state"

export default {
  setLoadedPatrimonio(state, payload){
    state.patrimonios = payload
  }
}