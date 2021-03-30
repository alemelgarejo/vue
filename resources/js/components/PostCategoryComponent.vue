<template>
    <div>
        <h1>{{category}}</h1>
        <post-list-default
            :posts="posts"
            :key="currentPage"
            @getCurrentPage="getCurrentPage"
            v-if="total > 0"
            :currentPage="currentPage"
            :total="total"
         ></post-list-default>
    </div>

</template>
<script>
    export default {
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
            getPost() {
                console.log('category: '+this.$route.params.category_id);
                fetch('http://localhost/php/udemy1/public/api/post/'+this.$route.params.category_id+'/category?page='+this.currentPage)
                .then( response => response.json() )
                .then( json =>{
                    this.posts = json.data.posts.data;
                    this.total = json.data.posts.last_page;
                    this.category = json.data.category.title;
                    })
            },
            getCurrentPage(val) {
                console.log('PostList + currentPage: '+val);
                this.currentPage = val;
                this.getPost();
            }
        },
        data: function () {
            return {
                postSelected:"",
                posts: [],
                total: 0,
                category: "",
                currentPage: 1,
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
