/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Axios from 'axios'
import { BTable } from "bootstrap-vue";
import { BButton } from "bootstrap-vue";
import { BCard } from 'bootstrap-vue'
import { BCardText } from 'bootstrap-vue'

window.Vue = require('vue').default;
Vue.prototype.$http = Axios
Vue.component("b-button", BButton);
Vue.component("b-table", BTable);
Vue.component('b-card', BCard)
Vue.component('b-card-text', BCard)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('recipes-index', require('./views/recipes/index.vue').default);
Vue.component('ingredients-index', require('./views/ingredients/index.vue').default);
Vue.component('orders-recipes', require('./views/orders/recipes.vue').default);
Vue.component('orders-ingredients', require('./views/orders/ingredients.vue').default);
Vue.component('home-index', require('./views/home/index.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
