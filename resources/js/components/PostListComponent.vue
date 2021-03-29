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
    export default {
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
                postSelected:"",
                posts: [
                    {
                        id: '1',
                        title:'Título 10',
                        image:'1615397794.png',
                        content: 'Some quick example text to build on the card title and make up the bulk of the cards content.'
                    },
                    {
                        id: '2',
                        title:'Título 2',
                        image:'1615397794.png',
                        content: 'Some quick example text to build on the card title and make up the bulk of the cards content.'
                    },
                    {
                        id: '3',
                        title:'Título 3',
                        image:'1615397794.png',
                        content: 'Some quick example text to build on the card title and make up the bulk of the cards content.'
                    },
                    {
                        id: '4',
                        title:'Título 4',
                        image:'1615397794.png',
                        content: 'Some quick example text to build on the card title and make up the bulk of the cards content.'
                    },
                    {
                        id: '5',
                        title:'Título 5',
                        image:'1615397794.png',
                        content: 'Some quick example text to build on the card title and make up the bulk of the cards content.'
                    },
                ]
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
