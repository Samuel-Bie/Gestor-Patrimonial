// https://vuex.vuejs.org/en/mutations.html
import state from "./state"

export default {
  setLoadedPatrimonio(state, payload){
    state.patrimonios = payload
  },
  setPS_data(state, payload){
    state.selectedPatrimonio = payload
  },
  set_setor(state, payload){
    state.setor = payload
  },
  set_departamento(state, payload){
    state.departamento = payload
  },
  set_ficheiros(state, payload){
    state.selectedPatrimonio.ficheiros = payload
  },
  set_forma_aquisiciao(state, payload){
    state.forma_aquisiciao = payload
  },
  set_classe(state, payload){
    state.classe = payload
  },
  /* Tipos de patrimonio */
    set_imovel(state, payload){
      state.imovel = payload
    },
    set_livro(state, payload){
      state.livro = payload
    },
    set_movel(state, payload){
      state.movel = payload
    },
    set_veiculo(state, payload){
      state.veiculo = payload
    },
  /* Tipos de patrimonio */

}