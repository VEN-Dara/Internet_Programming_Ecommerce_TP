<template>
  <div class="home-container">
    <br>
    <subscribe-panel/>
    <nav>
      <h2>Featured Categories</h2>
      <ul>
        <li><strong>All</strong></li>
        <li v-for="(group, index) in data.groups" :key="index">
          {{ group }}
        </li>
      </ul>
    </nav>
    <div class="categories">
      <ul>
        <li v-for="(category, index) in data.categories" :key="index">
          <Category
            :color="category.color"
            :image="category.image"
            :name="category.name"
            quantity="12"
          />
        </li>
      </ul>
    </div>
    <div class="promotions">
      <ul>
        <li v-for="(promotion, index) in data.promotions" :key="index">
          <promotion
            :id="promotion.id"
            :title="promotion.title"
            :color="promotion.color"
            :image="promotion.image"
          />
        </li>
      </ul>
    </div>
    <nav>
      <h2>Popular Products</h2>
      <ul>
        <li><strong>All</strong></li>
        <li v-for="(group, index) in data.groups" :key="index">
          {{ group }}
        </li>
      </ul>
    </nav>
    <div class="products">
      <ul>
        <li v-for="(product, index) in data.products" :key="index">
          <Product
            :id="product.id"
            :name="product.name"
            :category="product.category"
            :image="product.image"
            :tag="product.tag"
            :sellPrice="product.sellPrice"
            :description="product.description"
            :discountPrice="product.discountPrice"
            :rate="product.rate"
          />
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import Product from "../components/Product.vue";
import Promotion from "../components/Promotion.vue";
import Category from "../components/Category.vue";
import SubscribePanel from '../components/SubscribePanel.vue';

export default {
  name: "HomeVue",
  components: {
    Category,
    Promotion,
    Product,
    SubscribePanel,
  },
  inject: ['data'],
  methods: {
    getImageUrl(image) {
      return new URL(image, import.meta.url);
    },
  },
};
</script>

<style scoped>
* {
  margin: 0;
}

h2 {
  font-size: 32px;
  font-style: normal;
  font-weight: 700;
  line-height: 40px;
  letter-spacing: -0.013px;
}



.home-container {
  display: inline-block;
}

nav {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  margin-top: 40px;
}

nav ul {
  display: flex;
  gap: 30px;
}

nav ul li {
  font-weight: 500;
  list-style: none;
  margin: 0;
}

.categories {
  margin-top: 40px;
}
.categories ul {
  display: flex;
  gap: 20px;
  padding: 0;
  overflow-x: scroll;
}

.categories ul::-webkit-scrollbar {
  display: none;
}
.categories ul li {
  list-style: none;
}

.promotions {
  margin-top: 60px;
  margin-bottom: 60px;
  overflow: hidden;
}

.promotions ul {
  display: grid;
  grid-template-columns: auto auto auto;
  gap: 24px;
  padding: 0;
  overflow-x: scroll;
}

.promotions ul::-webkit-scrollbar {
  display: none;
}

.promotions ul li {
  list-style: none;
}

.products {
  margin-top: 40px;
  display: flex;
  justify-content: center;
}

.products ul {
  display: inline-grid;
  grid-template-columns: auto auto auto auto;
  gap: 20px;
  padding: 0;
}

.products ul li {
  display: inline-block;
  list-style: none;
}
</style>
