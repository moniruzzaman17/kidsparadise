import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

import Home from'../components/Home.vue';
import Prelogin from'../components/auth/Prelogin.vue';
import Login from'../components/auth/Login.vue';
import Register from'../components/auth/Register.vue';
import Cart from'../components/cart/Cart.vue';
import CategoryPage from'../components/catalog/CategoryPage.vue';

const routes = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			component: Home,
			name: 'home',
		},
		{
			path: '/customer/pre-login',
			component: Prelogin,
			name: 'preLogin',
		},
		{
			path: '/customer/login',
			component: Login,
			name: 'login',
		},
		{
			path: '/customer/register',
			component: Register,
			name: 'register',
		},
		{
			path: '/cart',
			component: Cart,
			name: 'cart',
		},
		{
			path: '/category',
			component: CategoryPage,
			name: 'categorypage',
		}
	]
});

export default routes;