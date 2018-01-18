<template>
  <ul class="list">
    <li v-for="el in elements" class="list__item"><i class="list__item-icon icomoon icon-heart"></i>{{ el }}</li>
  </ul>
</template>

<script>
export default {
  name: 'list',
  props: ['elements']
};
</script>
