<template>
    <div class="end-message page">
      <div class="end-message__inner">
        <h1 class="title--white">Demande envoyée !</h1>
        <p class="end-message__text">On revient très vite avec la réponse d'Alison</p>

        <div class="end-message__inner-bottom btn__outer--centered">
          <router-link to="/mealform" tag="button" class="btn__white--empty">Retour</router-link>
        </div>
      </div>

    </div>

</template>

<script>
export default {
  name: "EndMessage",
};
</script>
