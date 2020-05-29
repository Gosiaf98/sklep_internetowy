<template>
  <div class="basket" v-if="products">
    <BasketProduct v-for="product in products" @delete="deleteFromBasket" @quantityPlus="quantityPlus" @quantityMinus="quantityMinus" :key="product.id" :title="product.title" :img="product.imgCode" :price="product.price" :id="product.id" :quantity="product.quantity"></BasketProduct>
    <div class="text-right mt-3"><b>RAZEM:  </b>{{sum()}} zł</div>
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
  methods:{
    quantityPlus: function(id){
      let object = this.products.find(o => o.id == id)
      object.quantity += 1;
      localStorage.setItem('basket', JSON.stringify(this.products))
    },
    quantityMinus: function(id){
      let object = this.products.find(o => o.id == id)
      object.quantity -= 1;
      localStorage.setItem('basket', JSON.stringify(this.products))
    },
    sum: function(){
      var sum = 0;
      this.products.forEach(function(product){
        console.log(product)
        sum += (product.quantity * product.price)
      })
      return sum.toFixed(2)
    },
    deleteFromBasket: function(id){
      let object = this.products.findIndex(o => o.id == id)
      this.products.splice(object, 1);
      localStorage.setItem('basket', JSON.stringify(this.products))
      console.log(this.products)
    }
  },
  data:function (){
    return {
      products: []  
    }
  },
  created(){
    
    this.products = JSON.parse(localStorage.getItem('basket'));
    console.log(this.products)
  }
}
</script>
