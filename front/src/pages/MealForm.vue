<template>
    <div class="page">
      <div class="headpage">
        <div class="page__inner headpage__inner">
          <div class="headpage__top">
            <span class="headpage__reminder">Réservation avant 14h !</span>
          </div>

          <div class="headtitle">
            <h1 class="headtitle__title">{{ msg }}</h1>
            <p class="headtitle__subtitle">Aujourd'hui à 21h</p>
          </div>
        </div>
      </div>
      <div class="page__inner meal__body">
        <h2>yo</h2>
      </div>
    </div>

</template>

<script>
export default {
  name: "MealForm",
  data() {
    return {
      msg: 'Fondue savoyarde chez Alison'
    }
  }
};
</script>
