/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Ways from './components/Ways'
import AddWay from './components/AddWay'

Vue.component('addway', AddWay);

Vue.component('ways', Ways);

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'ways',
      component: Ways
    },
    {
      path: '/ways',
      name: 'ways.index',
      component: Ways
    },
    {
      path: '/addWays',
      name: 'addWay',
      component: AddWay,
    },
  ],
});
var app = new Vue({
  el: '#app',
  data(){
    return{
      ways: null,
    }
  },
  created(){
    this.GetWays();
  },
  update(){
    this.GetWays();
  },
  mounted () {
    this.GetWays();
  },
  methods: {
    GetWays() {
      axios
        .get('/ways')
        .then(response => {
            this.ways = response.data;
        }).catch(error => {
            console.log("Винекла помилка: "+error.response.data.message+"; "+error.message)
        });
    },
    updateWays: function(newWay){
      //GetWays();
      console.log(newWay)
      this.ways.unshift(newWay)
    }
  },
  components: {Ways, AddWay},
});
