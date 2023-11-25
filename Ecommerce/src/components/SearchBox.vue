<template>
    <div class=" flex px-5 rounded-md border-green-300 border-2">
        <select name="categories" id="categories" class="text-sm font-bold focus:outline-none">
            <option value="all">All Categories</option>
            <option v-for="(category, index) in data.categories" :key="index" :value="category.id">
                {{ category.name }}
            </option>
        </select>
        <div class="w-[460px] h-[50px]">
            <input type="text" id="search" placeholder="Search for items" class="w-full h-full px-2 focus:outline-none">
        </div>
        <button>
            <Icon icon="material-symbols:search-rounded" class="text-[20px] text-[#7E7E7E] hover:text-black " />
        </button>
    </div>
</template>

<script>
    import { Icon } from '@iconify/vue';
    export default {
        name: 'SearchBox',
        components: {
            Icon,
        },
        inject: ['data'],
        mounted() {
            console.log(this.data)
        }
    }
</script>