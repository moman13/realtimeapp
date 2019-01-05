import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/Login';
import Signup from '../components/signup';
import Forum from '../components/forum';

import Logout from '../components/logout';

import Read from '../components/read';

import Create from '../components/create';

const routes = [
  { path: '/login', component: Login },
  { path: '/signup', component: Signup },
  { path: '/forum', component: Forum ,name:'forum'},
  { path: '/ask', component: Create },

  { path: '/question/:slug', component: Read ,name:'read'},

  { path: '/logout', component: Logout}
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
  routes // short for `routes: routes`
})
export default router
