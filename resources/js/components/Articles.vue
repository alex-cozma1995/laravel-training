<template>
    <div>
        <div class="text-xl">Articles</div>
        <div v-for="article in articles" v-bind:id="article.id" class="mt-5 px-2">
            <div class="text-lg">{{ article.title }}</div>
            <div>{{ article.body }}</div>
            <button class="bg-red-500 text-sm text-white px-2 py-1 rounded-lg hover:bg-red-400" @click="deleteArticle(article.id)">Delete</button>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                articles: [],
                article: {
                    id: '',
                    title: '',
                    body: ''
                },
                article_id: '',
                pagination: {},
                edit: false
            }
        },
        created(){
            this.fetchArticles();
        },
        methods: {
            fetchArticles(){
                let vm = this;
                fetch('api/articles')
                    .then(res => res.json())
                    .then(res => {
                        this.articles = res.data;
                    })
                    .catch(err => console.log(err))
            },

            deleteArticle(id){
                if(confirm('Are you sure?')){
                    fetch(`api/article/${id}`, {
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(data => {
                        alert('Article removed');
                        this.fetchArticles();
                    })
                    .catch(err => console.log(err))
                }
            }
        }
    };
</script>
