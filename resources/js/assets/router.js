window.Vue = require('vue').default;
import VueRouter from 'vue-router';
import PostList from '../components/PostListComponent.vue';
import PostDetail from '../components/PostDetailComponent.vue';
import PostCategory from '../components/PostCategoryComponent.vue';

const Foo = { template: '<div>foo<router-link to="/foo">Go to Foo</router-link> <router-link to="/bar">Go to Bar</router-link><router-link to="/">Go to List</router-link></div>' }
const Bar = { template: '<div>bar<router-link to="/foo">Go to Foo</router-link> <router-link to="/bar">Go to Bar</router-link><router-link to="/">Go to List</router-link></div>' }

Vue.use(VueRouter);

export default new VueRouter({
    routes : [{ path: '/', component: PostList, name: 'list' }, { path: '/detail/:id', component: PostDetail, name: 'detail' }, { path: '/post-category/:category_id', component: PostCategory, name: 'post-category' }]
});
