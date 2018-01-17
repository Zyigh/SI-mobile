<template>
  <div class="">
    <head-bar></head-bar>
    <div class="page__inner">
      <square-card></square-card>
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
