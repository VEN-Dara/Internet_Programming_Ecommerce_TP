<template>
  <header>
    <div class="flex items-center justify-between w-[1400px] m-auto">
      <div class="flex items-center gap-[70px]">        
        <router-link to="/">
          <div class="logo flex">
            <img class="w-[60px] h-[60px] mr-1" src="https://static.vecteezy.com/system/resources/previews/007/476/773/original/hand-drawn-illustration-of-a-cat-face-green-cat-head-isolated-on-white-background-gloomy-cat-angry-pet-flat-style-icon-vector.jpg" alt="logo-shop">
            <div >
              <p class="text-[#3BB77E] font-bold text-[40px] m-0 leading-10">Melon</p>
              <p class="text-[#253D4E] text-[10px] font-[600] m-0 pl-[2px] tracking-[2px]">MART & GROCERY</p>
            </div>
          </div>
        </router-link>
        <search-box/>
      </div>
      <nav class="flex items-center">
        <router-link to="account" class="flex">
          <Icon icon="material-symbols:person-outline-rounded" class="text-[24px]"/>
          <span >Account</span>
        </router-link>
        <router-link to="compare" class="flex ml-5">
          <Icon icon="fluent:branch-compare-24-regular" class="text-[24px]"/>
          <span >Campare</span>
        </router-link>
        <router-link to="wishlist" class="flex ml-5">
          <Icon icon="material-symbols:favorite-outline-rounded" class="text-[24px]"/>
          <span >Wishlist</span>
        </router-link>
        <router-link to="cart" class="flex ml-5">
          <Icon icon="material-symbols:shopping-cart-outline-rounded" class="text-[24px]"/>
          <span >Cart</span>
        </router-link>
      </nav>
    </div>
    <div class="mt-[30px]">
      <hr>
      <div class="flex my-3 items-center justify-between w-[1400px] m-auto">
        <div class="flex gap-9">
          <div class="bg-[#3BB77E] px-4 py-3 flex items-center gap-1 rounded-md font-bold text-white">
            <Icon icon="material-symbols-light:border-all-rounded"/>
            <select 
              class="bg-transparent focus:outline-none rounded-none"
              v-model="browseCategoryID"
              @change="toCategory()"
            >
              <option value="" class="bg-white text-black">Browse All Categories</option>
              <option class="bg-white text-black" v-for="(category, index) in data.categories" :key="index" :value="category.id"> {{ category.name }}</option>
            </select>
          </div>
          <router-link to="hot_deals" class="flex items-center">
            <Icon icon="mdi:fire" class="text-[#3BB77E] text-xl"/>
            <span class="font-bold">Hot Deals</span>
          </router-link>
          <ul class="flex items-center gap-5 font-bold capitalize">
            <li>
              <router-link to="home">home</router-link>
            </li>
            <li>
              <router-link to="food">food</router-link>
            </li>
            <li>
              <router-link to="vegetables">vegetables</router-link>
            </li>
            <li>
              <router-link to="drink">drink</router-link>
            </li>
            <li>
              <router-link to="cookies">cookies</router-link>
            </li>
            <li>
              <router-link to="meat_&_seafood">Meat & Seafood</router-link>
            </li>
            <li>
              <router-link to="bekery">bekery</router-link>
            </li>
          </ul>
        </div>
        <div class="flex items-center gap-3">
          <Icon icon="fa6-solid:headset" class="text-4xl"/>
          <div>
            <p class="text-2xl text-[#3BB77E] font-bold leading-none">096 318 0249</p>
            <p class="text-[12px] font-normal text-[#7E7E7E] leading-none">24/7 Support Center</p>
          </div>
        </div>
      </div>
      <hr>
    </div>
  </header>
</template>

<script>
import SearchBox from './SearchBox.vue';
import {Icon} from '@iconify/vue'

export default {
  name: "layout",
  components: {
    SearchBox,
    Icon,
  },
  inject: ['data'],
  data() {
    return {
      browseCategoryID: '', 
    }
  },
  watch: {
    $route(to, from) {
      if (to.params.categoryID !== from.params.categoryID) {
          this.browseCategoryID = to.params.categoryID || '';
      }
    }

  },
  methods: {
    toCategory() {
      console.log(this.browseCategoryID === '')
      if (this.browseCategoryID === '') {
        this.$router.push('/');
      }
      else {
        this.$router.push('/categories/' + this.browseCategoryID);
      }
      
    }
  }
};
</script>

<style scoped>

</style>
