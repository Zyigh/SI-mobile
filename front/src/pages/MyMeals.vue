<template>
    <div class="mealform page">
      <div class="headpage mealform__headpage">
        <div class="page__inner">
          <div class="mealform__headpage-top">
            <router-link to="/meal" tag="span" class="headpage__back">retour</router-link>
          </div>
          <h1 class="headpage__title">Historique des repas organisés</h1>
        </div>
      </div>

      <div class="page__inner page__body">
        <section class="section">
          <h2 class="title--bordered">Repas à venir</h2>

          <ul class="list sq-list">
            <li class="sq-list__item" v-for="meal in meals" :key="meal.id">
              <square-card v-bind:mealdata="meal"></square-card>
              <div class="btn__outer--centered">
                <router-link to="/meal" tag="button" class="btn__orange--empty">Voir plus</router-link>
              </div>
            </li>
          </ul>
        </section>
        <section class="section">
          <h2 class="title--bordered">Repas déjà passés</h2>

          <ul class="list sq-list">
            <li class="sq-list__item" v-for="meal in meals" :key="meal.id">
              <div class="btn__outer--centered">
                <router-link to="/meal" tag="button" class="btn__orange--empty">Voir plus</router-link>
              </div>
            </li>
          </ul>
        </section>
      </div>

    </div>

</template>

<script>

import SquareCard from "../components/SquareCard.vue";

export default {
  name: "MyMeals",
  data() {
    return {
      meals: [
        {
          hostName: 'Salas',
          hostSurname: 'Olivia',
          mealName: 'blanquette de veau',
          date: '16/01/2018',
          hour: '19h',
          placesLeft: 2,
          imgUrl: ""
        },
        {
          hostName: 'Sayarath',
          hostSurname: 'Alison',
          mealName: 'Boeuf bourguignon',
          date: '16/01/2018',
          hour: '19h',
          placesLeft: 2,
          imgUrl: ""
        },
        {
          hostName: 'Reininger',
          hostSurname: 'Ombeline',
          mealName: 'Pot-au-feu',
          date: '16/01/2018',
          hour: '19h',
          placesLeft: 2,
          imgUrl: ""
        }
      ]
    };
  },
  components: {
    SquareCard
  }
};
</script>
