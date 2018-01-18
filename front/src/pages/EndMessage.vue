<template>
  <div class="end-message page">
    <div class="end-message__inner">
    <template v-if="pagePath == '/confirmation-sent'">
      <h1 class="title--white">Réponse envoyée !</h1>
      <img src="../assets/otters/otter-3.svg" class="end-message__img">
      <p class="end-message__text">pendant que nous prévenons {{ name }}, pensez à modifier votre wishlist</p>

      <div class="end-message__inner-bottom btn__outer--centered">
        <router-link to="/meal-invitations" tag="button" class="btn__white--empty">Retour</router-link>
      </div>
    </template>

    <template v-if="pagePath == '/invitation-sent'">
        <h1 class="title--white">Invitation envoyée !</h1>
        <img src="../assets/otters/otter-1.svg" class="end-message__img">
        <p class="end-message__text">On revient très vite avec la réponse d'{{ name }}</p>

        <div class="end-message__inner-bottom btn__outer--centered">
          <router-link to="/meal-invitations" tag="button" class="btn__white--empty">Retour</router-link>
          <router-link to="/meal-invitations" tag="a" class="link__huge--white">Pas maintenant</router-link>
        </div>
    </template>
  </div>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>




<script>
export default {
  name: "EndMessage",
  data() {
    return {
      pagePath: this.$route.path,
      name: 'Ombeline',
    }
  },

  mounted() {
    console.log(this.pagePath);
  }
};
</script>
