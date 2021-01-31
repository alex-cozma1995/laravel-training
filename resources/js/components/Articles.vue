<template>
    <div>
        <div class="text-xl">Articles</div>
        <form @submit.prevent="addArticle">
            <div>
                <input type="text" class="border-black bg-gray-300 border-opacity-100 w-full my-2" v-model="article.title" />
            </div>
            <div>
                <textarea class="w-full my-2 bg-gray-300" v-model="article.body"></textarea>
            </div>
            <button type="submit" class="button bg-blue-500 text-white rounded-lg my-2 mx-2 px-2 py-2">Save</button>
        </form>
        <div v-for="article in articles" v-bind:id="article.id" :key="article.id" class="mt-5 px-2">
            <div class="text-lg">{{ article.title }}</div>
            <div>{{ article.body }}</div>
            <div class="flex">
                <button class="bg-green-500 text-sm text-white px-2 py-1 rounded-lg hover:bg-green-400" @click="editArticle(article)">Edit</button>
                <button class="bg-red-500 text-sm ml-2 text-white px-2 py-1 rounded-lg hover:bg-red-400" @click="deleteArticle(article.id)">Delete</button>
            </div>
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
            },
        
            addArticle(){
                if(this.edit === false){
                    fetch('api/article', {
                        method: 'post',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    }).then(res => res.json())
                    .then(data =>{
                        this.article.title = '';
                        this.article.body = '';
                        alert('Article succesfully added!');
                        this.fetchArticles();
                    });
                }
                else {
                    fetch('api/article/' + this.article.article_id, {
                        method: 'put',
                        body: JSON.stringify(this.article),
                        headers: {
                            'content-type': 'application/json'
                        }
                    }).then(res => res.json())
                    .then(data =>{
                        this.article.title = '';
                        this.article.body = '';
                        alert('Article succesfully updated!');
                        this.fetchArticles();
                    })
                    .catch()
                }
            },

            editArticle(article){
                this.edit = true;
                this.article.id = article.id;
                this.article.article_id = article.id;
                this.article.title = article.title;
                this.article.body = article.body;
            }
        }
    };
</script>
