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
        <v-pagination class="mt-3"
                v-model="currentPage"
                :page-count="total"
                :classes="bootstrapPaginationClasses"
                :labels="paginationAnchorTexts">

        </v-pagination>
        <router-link to="/">Go to List</router-link>
    </div>

</template>
<script>
import PostListComponent from './PostListComponent.vue';
import vPagination from 'vue-plain-pagination';
    export default {
        components: { PostListComponent },
        props: ['posts', 'total', 'currentPage'],
        methods: {
            created() {
            },
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
                //currentPage: 1,
                bootstrapPaginationClasses: {
                    ul: 'pagination',
                    li: 'page-item',
                    liActive: 'active',
                    liDisable: 'disabled',
                    button: 'page-link'
                },
                paginationAnchorTexts: {
                    first: '',
                    prev: '&laquo;',
                    next: '&raquo;',
                    last: ''
                }
            }
        },
        components: { vPagination },
        watch: {
            currentPage: function (newVal, oldVal) {
                console.log(newVal);
                this.$emit('getCurrentPage', newVal);
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
