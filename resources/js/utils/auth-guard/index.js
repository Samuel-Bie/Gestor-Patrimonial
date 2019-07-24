import store  from "@/vuex"

export default (to, from, next) => {
    if(store.getters.authUser){
        next()
    }else{
        next('/login')
    }
}

