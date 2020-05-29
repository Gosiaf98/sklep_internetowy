<template>
    <div class="details" v-if="product.title">
        <img :src="require('../assets/'+ product.imgCode +'.jpg')" class="pic">
        <div class="h3 font-weight-bold">{{product.title}}</div>
        <div class="font-italic mb-2">{{product.author}}</div>
        <div class="font-weight-bold mb-1">{{product.price}}zł</div>
        <b-button size="sm" variant="outline-success" class=" mb-4" @click="addToBasket(product.id, product.title, product.imgCode, product.price)">
          Dodaj do koszyka
        </b-button>
        <div><b>Liczba stron:</b> {{product.pagesNum}}</div>
        <div v-if=product.softCover><b>Okładka:</b> miękka</div>
        <div v-else><b>Okładka:</b> twarda</div>
        <div class="mb-5"><b>Opis:</b> {{product.description}}</div>
    </div>
</template>

<style lang="scss">
  .details{
    margin: 10vh 25vw 0 25vw;
    text-align: left;
  }
  
  .pic{
    height: 60vh;
    float: left;
    margin-right: 50px;
    margin-bottom: 20px;
  }
</style>

<script>
import axios from 'axios';
import addToBasketMixin from '../components/mixin.js'

export default {
  name: 'ProductDetails',
  data:function (){
    return {
      product: {}  
    }
  },
  created(){
    let vm = this;
    axios
      .get('http://localhost:8001/api/products/' + vm.$route.params.productId)
      .then(function(response){
        vm.product = response.data;
      })

  },
  mixins: [addToBasketMixin]
}
</script>