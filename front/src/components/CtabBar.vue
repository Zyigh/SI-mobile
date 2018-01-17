<template>
  <nav class="ctabbar">
    <div @click="switchPage()" class="ctabbar__link">
      <span class="ctabbar__label">Mes repas</span>
    </div>
    <div @click="switchPage()" class="ctabbar__link selected">
      <span class="ctabbar__label">Accueil</span>
    </div>
    <div @click="switchPage()" class="ctabbar__link">
      <span class="ctabbar__label">Mon profil</span>
    </div>
  </nav>
</template>

<script>
export default {
  name: "ctabbar",
  methods: {
    switchPage() {
      console.log('yo');
    }
  }
};
</script>
