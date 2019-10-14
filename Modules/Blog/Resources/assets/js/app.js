window.Vue = require('vue');

// подключаем Bootstarp
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'
// import BootstrapVue from 'bootstrap-vue'
// Vue.use(BootstrapVue);


window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
// window.axios.defaults.headers.common = {
//     'X-Requested-With': 'XMLHttpRequest',
//     'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
// };
/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

// Стили DevExtreme
import 'devextreme/dist/css/dx.common.css';
import 'devextreme/dist/css/dx.material.orange.dark.css';



// подключаем файл для использования метода Route
// см  ссылку https://medium.com/@sargilla/laravel-named-routes-in-vue-js-components-7b03e96bede8

// Мои компоненты
// Vue.component('migrations-component', require('./components/MigrationsComponent.vue').default);
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('blog-menu', require('./components/BlogMenu.vue').default);
Vue.component('blog-tool-bar', require('./components/BlogToolBar').default);



const app = new Vue({
    el: '#app',
});
