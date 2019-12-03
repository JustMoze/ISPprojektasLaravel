/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

for (var i = 0; i < document.querySelectorAll(".checked").length; i++) {

  document.querySelectorAll(".checked")[i].addEventListener("click", function() {
  var item = this.id;
  var count  = this.id[0];
  var subid = item.substring(1);
  for (var i = 0;i<5; i++){
    if(i<count){

      document.getElementById((i+1)+subid).style.color = "#ed6663";
    }
    else{
      document.getElementById((i+1)+subid).style.color = "black";
    }
  }
  document.querySelector("#rating").value = count;
});
}

for (var i = 0; i < document.querySelectorAll(".ivetinta").length; i++){
  if(i < rank){

    document.getElementById((i+1)+"one").style.color = "#ed6663";
  }
  else{
    document.getElementById((i+1)+"one").style.color = "black";
  }
}
