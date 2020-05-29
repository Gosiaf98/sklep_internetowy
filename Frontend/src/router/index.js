import Vue from 'vue'
import VueRouter from 'vue-router'
import ProductList from '../views/ProductList.vue'
import Basket from '../views/Basket.vue'
import ProductDetails from '../views/ProductDetails.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'ProductList',
    component: ProductList
  },
  {
    path: '/basket',
    name: 'Basket',
    component: Basket
  },
  {
    path: '/details/:productId',
    name: 'Details',
    component: ProductDetails
  }

]

const router = new VueRouter({
  routes
})

export default router
