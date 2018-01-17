<template>
    <div class="page">
      <div class="headpage">
        <div class="page__inner headpage__inner">
          <div class="headpage__top">
            <router-link to="/tabs/home" tag="span" class="headpage__back">retour</router-link>
            <span class="headpage__reminder">Réservation avant 14h !</span>
          </div>

          <div class="headtitle">
            <h1 class="headpage__title">{{ msg }}</h1>
            <p class="headpage__subtitle">Auj 21h</p>
          </div>
        </div>
      </div>
      <div class="page__inner meal__body">
        <div class="user section">
          <img src="" alt="" class="user__photo">
          <div class="user__infos">
            <span class="user__name">Ombeline</span>
            <div class="stars">
              <span class="stars__single--full"></span>
              <span class="stars__single--full"></span>
              <span class="stars__single--full"></span>
              <span class="stars__single--full"></span>
              <span class="stars__single"></span>
            </div>
          </div>
        </div>

        <div class="section">
          <blockquote class="quote">Je veux partager les recettes de ma grand-mère et rencontrer des gens de tous horizons.</blockquote>
        </div>

        <div class="section">
          <div class="list-title">
            <h2 class="list-title__title">Ce qu'aimerait Alison</h2>
          </div>

          <ul class="list">
            <li class="list__item">Des boissons</li>
            <li class="list__item">Un dessert</li>
            <li class="list__item">Un sourire</li>
          </ul>
        </div>

        <div class="section">
          <div class="list-title">
            <h2 class="list-title__title">Plus d'informations</h2>
          </div>

          <div class="tag__list meal__tag-list">
            <span class="tag--lgreen">Végétarien</span>
            <span class="tag--dgreen">Halal</span>
          </div>

          <p>Ingrédients : comté, beaufort, emmental, vin blanc, ail, noix de muscade, fécule de maïs, sel, poivre </p>
        </div>

        <router-link to="/mealform" tag="button" class="btn__orange--shadow btn__fab">Réserver</router-link>




      </div>
    </div>

</template>

<script>
export default {
  name: "MealDetail",
  data() {
    return {
      msg: 'Fondue savoyarde chez Alison'
    }
  }
};
</script>
