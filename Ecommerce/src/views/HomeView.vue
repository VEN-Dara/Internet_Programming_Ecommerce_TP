<template>
  <div class="home-container">
    <nav>
      <h2>Featured Categories</h2>
      <ul>
        <li><strong>All</strong></li>
        <li v-for="(group, index) in groups" :key="index">
          {{ group }}
        </li>
      </ul>
    </nav>
    <div class="categories">
      <ul>
        <li v-for="(category, index) in categories" :key="index">
          <Category :color="category.color" :image="category.image" :name="category.name" quantity="12"/>
        </li>
      </ul>
    </div>
    <div class="promotions">
      <ul>
        <li v-for="(promotion, index) in promotions" :key="index">
          <promotion :title="promotion.title" :color="promotion.color" :image="promotion.image"/>
        </li>
      </ul>
    </div>
    <nav>
      <h2>Popular Products</h2>
      <ul>
        <li><strong>All</strong></li>
        <li v-for="(group, index) in groups" :key="index">
          {{ group }}
        </li>
      </ul>
    </nav>
    <div class="products">
      <ul>
        <li v-for="(product, index) in products" :key="index">
          <Product :name="product.name" :category="product.category" :image="product.image" :tag="product.tag" :sellPrice="product.sellPrice" :description="product.description" :discountPrice="product.discountPrice" :rate="product.rate"/>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import Category from '../components/Category.vue';
import Product from '../components/Product.vue';
import Promotion from '../components/Promotion.vue';
import image1 from "../assets/images/Peach.png";
import image2 from "../assets/images/Hamberger.png";

export default {

  name: "HomeVue",
  components: {
    Category,
    Promotion,
    Product,
},
  data() {
    return {
      groups: ["Milks & Diaries", "Coffees & Teas", "Pet Foods", "Meats", "Vegetables", "Fruits"],
      promotions: [
        {
          id: 1,
          title: "Everyday Fresh & Clean with Our Products",
          color: "#F0E8D5",
          image: "../assets/images/Cms-04 1.png",
        },
        {
          id: 2,
          title: "Make your Breakfast Healthy and Easy",
          color: "#F3E8E8",
          image: "../assets/images/Cat-01 1.png",
        },
        {
          id: 3,
          title: "The best Organic Products Online",
          color: "#E7EAF3",
          image: "../assets/images/Cms-03 1.png",
        },
      ],
      categories: [
        {
          id: 1,
          group: "Milks & Diaries",
          name: "Coke & Milk",
          color: "#F2FCE4",
          image: "./Vegetable.png",
        },
        {
          id: 2,
          group: "Fruits",
          name: "Peach",
          color: "#FFFCEB",
          image: image1
        },
        {
          id: 3,
          group: "Fruits",
          name: "Organic Kiwi",
          color: "#ECFFEC",
          image: "../assets/images/Kiwi.png"
        },
        {
          id: 4,
          group: "Fruits",
          name: "Red Apple",
          color: "#FEEFEA",
          image: "../assets/images/RedApple.png"
        },
        {
          id: 5,
          group: "Coffees & Teas",
          name: "Snack",
          color: "#FFF3EB",
          image: "../assets/images/Snack.png"
        },
        {
          id: 5,
          group: "Coffees & Teas",
          name: "Black plum",
          color: "#FFF3FF",
          image: "../assets/images/BlackPlum.png"
        },
        {
          id: 5,
          group: "Coffees & Teas",
          name: "Vegetables",
          color: "#F2FCE4",
          image: "../assets/images/Vegetable.png"
        },
        {
          id: 5,
          group: "Coffees & Teas",
          name: "Headphone",
          color: "#FFFCEB",
          image: "../assets/images/Headphone.png"
        },
        {
          id: 5,
          group: "Coffees & Teas",
          name: "Sweet",
          color: "#F2FCE4",
          image: "../assets/images/Sweet.png"
        },
        {
          id: 5,
          group: "Coffees & Teas",
          name: "Orange",
          color: "#FFF3FF",
          image: "../assets/images/Orange.png"
        },
      ],
      products: [
        {
          id: 1,
          tag: "-17%",
          image: "../assets/images/1 902.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 3,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
        {
          id: 1,
          tag: "-32%",
          image: "../assets/images/3 389454.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 4,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
        {
          id: 1,
          tag: "-17%",
          image: "../assets/images/5 7.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 5,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
        {
          id: 1,
          tag: "-55%",
          image: "../assets/images/8 1.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 4,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
        {
          id: 1,
          tag: "-17%",
          image: "../assets/images/9 1.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 5,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
        {
          id: 1,
          tag: "-32%",
          image: "../assets/images/11 1.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 4,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
        {
          id: 1,
          tag: "-17%",
          image: "../assets/images/12 1.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 5,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
        {
          id: 1,
          tag: "-55%",
          image: "../assets/images/16 1.png",
          category: "Coffees & Teas",
          name: "Seeds of Change Organic Quinoa, Brown, & Red Rice",
          rate: 4,
          description: "500 gram",
          sellPrice: 300,
          discountPercentage: 17,
          discountPrice: 150,
        },
      ],
    }
  }, // End Data
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
  width: 1300px;
  margin: auto;
}

nav {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  margin-top: 40px
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
.categories ul li{
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
