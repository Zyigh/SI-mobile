<template>
  <header class="headbar">
    <h1>Fidmi à <span class="headbar__city">Paris</span></h1>
    <div class="headbar__add">
      <i class="icomoon icon-add-event"><span class="path1"></span><span class="path2"></span></i>
    </div>
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
