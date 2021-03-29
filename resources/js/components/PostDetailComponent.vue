<template>

    <div>
        <div v-if="post">
            <div class="card mt-3">
                <div class="card-header">
                    <img v-bind:src=" 'images/' + post.image.image" class="card-img-top"  alt="Card image cap">
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{post.title}}</h1>
                    <router-link class="btn btn-success" :to="{name: 'post-category', params: {category_id: post.category.id}}">{{post.category.title}}</router-link>
                    <br><br>
                    <p class="card-text">{{post.content}}</p>
                    <button class="btn btn-primary" v-on:click="postClick(post)">Ver resumen</button>
                </div>
            </div>
            <router-link to="/">Go to List</router-link>
        </div>
        <div v-else>
            <h1>Post no existe</h1>
        </div>
    </div>
</template>
<script>
    export default {
        created(){
            this.getPost();
            console.log('Hola mundo Vue '+this.$route.params.id);
        },
        methods: {
            getPost() {
                fetch('http://localhost/php/udemy1/public/api/post/'+this.$route.params.id)
                .then( response => response.json() )
                .then( json => (this.post = json.data) )
            }
        },
        data: function () {
            return {
                postSelected:"",
                post: []
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
