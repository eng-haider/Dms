import Vue from 'vue'
import Router from "vue-router";
import store from './store'
Vue.use(Router)

import {
  USER_ROLE_GUEST,
  ADMIN_ROLE,


} from "constants";

USER_ROLE_GUEST
ADMIN_ROLE

const router = new Router({
   
    routes: [
      {
        path: '/auth',
        name:'auth',
        component: () => import('@/views/pages/Index'),
        children: [{
          name: 'Login',
          path: '',
          component: () => import('@/views/pages/Login')
        }]
      },
      {
        path: '/admin',
        component: () => import('@/views/dashboard/Index'),
        beforeEnter: (to, from, next) => {
          
          if (localStorage.getItem('tokinn') && store.state.AdminInfo.authe==true) {
            next()
          } else {
            next({
              name: 'Login'
            });
          }
        },   
        children: [
          {
            name: 'statistics',
            path: '',
            component: () => import('@/views/dashboard/Dashboard')
          },
        ]   
      },
    ]
    });
    
    
    
    
    router.beforeEach((to, from, next) => {
     
        window.document.title = to.name ;
   
      next();
    });
    
    export default router;

