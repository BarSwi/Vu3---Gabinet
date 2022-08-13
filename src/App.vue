<script setup>
import { onMounted } from 'vue';
import { RouterLink, RouterView } from 'vue-router'
import Navbar from './components/Navbar.vue'
import fontSizeChange from './components/fontSizeChange.vue'
import ScrollUpBtn from './components/scrollUpBtn.vue'


</script>

<template>
  <Navbar :scrollValue = 'windowScrollValue'/>
  <RouterView/>
  <fontSizeChange/>
  <ScrollUpBtn :scrollValue = 'windowScrollValue' />
</template>

<style>
@import url('./assets/base.css');
/* @font-face {
  font-family: "Eczar";
  src: local("Eczar"),
  url(./fonts/Eczar/static/Eczar-Regular.ttf) format("truetype"), url(./fonts/Eczar/static/Eczar-ExtraBold.ttf) format("truetype");
} */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;900&display=swap');

</style>

<script>

export default {
  data () {
    return {
      windowScrollValue: 0
    }
  },
  created() {
    document.documentElement.setAttribute('lang', 'pl')
    window.addEventListener('scroll', this.windowScroll)
  },
  destroyed(){
      window.removeEventListener('scroll', this.windowScroll)
  },

  methods: {
    windowScroll(){
      this.windowScrollValue = window.scrollY
    }
  }
    // Global variable call
    // mounted: function(){
    //   console.log(this.$hostname)
    // }
}

</script>
