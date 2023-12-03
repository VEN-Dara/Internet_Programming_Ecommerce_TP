<template>
    <div class="mt-[32px]">
        <div class="w-[1400px] h-[235px] relative overflow-hidden flex flex-col justify-center pl-[70px] rounded-[20px]">
            <div class="flex h-full w-full absolute top-0 left-0 -z-10 bg-green-100">
                <img src="../assets/images/12Asset 1@4022244422x 2.png" alt="image" class="">
                <img src="../assets/images/12Asset 1@4022244422x 1.png" alt="image" class="">
            </div>
            <p class="text-[48px] font-bold text-[#253D4E]">{{ category.name }}</p>
            <div class="flex text-[#7E7E7E] text-lg gap-2 mt-4">
                <router-link to="/" class="hover:text-blue-500">Home</router-link>
                <p>></p>
                <p>Categories</p>
                <p>></p>
                <p>{{category.name}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CategoryView",
        inject: ['data'],
        data() {
            return {
                categoryID: null,
                category: null,
            }
        },
        created() {
            this.categoryID = this.$route.params.categoryID;
            this.category = this.getCategoryByID(parseInt(this.categoryID))
        },
        watch: {
            $route(to, from) {
            if (to.params.categoryID !== from.params.categoryID) {
                this.categoryID = to.params.categoryID;
                this.category = this.getCategoryByID(parseInt(this.categoryID))
            }
            }
        },
        methods: {
            getCategoryByID(id) {
                const category = this.data.categories.find( category => category.id === id)
                return category
            }
        }
    }
</script>

<style scoped>

</style>