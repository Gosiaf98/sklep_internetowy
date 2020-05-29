<template>
  <div class="product">
    <img :src="require('../assets/'+ img +'.jpg')">
    <router-link class="link" :to="{name: 'Details', params:{productId: id}}">
      <div class="font-weight-bold h5">{{name}}</div>
    </router-link>
    <div>
      <div>{{price}}zł</div>
      <b-button size="sm" variant="outline-success" class="mb-2">
          Dodaj do koszyka
      </b-button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Product',
  props: {
    name: String,
    img: String,
    price: Number,
    id: Number
  }
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