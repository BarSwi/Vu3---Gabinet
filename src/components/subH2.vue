<template>
    <h2>
        <slot></slot>
    </h2>
</template>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap');
h2{
    font-family: 'Lobster Two', sans-serif;
    text-align:center;
    display: block;
    margin: 20px auto 20px auto;
    padding: 30px;
    /* background-image: linear-gradient(to left, var(--basic-dark-green), var(--basic-light-green)); */
    background-image:  linear-gradient(to left, var(--basic-dark-green-2), var(--basic-dark-green));
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    position: relative;
    font-size: 3rem;
}
  @media (max-width: 500px){
    h2{
      font-size: 45px;
    }
  }
</style>
<script>
    export default{
        name:   'subH2',
    }
</script>
