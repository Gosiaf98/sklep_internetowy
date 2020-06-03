<template>
  <div class="basket" v-if="products.length != 0">
    <BasketProduct v-for="product in products" @delete="deleteFromBasket" @quantityPlus="quantityPlus" @quantityMinus="quantityMinus" :key="product.id" :title="product.title" :img="product.imgCode" :price="product.price" :id="product.id" :quantity="product.quantity"></BasketProduct>
    <div class="text-right mt-3"><b>RAZEM:  </b>{{sum()}} zł</div>
    <button type="submit" @click="pay" class="mt-3" style="border: 0px; height: 50px; width: 313px; background: url('http://static.payu.com/pl/standard/partners/buttons/payu_account_button_long_03.png') no-repeat; cursor: pointer;"></button>
  </div>
  <div v-else class="mt-5 text-secondary">Brak produktów w koszyku</div>
</template>

<style lang="scss">
  .basket{
    margin: 3vh 20vw 0 20vw;
  }
</style>

<script>
import BasketProduct from '../components/BasketProduct.vue'
import axios from 'axios';

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
        sum += (product.quantity * product.price)
      })
      return sum.toFixed(2)
    },
    deleteFromBasket: function(id){
      let object = this.products.findIndex(o => o.id == id)
      this.products.splice(object, 1);
      localStorage.setItem('basket', JSON.stringify(this.products))
    },
    pay: function(){
      let vm = this
      axios
        .post('http://localhost:8001/api/pay', {
            "sumPrice": (this.sum() * 100).toString(),
            "products": this.products
          
        })
        .then(function(response){
        //vm.products = response.data['hydra:member'];
        window.location.href = response.data['redirectUri']
      })
    }
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
