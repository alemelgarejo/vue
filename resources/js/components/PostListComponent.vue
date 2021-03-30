<template>
    <div>
        <post-list-default
            :key="currentPage"
            @getCurrentPage="getCurrentPage"
            v-if="total > 0"
            :posts="posts"
            :currentPage="currentPage"
            :total="total">
        </post-list-default>
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
                fetch('http://localhost/php/udemy1/public/api/post?page='+this.currentPage)
                .then( response => response.json() )
                .then( json =>{
                    this.posts = json.data.data;
                    this.total = json.data.last_page;
                    console.log('created '+this.total);
                });

               /* fetch('http://localhost/php/udemy1/public/api/category')
                .then(function(response) {
                    return response.json();
                })
                .then(function(json) {
                    console.log(json.data.data[0].title);
                })*/
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
                currentPage: 1,
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
