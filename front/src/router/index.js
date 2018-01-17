import Vue from 'vue'
import Router from 'vue-router'

import Home from '../pages/Home.vue'
import TestRoute from '../pages/TestRoute.vue'
import PageTabs from '../pages/PageTabs'

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: '/',

    routes: [
      {
        path: '/',
        redirect: '/tabs'
      },
      {
        path: '/tabs',
        name: 'PageTabs',
        component: PageTabs,
        children:
        [
          {
            path: 'home',
            name: 'Home',
            component: Home
          }
        ]
      },
      {
        path: '/test',
        name: 'TestRoute',
        component: TestRoute
      },
    ]

})
