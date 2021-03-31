<template>
    <div class="row">
        <div class="col-md-3" v-for='category in categories' v-bind:key="category.id">
            <div class="card mt-3">
                <router-link :to="{name: 'post-category', params: {category_id: category.id}}">
                    <img v-bind:src="'images/skull.png'" class="card-img-top mt-3"  alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{category.title}}</h5>
                        <!-- <p class="card-text">{{category.content}}</p> -->
                    </div>
                </router-link>
            </div>
        </div>
        <router-link to="/">Go to List</router-link>
    </div>

</template>
<script>
    export default {
        created() {
            this.getCategories();
        },
        methods: {
            getCategories() {
                fetch('http://localhost/php/udemy1/public/api/category/all')
                .then( response => response.json() )
                .then( json => {
                    this.categories = json.data;
                })
            },

        },
        data: function () {
            return {
                categories: '',
            }
        },
    }
</script>
<!--@closeModalPost="closeModalPost"-->
