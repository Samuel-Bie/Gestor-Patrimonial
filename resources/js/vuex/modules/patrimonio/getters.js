// https://vuex.vuejs.org/en/getters.html
import state from "./state"
export default {
  patrimonios(state){
      return state.patrimonios
  },
  getPatrimonio(state){
    return (id) => {
        return state.patrimonios.find((patrimonio) => {
          return patrimonio.id === id
        })
    }
  }
}
