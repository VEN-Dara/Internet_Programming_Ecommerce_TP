<template>
  <body style="display: flex; flex-direction: column;">
    <HomeView/>
  </body>
</template>

<script>
  import HomeView from './views/HomeView.vue';
  export default {
    name: "App",
    components: {
      HomeView,
    }
  }

</script>

<style scoped>

</style>