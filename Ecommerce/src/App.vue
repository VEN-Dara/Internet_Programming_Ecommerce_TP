<template>
  <body>
    <Provider>
      <Layout/>
      <div class="w-[1400px] m-auto flex flex-col">
        <router-view/>
      </div>
    </Provider>
  </body>
</template>

<script>
import router from "./router/index";
import Layout from "./components/Layout.vue";
import Provider from "./provider/Provider.vue";

export default {
  name: "App",
  components: {
    router,
    Layout,
    Provider,
  },
  data() {
    return {
    };
  },
  methods: {
  },
  mounted() {
  },
  router,
};
</script>

<style scoped></style>
