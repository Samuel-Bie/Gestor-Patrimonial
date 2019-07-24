// https://vuex.vuejs.org/en/mutations.html
import state from "./state"

export default {

    setCreationSuccess(state, payload) {
        state.patrimonioCreated = payload
    },

    setCreationError(state, payload) {
        state.patrimonioErrors = payload
    },
}