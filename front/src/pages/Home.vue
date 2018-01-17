<template>
  <v-ons-page>
      <head-bar></head-bar>   
      <div class="page__inner">
        <!-- <v-ons-list v-for="meal in meals" :key="meal">
          <v-ons-list-item></v-ons-list-item>
        </v-ons-list> -->

        <square-card></square-card>
      </div>
  </v-ons-page>
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
