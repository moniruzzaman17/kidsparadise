<template>
    <div class="w-100">
        <topblock/>
    </div>
</template>

<script>
    import topblock from './homeblocks/Topblock'
    export default {
        mounted() {
            console.log('Home Component mounted.')
        },

        components: { topblock }
    }
</script>
