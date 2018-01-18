<template>
  <header class="headbar">
    <h1>Fidmi à <span class="headbar__city">Paris</span></h1>
  </header>
</template>

<script>
export default {
  name: "headbar",
  data() {
    return {
    }
  },
  methods: {
    switchPage(url) {
      this.current = url;
    }
  }
};
</script>
