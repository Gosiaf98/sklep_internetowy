<template>
  <div class="basket">
    <BasketProduct v-for="product in products" :key="product.id" :title="product.title" :img="product.imgCode" :price="product.price" :id="product.id" :quantity="product.quantity"></BasketProduct>
  </div>
</template>

<style lang="scss">
  .basket{
    margin: 3vh 20vw 0 20vw;
  }
</style>

<script>
import BasketProduct from '../components/BasketProduct.vue'

export default {
  name: 'Basket',
  components:{
    BasketProduct
  },
  data:function (){
    return {
      products: []  
    }
  },
  created(){
    this.products = JSON.parse(localStorage.getItem('basket'));
  }
}
</script>
