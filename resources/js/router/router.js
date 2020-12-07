import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);

import Home from'../components/Home.vue';
import Login from'../components/auth/Login.vue';

const routes = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			component: Home,
			name: 'home',
		},
		{
			path: '/customer/login',
			component: Login,
			name: 'login',
		}
	]
});

export default routes;