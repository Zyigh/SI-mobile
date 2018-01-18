<template>
  <div class="card sq-card">
    <div class="sq-card__photo">
      <img src="/src/assets/logo.png" alt="Exemple photo repas">
    </div>
      <div class="sq-card__infos">
        <div class="date"> {{ mealdata.date }} {{ mealdata.hour }} </div>
        <div class="plates"> {{ mealdata.placesLeft }} <i class="icomoon icon-fork-knife"></i></div>
      </div>
      <div class="sq-card__desc">
        <span>{{ mealdata.mealName }}</span> chez {{ mealdata.hostSurname }}
      </div>
  </div>
</template>

<script>
export default {
  name: 'squareCard',
  props: ['mealdata'],
  data() {
    return {
    };
  },
  methods: {
    goTo(url) {
      window.open(url, "_blank");
    }
  }
};
</script>
