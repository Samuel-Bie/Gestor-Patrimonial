// https://vuex.vuejs.org/en/getters.html
import state from "./state"
export default {

  getUGEs(state){
    return state.UGEs
  },
  getUGBs(state){
    return state.UGBs
  },
  getSetores(state){
    return (ugbid) => {
        let ugb = state.UGBs.find((ugb) => {
            return ugb.id === ugbid
        })
        if (ugb)
          return ugb.setores
          return []
    }
  },
  getClassificador(state){
    return state.Classificador
  },
  getFormasAquisicao(state){
    return state.FormasAquisicao
  },
}
