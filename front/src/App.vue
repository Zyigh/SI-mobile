<template>
  <v-ons-page id="app">
    <router-view></router-view>
    <square-card></square-card>
  </v-ons-page>
</template>


<script>

export default {
  name: 'app',
  data () {
    return {
      msg: 'Fidmi'
    }
  }
}
</script>
