import Vue from 'vue'
import Router from 'vue-router'

import Home from '../pages/Home.vue'

import Meal from '../pages/MealDetail.vue'
import MealForm from '../pages/MealForm.vue'
import PageTabs from '../pages/PageTabs'

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: '/',
    routes: [
      {
        path: '/',
        redirect: '/tabs/home'
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
          },
        ]
      },
      {
        path: '/meal',
        name: 'MealDetail',
        component: Meal,
      },
      {
        path: '/mealform',
        name: 'MealForm',
        component: MealForm,
      }
    ]

})
