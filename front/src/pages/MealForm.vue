<template>
    <div class="mealform page">
      <div class="headpage">
        <div class="page__inner headpage__inner">
          <div class="headpage__top">
            <router-link to="/tabs/home" tag="i" class="icomoon icon-arrow-back"></router-link>

            <span class="headpage__reminder">Réservation avant 14h !</span>
          </div>

          <div class="headtitle">
            <h1 class="headpage__title">{{ msg }}</h1>
            <p class="headpage__subtitle">Auj {{ timeLimit }}</p>
          </div>
        </div>
      </div>

      <div class="page__inner mealform__body">
        <form class="" action="index.html" method="post">
          <div class="field">
            <label for="" class="field__label--spacer">Nombre de personnes</label>

            <div class="field__btns">
              <span class="field__btns-single" @click="removePeople()">-</span>
              <span class="field__btns-value">{{ nbPeople }}</span>
              <span class="field__btns-single" @click="addPeople()">+</span>
            </div>
          </div>

          <div class="field">
            <label for="" class="field__label--spacer">Votre offre</label>

            <textarea name="name" class="field__textarea" placeholder="Que proposez-vous à Alison en échange d'une place à sa table ?"></textarea>
          </div>

          <div class="btn__outer--centered">
            <router-link to="/invitation-sent" tag="button" class="btn__orange--shadow">Envoyer</router-link>
          </div>

        </form>
      </div>

    </div>

</template>

<script>
export default {
  name: "MealForm",
  data() {
    return {
      msg: 'Fondue savoyarde chez Alison',
      timeLimit: '14h',
      nbPeople: 1
    }
  },
  methods: {
    removePeople() {
      if (this.nbPeople < 2) {
        return;
      }

      this.nbPeople -= 1;
    },
    addPeople() {
      this.nbPeople += 1;

      // condition, si nbPeople > au nbppl maximum
    }
  }
};
</script>
