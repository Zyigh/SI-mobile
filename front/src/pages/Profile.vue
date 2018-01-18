<template>
    <div class="profile page">
      <div class="headpage mealform__headpage">
        <div class="page__inner">
          <h1 class="headpage__title">{{ pageTitle }}</h1>
        </div>
      </div>
      <div class="page__inner page__body">
        <div class="user--big">
          <img src="" alt="" class="user__photo--big">
          <h1 class="title">{{ name }}</h1>
        </div>
        <div class="section">
          <h2 class="title--bordered">Biographie</h2>
          <p>{{ bio }}</p>

        </div>
        <div class="section">
          <h2 class="title--bordered">Wishlist</h2>
          <list :elements="wishlist"></list>
        </div>
        <div class="section">
          <h2 class="title--bordered">Adresse mail</h2>
          <p>{{ mail }}</p>
        </div>
        <div class="section">
          <h2 class="title--bordered">Numéro de téléphone</h2>
          <p>+{{ phone }}</p>
        </div>
        <div class="section">
          <h2 class="title--bordered">Adresse postale</h2>
          <p>{{ address }}</p>
        </div>
        <div class="section">
          <h2 class="title--bordered">Complément d'adresse</h2>
          <p>{{ addressComplement }}</p>
        </div>
      </div>
    </div>

</template>

<script>

import List from '../components/List.vue';

export default {
  name: "Profile",
  data() {
    return {
      pageTitle: 'Profil',
      name: 'Alison Sayarath',
      img: '',
      bio: 'Je veux partager les recettes de ma grand-mère et rencontrer des gens de tous horizons.',
      wishlist: ['Des coucous', 'Des kikous', 'Des lampes de torches'],
      mail: 'alisonsayarath@gmail.com',
      phone: '7 70 67 51 73',
      address: '14 rue de Munchen, 75015 Paris',
      addressComplement: 'Sonnez à l’interphone au nom « Sayarath », deuxième étage à gauche, au fond.'
    }
  },
  components: {
    List
  }
};
</script>

<style scroped>

  .page__body {
    padding-bottom: 4rem;
  }

</style>
