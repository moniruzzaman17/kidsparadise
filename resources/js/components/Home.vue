<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Kidsparadise Home Component</div>

                    <div class="card-body">
                        I'm an Kidsparadise Home component.
                        
                <router-link class="navbar-brand" :to="{name: 'home'}">Kidsparadise</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Home Component mounted.')
        }
    }
</script>
