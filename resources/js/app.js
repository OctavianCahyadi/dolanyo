/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';



import Vue from 'vue'
    import VueRouter from 'vue-router'
    import Homepage from './components/Homepage'
    import Read from './components/Read'

    Vue.use(VueRouter)

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/admin/dashboard',
                name: 'read',
                component: Read,
                props: true
            },
        ],
    });

    const app = new Vue({
        el: '#app',
        router,
        components: { Homepage },
    });