// https://vuex.vuejs.org/en/getters.html
import state from "./state"
export default {
  patrimonios(state){
      return state.patrimonios
  },
  getSelectedPatrimonio(){
    return state.selectedPatrimonio
  },
  getPatrimonio(state){
    return (id) => {
        return state.patrimonios.find((patrimonio) => {
          return patrimonio.id === id
        })
    }
  },
  getFormaAquisicao(state){
    return state.forma_aquisiciao
  },
  getClasse(state){
    return state.classe
  },

  getImovel(state){
    return state.imovel
  },
  getLivro(state){
    return state.livro
  },
  getMovel(state){
    return state.movel
  },
  getVeiculo(state){
    return state.veiculo
  },
}
