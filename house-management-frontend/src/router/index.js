import Vue from 'vue'
import Router from 'vue-router'
import Welcome from '@/components/Welcome'
import Category from '../components/Category.vue'
import HouseMain from '../components/house/house-main.vue'
import ContractMain from '../components/contract/contract-main.vue'
import UserMain from '../components/user/user-main.vue'
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
    path: '/HouseMain',
    name: 'HouseMain',
    component: HouseMain
  }, {
    path: '/ContractMain',
    name: 'ContractMain',
    component: ContractMain
  }, {
    path: '/UserMain',
    name: 'UserMain',
    component: UserMain
  }, {
    path: '/*',
    redirect: '/'
  }]
})
