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
    metaInfo: {
      title: 'Kidsparadise',
      titleTemplate: '%s - Home',
      htmlAttrs: {
        lang: 'en',
        amp: true
      },
        meta: [
          { name: 'keywords', content: 'kidsparadise, baby products, baby products online, baby products india, online shopping for kids, kids online shopping, baby online shopping, baby care products' }
        ]
    },
    data(){
        return {
            // userId: ''
        }
    },
    mounted() {
        console.log('Home Component mounted.')
        // this.userId = this.$route.query.mn
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
