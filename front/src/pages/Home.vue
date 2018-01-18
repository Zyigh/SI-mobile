<template>
  <div class="page">
      <head-bar></head-bar>
      <div class="page__inner">
        <section>
          <h2 class="title--bordered">Aujourd'hui</h2>
          <ul class="list sq-list" v-if="meals !== []">
            <li class="sq-list__item" v-for="meal in meals" :key="meal.id">
              <square-card v-bind:mealdata="meal"></square-card>
            </li>
          </ul>
        </section>
      </div>
  </div>
</template>

<script>
import moment from 'moment'

/* COMPONENTS */
import HeadBar from "../components/HeadBar.vue"
import SquareCard from "../components/SquareCard.vue"

export default {
  name: "Home",
  mounted: function(){
    this.getMeals();
  },
  
  data() {
    return {
      meals: [],
    };
  },
  
  methods: {
    getMeals: function() {
      this.$http.get("http://localhost:3000/home").then(
        response => {
          var data = response.body;
          for (let i = 0; i < data.length; i++){
            let date =  moment.unix(data[i].date).format("DD/MM/YY");

            this.meals.push(data[i]);
          }
        }, response => {
          alert('Have not been able to retrieve data, please ask Hugo Medina to fix me');
        }
      );
    }
  },
  components: {
    HeadBar,
    SquareCard
  }
};
</script>
