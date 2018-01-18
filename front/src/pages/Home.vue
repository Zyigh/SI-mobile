<template>
  <div class="page">
      <head-bar></head-bar>   
      <div class="page__inner">
        <h2 class="sq-list__title">Aujourd'hui</h2>
        <ul class="list sq-list">
          <li class="sq-list__item" v-for="meal in meals" :key="meal.id">
            <square-card v-bind:mealdata="meal"></square-card>
          </li>
        </ul>
      </div>
  </div>
</template>

<script>
import HeadBar from "../components/HeadBar.vue";
import SquareCard from "../components/SquareCard.vue";

export default {
  name: "Home",
  mounted: function(){
    // this.getMeals();
  },
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
  methods: {
    // getMeals: function() {
    //   this.$http.get("http://localhost:3000/home").then(
    //     response => {
    //       alert(response);
    //     },
    //     response => {
    //       alert('no');
    //     }
    //   );
    // }
  },
  components: {
    HeadBar,
    SquareCard
  }
};
</script>
