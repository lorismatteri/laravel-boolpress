<template>
    
    <div class="col-md-4">
        
        <h2>Categories</h2>
        
        <ul>
            <li v-for="category in categories" :key="category.id">{{category.name}}</li>
        </ul>
        
    </div>
    
</template>

<script>
    export default {
        data(){
            return {
                categories: "",
            } 
        },
        mounted() {
            axios.get('api/categories').then(response => {
                console.log(response.data.data);
                this.categories = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>

<style lang="scss" scoped>
    
</style>