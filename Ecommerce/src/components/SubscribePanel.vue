<template>
    <div class="w-[1400px] h-[470px] relative flex flex-col justify-center overflow-hidden rounded-[30px]">
        <img src="../assets/images/3389452 1.png" alt="bg-image" class="absolute -z-10 bg-yellow-500 bg-opacity-20">
        <img src="../assets/images/fresh-apples-shopping-mesh-bag-with-branch-apples-removebg 1.png" alt="bg-image" class="absolute top-0 right-0 z-[-1]">
        <div class="ml-[60px]">
            <p class="text-[72px] font-bold text-[#253D4E] w-[727px] leading-none">Don’t miss amazing grocery deals</p>
            <p class="text-[30px] font-normal text-[#7E7E7E] mt-[33px]">Sign up for the daily newslatter</p>
            <div class="mt-[68px] bg-white w-[442px] h-[50px] rounded-[30px] px-[22px] relative">
                <form action="" class="flex h-full w-full items-center">
                    <label for="email">
                        <Icon icon="ri:send-plane-fill" class="text-[24px]" />
                    </label>
                    <input type="email" id="email" class="h-full w-[60%] focus:outline-none px-2" placeholder="Your email address" v-model="email">
                    <button class="w-[149px] h-full bg-[#3BB77E] rounded-[30px] absolute right-0 top-0">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { Icon } from '@iconify/vue';

export default {
    name: 'subscribe_panel',
    components: { Icon },
    data() {
        return {
            email: ''
        }
    }
}
</script>