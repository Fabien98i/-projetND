const { reduce } = require("core-js/fn/array")

import Vue from 'vue'

var app2 = new Vue (
    {
        el: '#app-2',
         data: {
            mymessage: 'You loaded this page on ' + new Date().toLocaleString()
         }
    }
)

var app3 = new Vue({
    el: '#app-3',
    data: {
      seen: true
    }
  })

var aff = new Vue (
    {
        el:'#affichage',
        data () {
            return {
                message: 'Bienvenue sur ma page',
            };
        }
    }
)
var recup = new Vue (
    {
        el: '#recup',
        data(){
            return 
        }
    }
)
//On affiche le message avec un alerte
