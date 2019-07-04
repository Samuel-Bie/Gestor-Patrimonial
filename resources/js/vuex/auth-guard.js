import { store } from "@/vuex"

export default (to, from, next) => {
    if(store.getters.user){
        next()
    }else{
        // this.$router.push({ name: 'meetup'})
        next('/signin')
    }
}