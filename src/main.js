import Vue from 'vue'

import App from './App.vue'
import router from './router'
import 'vuetify/dist/vuetify.min.css';
import vuetify from './plugins/vuetify'
import i18n from './i18n';
import '@mdi/font/css/materialdesignicons.css' 
import store from './store'
import axios from './axios'
import VueRouterUserRoles from "vue-router-user-roles";
Vue.use(VueRouterUserRoles, {
  router
});


let authenticate = Promise.resolve({ role:store.state.role });
 
authenticate.then(user => {
  Vue.prototype.$user.set(user);


  new Vue({
    router,
    render: h => h(App),
    vuetify,
    i18n,
    axios,
    store
  }).$mount('#app')
  


})


;
