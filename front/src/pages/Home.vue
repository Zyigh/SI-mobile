<template>
  <div class="page">
      <head-bar></head-bar>   
      <div class="page__inner">
        <ul class="list sq-list">
          <li class="sq-list__item" v-for="meal in meals" :key="meal.id">
            <square-card v-bind:mealdata="meal"></square-card>
          </li>
        </ul>
        <!-- <square-card></square-card> -->
      </div>
  </div>
</template>

<script>
import HeadBar from '../components/HeadBar.vue';
import SquareCard from '../components/SquareCard.vue';

export default {
  name: "Home",
  data() {
    return {
      meals: [
        {
          hostName: 'Salas',
          hostSurname: 'Olivia',
          mealName: 'Blanquette de veau',
          date: '16/01/2018',
          hour: '19h00',
          placesLeft: 2,
          imgUrl: ""
        },
        {
          hostName: 'Salas',
          hostSurname: 'Ombeline',
          mealName: 'Blanquette de veau',
          date: '16/01/2018',
          hour: '19h00',
          placesLeft: 2,
          imgUrl: ""
        },
        {
          hostName: 'Salas',
          hostSurname: 'Ombeline',
          mealName: 'Blanquette de veau',
          date: '16/01/2018',
          hour: '19h00',
          placesLeft: 2,
          imgUrl: ""
        },
        {
          hostName: 'Salas',
          hostSurname: 'Ombeline',
          mealName: 'Blanquette de veau',
          date: '16/01/2018',
          hour: '19h00',
          placesLeft: 2,
          imgUrl: ""
        }
      ]
    }
  },
  components: {
    HeadBar,
    SquareCard
  }
};
</script>
