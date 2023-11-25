<template>
    <div>
        ProductView
    </div>
</template>

<script>
    export default {
        name: "ProductView",
        inject: ['data'],
        mounted() {
            console.log(this.data)
        }
    }
</script>

<style scoped>

</style>