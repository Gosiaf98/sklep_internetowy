<template>
    <div class="details">
        <img src="../assets/HP1.jpg" class="pic">
        <div class="h3 font-weight-bold">Harry Potter i kamień filozoficzny</div>
        <div class="font-italic mb-2">J.K. Rowling</div>
        <div class="font-weight-bold mb-4">29.99zł</div>
        <div><b>Liczba stron:</b> 328</div>
        <div><b>Okładka:</b> miękka</div>
        <div class="mb-5"><b>Opis:</b> Harry Potter, sierota i podrzutek, od niemowlęcia wychowywany był przez ciotkę i wuja, którzy traktowali go jak piąte koło u wozu. Pochodzenie chłopca owiane jest tajemnicą; jedyną pamiątką Harry`ego z przeszłości jest zagadkowa blizna na czole. Skąd jednak biorą się niesamowite zjawiska, które towarzyszą nieświadomemu niczego Potterowi? Wszystko zmienia się w dniu jedenastych urodzin chłopca, kiedy dowiaduje się o istnieniu świata, o którym nie miał dotąd pojęcia.</div>
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
export default {
  name: 'ProductDetails',
}
</script>