<template>
    <div class="w-100">
        <topblock/>
        <middleblock/>
        <bottomblock/>
    </div>
</template>

<script>
    import topblock from './homeblocks/Topblock'
    import middleblock from './homeblocks/Middleblock'
    import bottomblock from './homeblocks/Bottomblock'
    export default {
        mounted() {
            console.log('Home Component mounted.')
        },

        components: { 
            topblock,
            middleblock,
            bottomblock 
        }
    }
</script>
