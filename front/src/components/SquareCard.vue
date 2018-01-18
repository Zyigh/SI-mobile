<template>
  <div class="card sq-card">
    <div class="sq-card__photo">
      <img src="/src/assets/meal-example.png" alt="Exemple photo repas">
    </div>
      <div class="sq-card__infos">
        <div class="date"> {{ this.eventDate }} {{ this.eventHour }} </div>
        <div class="plates"> {{ mealdata.maxGuest }} <i class="icomoon icon-fork-knife"></i></div>
      </div>
      <div class="sq-card__desc">
        <span>{{ mealdata.title }}</span> chez {{ mealdata.name }}
      </div>
  </div>
</template>

<script>

/**
 * props 'mealdata' is passed from parent to SquareCard component
 * mealdata.date : date et heure de l'événement
 * mealdata.maxGuest : nombre de places disponibles
 * mealdata.title : nom du plat
 * mealdata.name : nom de l'hôte
 */

import moment from 'moment';

export default {
  name: 'squareCard',
  props: ['mealdata'],

  mounted: function(){
    this.renderFormattedDate();
    this.renderFormattedHour();
  },

  data() {
    return {
      currentDate: moment().format("DD/MM/YY"),
      eventDate: '',
      eventHour: ''
    };
  },

  methods: {
    renderFormattedDate: function(){
      this.formattedDate = moment.unix(this.mealdata.date).format("DD/MM/YY");
      if (this.currentDate == this.formattedDate){
        this.eventDate = 'Auj.'
      } else {
        this.eventDate = this.formattedDate;
      }
    },

    renderFormattedHour: function(){
      this.eventHour = moment.unix(this.mealdata.inscriptionDeadline).format("HH:mm");
    }

  }
};
</script>
