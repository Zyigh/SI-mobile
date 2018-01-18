// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.

import './scss/main.scss'

import Vue from 'vue'
import VueResource from 'vue-resource'
import router from './router'
import App from './App'

Vue.config.productionTip = false

Vue.use(VueResource)

// Vue.http.options.xhr = {withCredentials: true}
// Vue.http.headers.common['Accept'] = 'application/json, text/plain, */*'
// Vue.http.headers.common['Access-Control-Allow-Origin'] = 'localhost:8080'
// Vue.http.headers.common['Authorization'] = 'Basic YXBpOnBhc3N3b3Jk'

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
