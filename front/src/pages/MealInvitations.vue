<template>
    <div class="meal-invitations page">
      <div class="headpage mealform__headpage">
        <div class="page__inner">
          <div class="mealform__headpage-top">
            <router-link to="/meal" tag="i" class="icomoon icon-arrow-back headpage__back"></router-link>
          </div>
          <h1 class="headpage__title">{{ msg }}</h1>
        </div>
      </div>
      <div class="page__inner page__body">
        <div class="headtitle meal-invitations__headtitle">
          <h1 class="headpage__title--dark">Fondue Savoyarde</h1>
          <div class="headpage__subtitles">
            <span class="headpage__subtitle--dark">Auj 11h</span>
            <span class="headpage__subtitle--dark">5 <i class="icomoon icon-fork-knife icon-fork-knife--dark"></i> restants</span>
          </div>
        </div>
        <div class="tag__list">
          <span class="tag--lgreen">Végétarien</span>
          <span class="tag--dgreen">Halal</span>
        </div>
        <p>Ingrédients : comté, beaufort, emmental, vin blanc, ail, noix de muscade, fécule de maïs, sel, poivre </p>

        <section>
          <h2 class="list-title__title meal-invitations__title">Propositions</h2>

          <div class="proposition">
            <div class="proposition__stack">
              <user></user>

              <div class="actions">
                <button type="button" name="button" class="btn__orange--close"><i class="icomoon icon-plus"></i></button>
                <button type="button" name="button" class="sqbtn__orange--empty"><i class="icomoon icon-checked"></i></button>
              </div>
            </div>

            <div class="proposition__stack">
              <list></list>

              <div class="guest">
                <span class="guest__number">2</span>
                <span class="guest__icon"><i class="icomoon icon-fork-knife icon-fork-knife--dark"></i></span>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

</template>

<script>

import User from '../components/User.vue';
import List from '../components/List.vue';

export default {
  name: "MealInvitations",
  data() {
    return {
      msg: 'Fondue savoyarde chez Alison'
    }
  },
  components: {
    User,
    List
  }
};
</script>
