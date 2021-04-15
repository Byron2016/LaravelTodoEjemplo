require('./bootstrap');

// // require vue
// window.Vue = require('vue');
// // front
// Vue.component('front-page', require('./components/Front.vue').default);
// // id app
// const app = new Vue({
//   el: '#app',
// });

// window.Vue = require('vue');

// Vue.component('front-page', require('./components/Front.vue').default);

// const app = new Vue({
//     el: '#app',
// });

window.Vue = require('vue');

Vue.component('front-page', require('./components/Front.vue').default);

const app = new Vue({
  el: '#app',
});

