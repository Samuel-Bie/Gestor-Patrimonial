// https://vuex.vuejs.org/en/getters.html
import state from "./state"
export default {
    getCreatedPatrimonio(state){
        return state.patrimonioCreated
    },

    getCreationErrors(state){
        return state.patrimonioErrors
    }

}
