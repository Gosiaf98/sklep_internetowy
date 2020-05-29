<template>
  <div class="basket-product">
    <img :src="require('../assets/'+ img +'.jpg')" class="float-left mr-4">
    <router-link class="link" :to="{name: 'Details', params:{productId: id}}">
      <div class="font-weight-bold h5 float-left title mt-5">{{title}}</div>
    </router-link>
    <div class="float-left mt-5 quantity">
      <b-icon v-if="quantity>1" icon="dash" class="icon float-left" font-scale="2" @click="$emit('quantityMinus', id)"></b-icon>
      <div class="btn btn-secondary float-left">{{quantity}}</div>
      <b-icon icon="plus" class="icon" font-scale="2" @click="$emit('quantityPlus', id)"></b-icon>
      <b-icon icon="trash" class="icon ml-3" font-scale="2" @click="$emit('delete', id)"></b-icon>
    </div>
    <div class="text-right mt-5">{{(quantity * price).toFixed(2)}} zł</div>
  </div>
</template>

<style scoped lang="scss">
  .basket-product{
    height: 20vh;
    width: 100%;
    padding: 2vh 0 2vh 0;
    border-bottom: solid 1px lightgrey;
  }

  img{
    height: 16vh;
  }

  .title{
    color: black;
  }

  .title:hover{
    text-decoration: black underline;
  }

  .icon:hover{
    cursor: pointer;
  }

  .quantity{
    position: absolute;
    right: 30vw;
  }
    
</style>

<script>
export default {
  name: 'BaksetProduct',
  props: {
    title: String,
    img: String,
    price: Number,
    id: Number,
    quantity: Number
  }
}
</script>