export default{
  methods: {
    addToBasket: function(id, title, imgCode, price){
      let basket;
      if(localStorage.getItem('basket')==null){
        basket = []
      }
      else {
        basket = JSON.parse(localStorage.getItem('basket'))
      }

      let object = basket.find(o => o.id == id)
      
      if(object){
        object.quantity += 1;
      }
      else{
        basket.push({id: id, title: title, imgCode: imgCode, price: price, quantity: 1})
      }
      localStorage.setItem('basket', JSON.stringify(basket))

    }
  }
}