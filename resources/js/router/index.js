import Vue from 'vue'
import Router from 'vue-router'
import auth from '@/utils/auth-guard'
// Routes
import paths from './paths'


function route (path, view, name, middleware) {
    if(middleware)
      return {
        name: name || view,
        path,
        component: (resovle) => import(
            `@/views/${view}.vue`
        ).then(resovle),
        props: true,
        beforeEnter: auth
      }
    else
      return {
        name: name || view,
        path,
        component: (resovle) => import(
            `@/views/${view}.vue`
        ).then(resovle),
        props: true,
      }
}

Vue.use(Router)

// Create a new router
const router = new Router({
    mode: 'history',
    routes: paths.map(path => route(path.path, path.view, path.name, path.auth)).concat([
      { path: '*', redirect: '/dashboard' }
    ]),
    scrollBehavior (to, from, savedPosition) {
      if (savedPosition) {
        return savedPosition
      }
      if (to.hash) {
        return { selector: to.hash }
      }
      return { x: 0, y: 0 }
    }
})

export default router

