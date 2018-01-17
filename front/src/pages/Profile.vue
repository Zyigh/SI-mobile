<template>
    <div class="profile page">
      <div class="headpage mealform__headpage">
        <div class="page__inner">
          <div class="mealform__headpage-top">
            <router-link to="/meal" tag="span" class="headpage__back">retour</router-link>
          </div>
          <h1 class="headpage__title">{{ msg }}</h1>
        </div>
      </div>
      <div class="page__inner page__body">
        <div class="user--big">
          <img src="" alt="" class="user__photo--big">
          <h1 class="title">Alison Sayarath</h1>
        </div>
        <div class="section">
          <h2 class="title--bordered">Biographie</h2>
          <p>Je veux partager les recettes de ma grand-mère et rencontrer des gens de tous horizons.</p>
        </div>
        <div class="section">
          <h2 class="title--bordered">Wishlist</h2>
          <ul class="list">
            <li class="list__item">Des boissons</li>
            <li class="list__item">Un dessert</li>
            <li class="list__item">Un sourire</li>
          </ul>
        </div>
        <div class="section">
          <h2 class="title--bordered">Adresse mail</h2>
          <p>alisonsayarath@gmail.com</p>
        </div>
        <div class="section">
          <h2 class="title--bordered">Numéro de téléphone</h2>
          <p>+33 7 70 67 51 73</p>
        </div>
        <div class="section">
          <h2 class="title--bordered">Adresse postale</h2>
          <p>14 rue de Munchen <br/> 75015 Paris</p>
        </div>
        <div class="section">
          <h2 class="title--bordered">Complément d'adresse</h2>
          <p>Sonnez à l’interphone au nom « Sayarath », deuxième étage à gauche, au fond.</p>
        </div>
      </div>
    </div>

</template>

<script>
export default {
  name: "Profile",
  data() {
    return {
      msg: 'Profil'
    }
  }
};
</script>
