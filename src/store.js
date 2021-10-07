import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VueAxios from "vue-axios";
import router from './router'
import createPersistedState from 'vuex-persistedstate'
Vue.use(Vuex)
Vue.use(VueAxios, axios);



export default new Vuex.Store({
  state: {
    
    barColor: '#272727',
    lang:'ar',
    role:'',
    idToken: localStorage.getItem('tokinn'),
    AdminInfo:{
        id:'',
        token:'',
        authe:false,
        name:'',
        email:'',
        photo:''

    }
 
  },
  plugins: [
    createPersistedState({     
    })
  ],
  mutations: {
  
    UpdateLang(state, UpdateLang) {
      state.lang= UpdateLang.lang
    },


    setRole(state,role) {
      state.role = role
     
    },

    clearAuth(state) {
        state.AdminInfo={
          id:'',
          token:'',
          authe:false,
          name:'',
          email:'',
          photo:''
        }
      } ,

    authUser(state, userData) {
        state.AdminInfo.id = userData.id
        state.AdminInfo.name = userData.name
        state.AdminInfo.authe=true
        state.AdminInfo.email = userData.email
        state.AdminInfo.photo = userData.photo
        state.AdminInfo.token = userData.token
  
      },
  
    
    
  },
  actions: {

    login({
        commit
      }, userData) {
  
        
        localStorage.setItem('tokinn', userData.token)
      
        commit('authUser', {
          token: userData.token,
          userId: userData.id,
          name: userData.name,
          policyNumber: userData.photp,
          userPhotoUrl: userData.email,

        });
      
        let authenticate = Promise.resolve({ role: "admin" });
        authenticate.then(user => { Vue.prototype.$user.set(user);})

        commit('setRole','admin');
        router.push("/admin")
    
      },

      logout({
        commit
      }) {
        commit('clearAuth')
        localStorage.clear();
        localStorage.setItem("darkMode", this.$vuetify.theme.dark);
        this.$i18n.locale = this.$i18n.locale == "ar" ? "ar" : "en";
        localStorage.setItem("lang", this.$i18n.locale);
        this.$vuetify.rtl = localStorage.getItem("lang") == "ar" ? true : false;
        axios.defaults.headers.get["Authorization"] = null;
  
      },


UpdateLang({
  commit
}, lang) {
  commit('UpdateLang', {
    lang:lang.lang,

  });

},
   

   
  }
})
