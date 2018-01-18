<template>
    <div class="page">
      <div class="headpage">
        <div class="page__inner headpage__inner">
          <div class="headpage__top">
            <router-link to="/tabs/home" tag="i" class="icomoon icon-arrow-back"></router-link>

            <span class="headpage__reminder">Réservation avant {{ timeLimit }} !</span>
          </div>

          <div class="headtitle">
            <h1 class="headpage__title">{{ msg }}</h1>
            <div class="headpage__subtitles">
              <span class="headpage__subtitle">Auj 21h</span>
              <span class="headpage__subtitle">{{ nbPpl }} <i class="icomoon icon-fork-knife headpage__icon"></i> restants</span>
            </div>
          </div>
        </div>
      </div>
      <div class="page__inner meal__body">
        <div class="section meal__s-user">
          <user name="Ombeline"></user>
        </div>

        <div class="section">
          <blockquote class="quote">
            <i class="icomoon icon-quotes-left quote__icon--left"></i>
            Je veux partager les recettes de ma grand-mère et rencontrer des gens de tous horizons.
            <i class="icomoon icon-quotes-right quote__icon--right"></i>
          </blockquote>
        </div>

        <div class="section">
          <div class="list-title">
            <h2 class="list-title__title">Ce qu'aimerait Alison</h2>
          </div>

          <ul class="list">
            <li class="list__item"><i class="list__item-icon icomoon icon-heart"></i> Des boissons</li>
            <li class="list__item"><i class="list__item-icon icomoon icon-heart"></i> Un dessert</li>
            <li class="list__item"><i class="list__item-icon icomoon icon-heart"></i> Un sourire</li>
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

        <router-link to="/meal-form" tag="button" class="btn__orange--shadow btn__fab">Réserver</router-link>

      </div>
    </div>

</template>

<script>

import User from '../components/User.vue';

export default {
  name: "MealDetail",
  data() {
    return {
      msg: 'Fondue savoyarde chez Alison',
      timeLimit: '14h',
      nbPpl: 5,
    }
  },
  components: {
    User
  }
};
</script>
