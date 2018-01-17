<template>
  <div class="Tabs">

    <div class="Tabs-page">
      <router-view></router-view>
    </div>

    <nav class="ctabbar">
      <div @click="switchPage('meals')" class="ctabbar__link" v-bind:class="{ selected: current == 'meals' }">
        <span class="ctabbar__label">Mes repas</span>
      </div>
      <div @click="switchPage('home')" class="ctabbar__link" v-bind:class="{ selected: current == 'home' }">
        <span class="ctabbar__label">Accueil</span>
      </div>
      <div @click="switchPage('profile')" class="ctabbar__link" v-bind:class="{ selected: current == 'profile' }">
        <span class="ctabbar__label">Mon profil</span>
      </div>
    </nav>

  </div>
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
