<template>
  <body style="display: flex; flex-direction: column">
    <HomeView/>
  </body>
</template>

<script>
import HomeView from "./views/HomeView.vue";

export default {
  name: "App",
  components: {
    HomeView,
  },
  data() {
    return {
    };
  },
  methods: {
  },
  mounted() {
    // import(this.image4).then((imageModule) => {
    //   this.image2 = imageModule.default;
    // })
  },
};
</script>

<style scoped></style>
