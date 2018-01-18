<template>
  <div class="Tabs">

    <div class="Tabs-page">
      <router-view></router-view>
    </div>

    <nav class="ctabbar">
      <router-link to="/tabs/my-meals" v-on:click.native="switchPage('/tabs/my-meals')" tag="div" class="ctabbar__link" v-bind:class="{ selected: current == '/tabs/my-meals' }">
        <i class="icomoon icon-reservation ctabbar__icon"></i>
      </router-link>

      <router-link to="/tabs/home" v-on:click.native="switchPage('/tabs/home')" tag="div" class="ctabbar__link" v-bind:class="{ selected: current == '/tabs/home' }">
          <i class="icomoon icon-fork-knife ctabbar__icon"></i>
      </router-link>

      <router-link to="/tabs/profile" v-on:click.native="switchPage('/tabs/profile')" tag="div" class="ctabbar__link" v-bind:class="{ selected: current == '/tabs/profile' }">
        <i class="icomoon icon-user ctabbar__icon"></i>
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
