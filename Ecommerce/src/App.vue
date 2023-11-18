<template>
  <body style="display: flex; flex-direction: column;">
    <!-- <RouterView/> -->
    <!-- <HomeView/> -->
    <img :src="img" alt="hello"/> 
    <div>{{ image }}</div>
    <div>{{ img }}</div>

  </body>
</template>

<script>
  import HomeView from './views/HomeView.vue';
  import RouterView from './views/RouterView.vue';
  import VegetableImage from './Vegetable.png';

  export default {
    name: "App",
    components: {
      HomeView,
      RouterView,
    },
    data() {
      return {
        image: VegetableImage,
        img: new URL("@/Vegetable.png", import.meta.url)
      };
    },
  };
</script>

<style scoped>
  /* Add your component-specific styles here */
</style>
