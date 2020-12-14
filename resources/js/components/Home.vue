<template>
    <div class="w-100">
        <appHeader/>
        <slider/>
        <topblock/>
        <middleblock/>
        <bottomblock/>
        <appFooter/>
    </div>
</template>

<script>
import appHeader from './includes/Header'

import slider from './slider/Slider'
import topblock from './homeblocks/Topblock'
import middleblock from './homeblocks/Middleblock'
import bottomblock from './homeblocks/Bottomblock'

import appFooter from './includes/Footer'
export default {
    mounted() {
        console.log('Home Component mounted.')
    },

    components: { 
        appHeader,
        slider,
        topblock,
        middleblock,
        bottomblock,
        appFooter
    }
}
</script>
