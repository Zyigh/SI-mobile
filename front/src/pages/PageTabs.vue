<template>
  <div class="Tabs">

    <div class="Tabs-page">
      <router-view></router-view>
    </div>

    <nav class="ctabbar">
      <router-link to="/tabs/my-meals" v-on:click.native="switchPage('/tabs/my-meals')" tag="div" class="ctabbar__link" v-bind:class="{ selected: current == '/tabs/my-meals' }">
        <span class="ctabbar__label">Repas</span>
      </router-link>

      <router-link to="/tabs/home" v-on:click.native="switchPage('/tabs/home')" tag="div" class="ctabbar__link" v-bind:class="{ selected: current == '/tabs/home' }">
        <span class="ctabbar__label">Accueil</span>
      </router-link>

      <router-link to="/tabs/profile" v-on:click.native="switchPage('/tabs/profile')" tag="div" class="ctabbar__link" v-bind:class="{ selected: current == '/tabs/profile' }">
        <span class="ctabbar__label">Mon profil</span>
      </router-link>
    </nav>

  </div>
</template>

<script>
export default {
  name: "ctabbar",
  data() {
    return {
      current: this.$route.path
    }
  },
  methods: {
    switchPage(url) {
      this.current = this.$route.path;
    }
  }
};
</script>
