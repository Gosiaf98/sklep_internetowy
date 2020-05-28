<!--
<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">
        Home
      </router-link> |
      <router-link to="/about">
        About
      </router-link>
    </div>
    <router-view />
  </div>
</template>
-->

<template>
  <div id="app">
    <b-navbar toggleable type="dark" variant="success">
      <b-navbar-brand class="font-weight-bold"  href="#" center>SklepInternetowy</b-navbar-brand>
      <b-button size="lg" variant="outline-light" class="mb-2">
        <b-icon icon="cart4"></b-icon>
      </b-button>
    </b-navbar>
    <router-view />
  </div>
</template>

<style lang="scss">
.navbar{
  padding: 3vh 20vw 3vh 20vw !important;
}

.navbar-brand{
  font-size: 2rem !important;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
