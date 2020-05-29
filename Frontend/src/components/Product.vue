<template>
  <div class="product">
    <img :src="require('../assets/'+ img +'.jpg')">
    <router-link class="link" :to="{name: 'Details', params:{productId: id}}">
      <div class="font-weight-bold h5">{{title}}</div>
    </router-link>
    <div>{{price}}zł</div>
    <b-button size="sm" variant="outline-success" class="mb-2" @click="addToBasket(id, title, img, price)">
        Dodaj do koszyka
    </b-button>
  </div>
</template>

<script>
import addToBasketMixin from '../components/mixin.js'

export default {
  name: 'Product',
  props: {
    title: String,
    img: String,
    price: Number,
    id: Number
  },
  mixins: [addToBasketMixin]
}
</script>

<style scoped lang="scss">
  .product{
    height: 45vh;
    width: 33.3%;
    padding: 20px 5px 0 5px;
    float: left;
  }

  img{
    height: 25vh;
    margin-bottom: 10px;
  }

 .link{
   color: black;
 }


</style>