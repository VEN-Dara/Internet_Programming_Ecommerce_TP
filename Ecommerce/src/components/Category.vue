<template>
    <div class="category" :style="{backgroundColor: color}">
        <img :src="getImageUrl(image)" :alt="Logo" style="width: 120px; height: 120px;"/>
        <strong>{{ name }}</strong>
        <span>{{ quantity }} items</span>
    </div>
</template>

<script>
    export default {
        name: 'Category',
        // props: ['name', 'quantity', 'color', 'image'],
        props: {
            name: String,
            image: String,
            color: String,
            color: String,
        },
        methods: {
            getImageUrl(image) {
                return new URL(image, import.meta.url)
            }
        }
    }

</script>

<style scoped>
.category {
    width: 137px;
    height: 177px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 1px solid yellowgreen;
    border-radius: 10px;
}

.category span {
    font-size: 12px;
    color: rgb(165, 165, 165);
}

</style>