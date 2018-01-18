import Vue from 'vue'
import Router from 'vue-router'

import Home from '../pages/Home.vue'

import Meal from '../pages/MealDetail.vue'
import MealSignUp from '../pages/MealSignUp.vue'
import MealForm from '../pages/MealForm.vue'
import PageTabs from '../pages/PageTabs'
import EndMessage from '../pages/EndMessage'
import MealInvitations from '../pages/MealInvitations'
import MyMeals from '../pages/MyMeals'
import Profile from '../pages/Profile'

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
          {
            path: 'profile',
            name: 'Profile',
            component: Profile,
          },
          {
            path: 'my-meals',
            name: 'MyMeals',
            component: MyMeals,
          },
        ]
      },
      {
        path: '/meal',
        name: 'MealDetail',
        component: Meal,
      },
      {
        path: '/meal-signup',
        name: 'MealSignUp',
        component: MealSignUp,
      },
      {
        path: '/meal-form',
        name: 'MealForm',
        component: MealForm,
      },
      {
        path: '/invitation-sent',
        name: 'EndMessage',
        component: EndMessage,
      },
      {
        path: '/meal-invitations',
        name: 'MealInvitations',
        component: MealInvitations,
      },
    ]

})
