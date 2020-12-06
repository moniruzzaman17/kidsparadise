<template>
    <div class="w-100">
        <topblock/>
        <middleblock/>
    </div>
</template>

<script>
    import topblock from './homeblocks/Topblock'
    import middleblock from './homeblocks/Middleblock'
    export default {
        mounted() {
            console.log('Home Component mounted.')
        },

        components: { 
            topblock,
            middleblock 
        }
    }
</script>
