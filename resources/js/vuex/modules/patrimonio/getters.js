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

  getTimeline(state){
    /* abate,creation, manutencoes,movimentacoes, transferencia,  */
    if(!state.timeline)
      return state.timeline


    let pureTimeline = state.timeline
    let newTimeline = []
    newTimeline.push({
      color:'lighten-2 blue',
      icon: 'mdi-content-save-outline',
      ...pureTimeline.creation,
      data:pureTimeline.creation.created_at,
      tipo:'Criacao',
      descricao: 'Entrada no sistema do bem '+pureTimeline.creation.tipo
    })

    if(pureTimeline.abate)
      newTimeline.push({
        tipo:'Abate',
        icon: 'mdi-delete-outline',
        color:'red',
        ...pureTimeline.abate,
        descricao: 'Realizacao do abate, com destino '+pureTimeline.abate.destino
      })

    if(pureTimeline.transferencia)
      newTimeline.push({
        tipo:'Transferencia',
        icon: 'mdi-swap-horizontal',
        color:'lighten-2 green',
        ...pureTimeline.transferencia,
        descricao: 'Realizacao do transferencia para destino '+pureTimeline.transferencia.destino+' pelo motivo: '+pureTimeline.transferencia.motivo
      })
    let movs = []
    if(pureTimeline.movimentacoes.length){
      movs = pureTimeline.movimentacoes
        .map((element, index) => {
          newTimeline.push({
            tipo:'Movimentacao',
            icon: 'mdi-file-move',
            color:'lighten-1 yellow',
            ...element,
            descricao: 'Movimentacao da localizacao do bem para '+element.destino
          })
          return {
            tipo:'Movimentacao',
            ...element,
          }
        })
    }
    let manutencoes = [];
    if(pureTimeline.manutencoes.length){
      manutencoes = pureTimeline.manutencoes
        .map((element, index) => {
          newTimeline.push({
            tipo:'Manutencao',
            icon: 'mdi-wrench-outline',
            color:'darken-1 accent',
            ...element,
            descricao: 'Registro de manutencao por motivos de '+element.motivo
          })
          return {
            tipo:'Manutencao',
            ...element,
          }
        })
    }

    return newTimeline.sort((operationA, operationB) => {
      return operationA.date < operationB.date
    })
  }
}
