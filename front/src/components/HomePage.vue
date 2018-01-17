<template>
  <v-ons-page>
    <v-ons-toolbar class="home-toolbar">
      <div class="center">{{ msg }}</div>
    </v-ons-toolbar>

    <v-ons-list-title>Vue title</v-ons-list-title>
    <v-ons-list class="square-cards cards-container">
      <v-ons-list-item v-for="meal in meals" :key="meal.link">
        <v-ons-card>
          <div class="title">
            Le {{ meal.date }}, c'est {{ meal.mealName }} avec {{ meal.hostSurname }}
          </div>
          <div class="content">
            Bonjour
          </div>
        </v-ons-card>
      </v-ons-list-item>
    </v-ons-list>

    <v-ons-list-title>Vue.js Ecosystem</v-ons-list-title>
    <v-ons-row>
      <v-ons-col>
        <v-ons-card @click="goTo('http://router.vuejs.org/')">vue-router</v-ons-card>
      </v-ons-col>
      <v-ons-col>
        <v-ons-card @click="goTo('http://vuex.vuejs.org/')">vuex</v-ons-card>
      </v-ons-col>
    </v-ons-row>
    <v-ons-row>
      <v-ons-col>
        <v-ons-card @click="goTo('http://vue-loader.vuejs.org/')">vue-loader</v-ons-card>
      </v-ons-col>
      <v-ons-col>
        <v-ons-card @click="goTo('https://github.com/vuejs/awesome-vue')">awesome-vue</v-ons-card>
      </v-ons-col>
    </v-ons-row>

    <nav class="ctabbar">
      <div @click="switchPage('/meals')" class="ctabbar__link">
        <span class="ctabbar__label">Mes repas</span>
      </div>
      <div @click="switchPage('/home')" class="ctabbar__link">
        <span class="ctabbar__label">Accueil</span>
      </div>
      <div @click="switchPage('/profile')" class="ctabbar__link" v-bind:class="{ current: 'selected' }">
        <span class="ctabbar__label">Mon profil</span>
      </div>
    </nav>
  </v-ons-page>
</template>

<script>
export default {
  name: "home",
  data() {
    return {
      current: false,
      msg: "Fidmi",
      meals: [
        {
          hostName: "Salas",
          hostSurname: "Olivia",
          mealName: "blanquette de veau",
          date: "16/01/2018",
          hour: "19h",
          placesLeft: 2,
          imgUrl: ""
        },
        {
          hostName: "Reininger",
          hostSurname: "Ombeline",
          mealName: "boeuf bourguignon",
          date: "16/01/2018",
          hour: "19h",
          placesLeft: 1,
          imgUrl: ""
        },
        {
          hostName: "Reininger",
          hostSurname: "Ombeline",
          mealName: "boeuf bourguignon",
          date: "16/01/2018",
          hour: "19h",
          placesLeft: 1,
          imgUrl: ""
        },
        {
          hostName: "Reininger",
          hostSurname: "Ombeline",
          mealName: "boeuf bourguignon",
          date: "16/01/2018",
          hour: "19h",
          placesLeft: 1,
          imgUrl: ""
        },{
          hostName: "Reininger",
          hostSurname: "Ombeline",
          mealName: "boeuf bourguignon",
          date: "16/01/2018",
          hour: "19h",
          placesLeft: 1,
          imgUrl: ""
        },
      ]
    };
  },
  methods: {
    goTo(url) {
      window.open(url, "_blank");
    },

    switchPage(url) {
      console.log(this.current);
      this.current = !this.current;
    },
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
