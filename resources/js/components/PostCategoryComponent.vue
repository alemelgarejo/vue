<template>
    <div>
        <h1>{{category}}</h1>
        <post-list-default :posts="posts"></post-list-default>
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
                fetch('http://localhost/php/udemy1/public/api/post/'+this.$route.params.category_id+'/category')
                .then( response => response.json() )
                .then( json =>{
                    (this.posts = json.data.posts.data)
                    (this.category = json.data.category.title)
                    })
            }
        },
        data: function () {
            return {
                postSelected:"",
                posts: []
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
