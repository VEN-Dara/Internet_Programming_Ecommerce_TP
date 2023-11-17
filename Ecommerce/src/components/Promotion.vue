<template>
    <div class="promotion" :style="{backgroundColor: color}">
        <img :src=image alt="logo">
        <div>
            <p>{{ title }}</p>
            <button>
                Shop Now
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="fi-rs-arrow-small-right 1" clip-path="url(#clip0_1460_147)">
                <g id="01 align center">
                <path id="Vector" d="M10.345 4.32164L6.7675 0.744141L5.58917 1.92247L8.33333 4.66664H0V6.33331H8.33333L5.58917 9.07747L6.7675 10.2558L10.345 6.67831C10.6575 6.36576 10.833 5.94191 10.833 5.49997C10.833 5.05803 10.6575 4.63419 10.345 4.32164Z" fill="white"/>
                </g>
                </g>
                <defs>
                <clipPath id="clip0_1460_147">
                <rect width="10.8333" height="10" fill="white" transform="translate(0 0.5)"/>
                </clipPath>
                </defs>
                </svg>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Promotion',
        props: ['title', 'color', 'image']
    }

</script>

<style scoped>
.promotion {
    z-index: -1;
    width: 512px;
    height: 300px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    border-radius: 10px;
    overflow: hidden;
}

.promotion div {
    margin-left: 54px;
}

.promotion p {
    width: 271px;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
}

.promotion button {
    background-color: #3BB77E;
    padding: 8px 15px;
    display: flex;
    gap: 10px;
    color: white;
    font-weight: 700;
    border: none;
    border-radius: 3px;
}

.promotion img {
    z-index: -1;
    position: absolute;
    bottom: 0;
    right: 0;
}
</style>