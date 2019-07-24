// https://vuex.vuejs.org/en/getters.html
import state from "./state";
export default {
  getLoading(state){
    return state.loading? true:false
  },

  authUser(state){
    return state.authUser
  },
  authUserfailded(state){
    return state.authUserfailded
  },
  authUserSuccess(state){
    return state.authUserSuccess
  },

  savedCredencials(){
    let email = localStorage.getItem('USER_EMAIL')
    let password = localStorage.getItem('USER_PASSWORD')

    if(email && password){
      return {
        email:email,
        password:password,
      }
    }
    return false
  },

  getACCESS_TOKEN(){
    localStorage.getItem('ACCESS_TOKEN')
  },
  getREFRESH_TOKEN(){
    localStorage.getItem('REFRESH_TOKEN')
  },
}
