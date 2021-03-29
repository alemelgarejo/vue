<template>
    <div>
        <div class="card mt-3" v-for='post in posts' v-bind:key="post.title">
            <img v-bind:src=" 'images/' + post.image" class="card-img-top"  alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{post.title}}</h5>
                <p class="card-text">{{post.content}}</p>
                <button class="btn btn-primary" v-on:click="postClick(post)">Ver resumen</button>
                <router-link class="btn btn-success" :to="{name: 'detail', params: {id: post.id}}">Detail</router-link>
            </div>
        </div>
        <modal-post  @closeModalPost="closeModalPost" :post="postSelected"></modal-post>
        <router-link to="/">Go to List</router-link>
    </div>

</template>
<script>
import PostListComponent from './PostListComponent.vue';
    export default {
  components: { PostListComponent },
        props: ['posts'],
        created(){
            this.getPost();
        },
        methods: {
            postClick: function(p) {
                this.postSelected = p;
                console.log('click'+p.title);
            },
            closeModalPost: function() {
                this.postSelected = "";
            },

        },
        data: function () {
            return {
                postSelected:""
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
