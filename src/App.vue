<script setup>
import { onMounted } from 'vue';
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
import fontSizeChange from './components/fontSizeChange.vue'


</script>

<template>
  <Navbar />
  <RouterView/>
  <fontSizeChange/>
</template>

<style>
@import url('./assets/base.css');
@font-face {
  font-family: "Eczar";
  src: local("Eczar"),
  url(./fonts/Eczar/static/Eczar-Regular.ttf) format("truetype"), url(./fonts/Eczar/static/Eczar-ExtraBold.ttf) format("truetype");
}
</style>

<script>

export default {
  data () {
    return {
      // data
    }
  },
  created() {
    document.documentElement.setAttribute('lang', 'pl')
    // Root font-size
    // document.documentElement.setAttribute('style','font-size: 25px')
  }
    // Global variable call
    // mounted: function(){
    //   console.log(this.$hostname)
    // }
}

</script>
