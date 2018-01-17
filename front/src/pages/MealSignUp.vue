<template>
    <div class="mealform page">
      <div class="headpage mealform__headpage">
        <div class="page__inner">
          <div class="mealform__headpage-top">
            <router-link to="/meal" tag="span" class="headpage__back">retour</router-link>
          </div>
          <h1 class="headpage__title">{{ msg }}</h1>
        </div>
      </div>
      <div class="page__inner mealform__body">
        <h2 class="title">plus qu’une pincée d’épices avant de savourer votre repas maison</h2>
        <form class="mealform__form" action="index.html" method="post">
          <div class="field">
            <label for="" class="field__label">Prénom</label>
            <input type="text" name="" value="" class="field__input--text">
          </div>
          <div class="field">
            <label for="" class="field__label">Nom</label>
            <input type="text" name="" value="" class="field__input--text">
          </div>
          <div class="field">
            <label for="" class="field__label">Adresse email</label>
            <input type="mail" name="" value=""  class="field__input--text">
          </div>
          <div class="field">
            <label for="" class="field__label">Numéro de téléphone</label>
            <input type="mail" name="" value=""  class="field__input--text">
          </div>

          <div class="btn__outer--centered mealform__form-footer">
            <router-link to="/mealform" tag="button" class="btn__orange--shadow">S'inscrire</router-link>
            <a href="#" class="link__huge--orange">Se connecter</a>
          </div>


        </form>

      </div>
    </div>

</template>

<script>
export default {
  name: "MealSignUp",
  data() {
    return {
      msg: 'Fondue savoyarde chez Alison'
    }
  }
};
</script>
