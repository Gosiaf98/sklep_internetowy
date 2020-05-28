<template>
  <div class="asket-product">
    <img :src="require('../assets/'+ img +'.jpg')">
    <div class="font-weight-bold h5">{{name}}</div>
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
  name: 'BaksetProduct',
  props: {
    name: String,
    img: String,
    price: Number
  }
}
</script>

<style scoped lang="scss">
  .product{
    height: 45vh;
    width: 33.3%;
    padding: 20px 5px 0 5px;
    display: inline-block;
    float: left;
  }

  img{
    height: 25vh;
    margin-bottom: 10px;
  }
    
</style>