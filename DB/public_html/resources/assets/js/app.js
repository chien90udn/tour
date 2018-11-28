
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('slide-box-for-options', require('./components/SlideBoxForOptions.vue'));

let randomString = (length) => {
    let arr = new Uint8Array((length || 40) / 2);
    window.crypto.getRandomValues(arr);
    return Array.from(arr, (dec) => (('0' + dec.toString(16)).substr(-2))).join('');
};

Vue.prototype.randomString = randomString;


const app = new Vue({
    el: '#app'
});
