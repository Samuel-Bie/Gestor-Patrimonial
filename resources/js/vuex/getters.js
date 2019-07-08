// https://vuex.vuejs.org/en/getters.html
import state from "./state";
export default {
  getLoading(state){
    return state.loading? true:false
  }
}
