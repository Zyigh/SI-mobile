<template>
  <v-ons-page id="app">
    <v-ons-toolbar class="home-toolbar">
      <div class="center">{{ msg }}</div>
    </v-ons-toolbar>

    <square-card></square-card>
  </v-ons-page>
</template>

<script>
import SquareCard from './components/SquareCard'

export default {
  name: 'app',
  data () {
    msg: 'Fidmi'
  },
  components: {
    SquareCard
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
ons-splitter-side[side=left][animation=overlay] {
  border-right: 1px solid #BBB;
}
</style>
