<template>
  <div class="user">
    <img src="" alt="" class="user__photo">
    <div class="user__infos">
      <span class="user__name">{{ name }}</span>
      <div class="stars">
        <i class="stars__single--full icomoon icon-star"></i>
        <i class="stars__single--full icomoon icon-star"></i>
        <i class="stars__single--full icomoon icon-star"></i>
        <i class="stars__single--full icomoon icon-star"></i>
        <i class="stars__single icomoon icon-star"></i>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'user',
  props: ['name', 'stars']
};
</script>
