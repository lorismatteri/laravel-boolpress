<template>
    
    
    <div class="col-md-8">
        <div class="card" v-for="article in articles" :key="article.id">
            <div class="card-header"><h2>{{article.title}}</h2></div>

            <div class="card-body">
                {{article.body}}
            </div>
            <div class="card-footer">
                <span>Created at: {{new Date(article.created_at).toLocaleString('it')}}</span>
            </div>
        </div>
    </div>
    
    
</template>

<script>
    export default {
        data(){
            return {
                articles: "",
            } 
        },
        mounted() {
            axios.get('api/articles').then(response => {
                console.log(response.data.data);
                this.articles = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card {
        margin: 1rem 0;
    }
</style>