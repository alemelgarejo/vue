<template>

    <div>
        <div v-if="post">
            <div class="card mt-3">
                <div class="card-header">
                    <img v-bind:src=" 'images/' +post.image" class="card-img-top"  alt="Card image cap">
                </div>
                <div class="card-body">
                    <h1 class="card-title">{{post.title}}</h1>
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

            console.log('Hola mundo Vue '+this.$route.params.id);
        },
        methods: {
            getPost: function() {
            }
        },
        data: function () {
            return {
                postSelected:"",
                post: [
                    {
                        title:'Título 1000',
                        image:'1615397794.png',
                        content: 'Some quick example text to build on the card title and make up the bulk of the cards content.'
                    }
                ]
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
