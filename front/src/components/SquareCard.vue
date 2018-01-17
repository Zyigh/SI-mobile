<template>
  <v-ons-card class="square-card">
    <div class="photo">
      <img src="/src/assets/logo.png" alt="Exemple photo repas">
    </div>
    <div class="meal">
      <div class="infos">
        <div class="infos__date"> {{ meal.date }} <span class="infos__hour">{{ meal.hour }}</span> </div>
        <div class="infos__plates"> {{ meal.placesLeft }} </div>
      </div>
      <div class="desc">
        <span>{{ meal.mealName }}</span> chez {{ meal.hostSurname }}
      </div>
    </div>
  </v-ons-card>
</template>

<script>
export default {
  name: 'home',
  data() {
    return {
      meal: 
        {
          hostName: 'Salas',
          hostSurname: 'Olivia',
          mealName: 'Blanquette de veau',
          date: '16/01/2018',
          hour: '19h00',
          placesLeft: 2,
          imgUrl: ""
        }
    };
  },
  methods: {
    goTo(url) {
      window.open(url, "_blank");
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
img {
  max-width: 300px;
}

ons-list-title {
  text-transform: none;
}

ons-list-title:not(:first-of-type) {
  margin-top: 30px;
}

ons-card {
  text-align: center;
}

ons-list-item,
ons-card {
  cursor: pointer;
}
</style>
