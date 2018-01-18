<template>
  <nav class="ctabbar">
    <div @click="switchPage('meals')" class="ctabbar__link" v-bind:class="{ selected: current == 'meals' }">
      <span class="ctabbar__label">Mes yo</span>
    </div>
    <div @click="switchPage('home')" class="ctabbar__link" v-bind:class="{ selected: current == 'home' }">
      <i class="icomoon icon-fork-knife icon-fork-knife--dark"></i>
    </div>
    <div @click="switchPage('profile')" class="ctabbar__link" v-bind:class="{ selected: current == 'profile' }">
      salut
      <i class="icomoon icon-fork-knife icon-fork-knife--dark"></i>
    </div>
  </nav>
</template>

<script>
export default {
  name: "ctabbar",
  data() {
    return {
      current: 'home'
    }
  },
  methods: {
    switchPage(url) {
      this.current = url;
    }
  }
};
</script>
