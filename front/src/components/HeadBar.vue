<template>
  <header>
    <h1>Fidmi à Paris</h1>
  </header>
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
