<template>
    <div class='h1 mt-5 text-secondary'>Dziękujemy za zakupy!</div>
</template>

<script>
    export default {
    name: 'Thanks',
    created(){
        let basket = []
        localStorage.setItem('basket', JSON.stringify(basket))
    }
    }
</script>