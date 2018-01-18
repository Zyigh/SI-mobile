<template>
    <div class="meal-invitations page">
      <div class="headpage mealform__headpage">
        <div class="page__inner">
          <div class="mealform__headpage-top">
            <router-link to="/meal" tag="span" class="headpage__back">retour</router-link>
          </div>
          <h1 class="headpage__title">{{ msg }}</h1>
        </div>
      </div>
      <div class="page__inner page__body">
        <div class="headtitle meal-invitations__headtitle">
          <h1 class="headpage__title">Fondue Savoyarde</h1>
          <div class="headpage__subtitles">
            <span class="headpage__subtile">Auj 11h</span>
            <span class="headpage__subtitle">5 <i class="icomoon icon-fork-knife icon-fork-knife--dark"></i> restants</span>
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
              <div class="user">
                <img src="" alt="" class="user__photo">
                <div class="user__infos">
                  <span class="user__name">Ombeline</span>
                  <div class="stars">
                    <span class="stars__single--full"></span>
                    <span class="stars__single--full"></span>
                    <span class="stars__single--full"></span>
                    <span class="stars__single--full"></span>
                    <span class="stars__single"></span>
                  </div>
                </div>
              </div>

              <div class="actions">
                <button type="button" name="button" class="btn__orange--virgin">x</button>
                <button type="button" name="button" class="sqbtn__orange--empty">x</button>
              </div>
            </div>

            <div class="proposition__stack">
              <ul class="list">
                <li class="list__item">Des boissons</li>
                <li class="list__item">Un dessert</li>
              </ul>

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
export default {
  name: "MealInvitations",
  data() {
    return {
      msg: 'Fondue savoyarde chez Alison'
    }
  }
};
</script>
