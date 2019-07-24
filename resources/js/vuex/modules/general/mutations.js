// https://vuex.vuejs.org/en/mutations.html
import state from "./state"

export default {
  setUGEs(state, payload){
    state.UGEs = payload
  },
  setUGBs(state, payload){
    state.UGBs = payload
  },

  setSetores(state, payload){
    let ugb = state.UGBs.find(ugb => {
        return ugb.id === payload.id
    })
    ugb.setores = payload.setores
  },
  
  setClassificador(state, payload){
    state.Classificador = payload
  },
  setFormasAquisicao(state, payload){
    state.FormasAquisicao = payload
  },

}