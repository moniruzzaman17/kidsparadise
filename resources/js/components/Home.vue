<template>
    <div class="w-100">
        <appHeader/>
        <slider/>
        <topblock/>
        <middleblock/>
        <bottomblock/>
    </div>
</template>

<script>
import appHeader from './includes/Header.vue'

import slider from './slider/Slider.vue'
import topblock from './homeblocks/Topblock'
import middleblock from './homeblocks/Middleblock'
import bottomblock from './homeblocks/Bottomblock'
export default {
    mounted() {
        console.log('Home Component mounted.')
    },

    components: { 
        appHeader,
        slider,
        topblock,
        middleblock,
        bottomblock 
    }
}
</script>
