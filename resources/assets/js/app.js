
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

//import 'bootstrap/dist/css/bootstrap.css'
//import 'bootstrap-vue/dist/bootstrap-vue.css'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('user-notification', require('./components/UserNotifications.vue'));
Vue.component('user-notification-list', require('./components/UserNotificationlist.vue'));
Vue.component('user-list-table', require('./components/UserListTable.vue'));
Vue.component('user-list-row', require('./components/UserListRow.vue'));
Vue.component('movie-list-table', require('./components/MovieListTable.vue'));
Vue.component('movie-list-row', require('./components/MovieListRow.vue'));
Vue.component('add-movie', require('./components/AddMovie.vue'));


const app = new Vue({
    el: '#app'
});
