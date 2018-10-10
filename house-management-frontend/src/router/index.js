import Vue from 'vue'
import Router from 'vue-router'
import Welcome from '@/components/Welcome'
import Category from '../components/Category.vue'

Vue.use(Router)

export default new Router({
  routes: [{
    path: '/',
    name: 'Welcome',
    component: Welcome
  }, {
    path: '/Category',
    name: 'Category',
    component: Category
  }, {
    path: '/*',
    redirect: '/'
  }]
})
