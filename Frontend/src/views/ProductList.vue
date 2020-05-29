<template>
  <div class="product-list">
    <Product v-for="product in products" :key="product.id" :name="product.title" :img="product.imgCode" :price="product.price" :id="product.id"></Product>
  </div>
</template>

<style lang="scss">
  .product-list{
    margin: 3vh 20vw 0 20vw;
  }
</style>

<script>
import Product from '../components/Product.vue'
import axios from 'axios';

export default {
  name: 'ProductList',
  components:{
    Product
  },
  data:function (){
    return {
      products: []  
    }
  },
  created(){
    let vm = this;
    axios
      .get('http://localhost:8001/api/products')
      .then(function(response){
        vm.products = response.data['hydra:member'];
      })

  }
}
</script>
