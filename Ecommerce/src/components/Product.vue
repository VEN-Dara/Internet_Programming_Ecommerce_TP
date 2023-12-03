<template>
    <router-link :to="`products/${id}`">
        <div class="product hover:shadow-lg">
            <div v-if="tag !== ''" :class="[ 'tag', tag === 'Hot' ? 'bg-[#fe2f2f]': tag === 'Sale' ? 'bg-[#ffe609]' : 'bg-[#1fff97]']" >{{ tag }}</div>
            <div class="cover">
                <img :src=image alt="">
            </div>
            <div class="info">
                <p class="category">{{category}}</p>
                <p class="name">{{ name }}</p>
                <div class="rate" style="display: flex; align-items: center;">
                    <div class="flex">
                        <Star v-for="(index) in rate" :key="index"  style="color: gold;"/>
                        <Star v-for="(index) in (5-rate)" :key="index"  style="color: gray;"/>
                    </div>
                    <span style="margin-left: 10px; margin-bottom: 4px;">({{rate}})</span>
                </div>
                <p class="description">{{description}}</p>
                <div class="buy-box">
                    <div>
                        <span class="discount">${{discountPrice}}</span>
                        <span class="price">${{sellPrice}}</span>
                    </div>
                    <input type="number" id="quantity">
                </div>
            </div>
        </div>
    </router-link>
    
</template>

<script>
import Star from 'vue-material-design-icons/star.vue'

export default {
    name: 'Product',
    props: {
        id: Number,
        tag: String,
        image: URL,
        category: String,
        name: String,
        rate: Number,
        description: String,
        sellPrice: Number,
        discountPrice: Number,
    },
    components: {
        Star,
    },
    methods: {
        getImageUrl(image) {
            return new URL(image, import.meta.url)
        }
    }
}

</script>

<style scoped>

p {
    margin: 8px 0;
}
.product {
    position: relative;
    width: 298px;
    height: 402px;
    border-radius: 10px;
    border-radius: 10px;
    border: 1px solid #BCE3C9;
    background: #FFF;
}

.product .tag {
    position: absolute;
    top: 20px;
    left: 0;
    padding: 8px 15px;
    border-radius: 0px 30px 30px 0px;
    display: inline-block;
}

.product .cover {
    height: 50%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.product .info {
    padding-left: 19px;
    padding-right: 19px;
}

.info .category {
    color: #7E7E7E;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
}

.info .name {
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    width: 240px;
    height: 40px;
    overflow: hidden;
}

.info .description {
    color: var(--NestMart-TextBody, #7E7E7E);
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    margin-top: 0;
    margin-bottom: 14px;
    width: 100%;
    height: 16px;
    overflow: hidden;
}

.buy-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.buy-box .price {
    text-decoration-line: line-through;
    color: var(--NestMart-TextBody, #7E7E7E);
    font-size: 12px;
    font-style: normal;
    font-weight: 700;
    margin-left: 10px;
} 

.buy-box .discount {
    color: var(--NestMart-Brand-1, #3BB77E);
    font-family: Quicksand;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
}

.buy-box input {
    width: 67px;
    height: 29px;
    border-radius: 4px;
    border: 1px solid var(--NestMart-Brand-1, #3BB77E);
    background: #FFF;
}


</style>