<template>
  <div class="product-list">
    <Product name="Harry Potter i kamień filozoficzny" img="HP1" price="39.99"></Product>
    <Product name="Harry Potter i komnata tajemnic" img="HP2" price="39.99"></Product>
    <Product name="Harry Potter i więzień azkabanu" img="HP3" price="39.99"></Product>
    <Product name="Harry Potter i czara ognia" img="HP4" price="39.99"></Product>
  </div>
</template>

<style lang="scss">
  .product-list{
    margin: 3vh 20vw 0 20vw;
  }
</style>

<script>
import Product from '../components/Product.vue'

export default {
  name: 'ProductList',
  components:{
    Product
  }
}
</script>
