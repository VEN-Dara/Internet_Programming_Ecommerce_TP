<template>
    <div class="mt-[33px]">
        <div class="flex gap-3">
            <router-link to="/" class="hover:text-blue-500">Home</router-link>
            <p>></p>
            <p>{{ product.category }}</p>
            <p>></p>
            <p class="text-[#3BB77E]">{{ product.name }}</p>
        </div>
    </div>
    <div class="mt-[33px] flex justify-between">
        <div id="product-image" class="h-[500px] w-[680px] overflow-hidden border-2 flex items-center justify-center rounded-xl">
            <img :src="product.image" alt="" class="w-[80%]">
        </div>
        <div class="h-[500px] w-[680px] flex flex-col gap-5">
            <div class="flex justify-center items-center leading-none w-[100px] h-[29px] bg-green-100 text-[#3BB77E]">Instock</div>
            <p class="text-[40px] font-bold text-[#253D4E]">{{ product.name }}</p>
            <div class="" style="display: flex; align-items: center;">
                <div class="flex">
                    <Star v-for="(index) in product.rate" :key="index"  style="color: gold;"/>
                    <Star v-for="(index) in (5-product.rate)" :key="index"  style="color: gray;"/>
                </div>
                <span style="margin-left: 10px; margin-bottom: 0px;">({{product.rate}})</span>
            </div>
            <div class="flex items-end leading-none gap-10">
                <p class="text-[72px] text-green-600 font-bold">{{ product.discountPrice }}</p>
                <p class="text-[32px] text-[#B6B6B6] font-bold pb-2 line-through">{{ product.sellPrice }}</p>
            </div>
            <p class="text-[18px] text-[#7E7E7E] w-full">{{ product.description }}</p>
            <div class="flex gap-2">
                <input type="number" value="1" class="h-[40px] w-[115px] px-[14px] py-[7px] border-green-400 border-2 rounded-md focus:outline-green-600">
                <button class="h-[40px] px-2 bg-green-600 rounded-md text-white text-lg font-bold">Add to card</button>
                <button class="h-[40px] w-[40px] rounded-md border-2 text-gray-400 flex justify-center items-center"> <Icon icon="material-symbols:favorite-outline-rounded"/> </button>
                <button class="h-[40px] w-[40px] rounded-md border-2 text-gray-400 flex justify-center items-center"> <Icon icon="material-symbols-light:share"/> </button>
            </div>
        </div>
    </div>
    <div id="more-product" class="flex items-center w-[680px] border-2 py-2 mt-[33px] rounded-xl">
        <button class="text-gray-600 hover:text-black text-[35px]" @click="goToBackProduct()"> <Icon icon="ph:caret-circle-left-fill"/> </button>        
        <div class="flex items-center gap-1 overflow-x-scroll scrollbar-hide">
            <router-link 
                v-for="(product, index) in data.products"
                :key="index" :to="`/products/${product.id}`"
                class="border-2 w-[75px] h-[75px] flex flex-shrink-0 items-center justify-center overflow-hidden hover:border-green-300"
                :class="{'border-green-400' : $route.path === `/products/${product.id}`}"
                >
                <img :src="product.image" alt="img" class="w-full">
            </router-link>
        </div>
        <button 
            @click="nextProduct()"
            class="text-gray-600 hover:text-black text-[35px]"
        > <Icon icon="ph:caret-circle-right-fill"/> </button>
    </div>
    <div class="border-2 rounded-lg mt-[33px] px-[50px] py-[40px]">
        <div class="flex gap-3">  
            <button class="py-[8px] px-[20px] rounded-3xl border-[2px] text-lg font-bold text-green-500">Description</button>
            <button class="py-[8px] px-[20px] rounded-3xl border-[2px] text-lg font-bold text-gray-400">Addintional Info</button>
            <button class="py-[8px] px-[20px] rounded-3xl border-[2px] text-lg font-bold text-gray-400">Reviews</button>
        </div>
        <p class="text-[18px] text-[#7E7E7E] w-full mt-5">{{ product.description }}</p>
    </div>
</template>

<script>
    import Star from 'vue-material-design-icons/star.vue'
    import { Icon } from '@iconify/vue';
    export default {
        name: "ProductView",
        inject: ['data'],
        data() {
            return {
                productID: null,
                product: null,
            }
        },
        components: {
            Star,
            Icon,
        },
        created() {
            this.productID = this.$route.params.productID
            this.product = this.data.products.find( product => product.id === parseInt(this.productID))
        },
        watch: {
            $route(to, from) {
                if(to.params.productID !== from.params.productID) {
                    this.productID = to.params.productID
                    this.product = this.data.products.find( product => product.id === parseInt(this.productID))
                }
            }
        },
        methods: {
            nextProduct() {
                const currentProductIndex = this.data.products.findIndex( product => product.id === parseInt(this.productID))
                const nextProductIndex = (this.data.products.length-1 === currentProductIndex) ? 0 : currentProductIndex + 1  
                const nextProductID = this.data.products[nextProductIndex].id
                this.$router.push(`/products/${nextProductID}`)
            },
            goToBackProduct() {
                const currentProductIndex = this.data.products.findIndex( product => product.id === parseInt(this.productID))
                const nextProductIndex = (0 === currentProductIndex) ? this.data.products.length - 1 : currentProductIndex - 1  
                const nextProductID = this.data.products[nextProductIndex].id
                this.$router.push(`/products/${nextProductID}`)
            }
        }

    }
</script>

<style scoped>

</style>