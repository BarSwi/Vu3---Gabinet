<template>
    <h2>
    <span id = 'h2-text' :class = "{'font-change': fontChange}">
      <slot></slot>
    </span>

    </h2>
</template>
<style>
@import url('https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap');
h2{
    font-family: 'Lobster Two', sans-serif;

    text-align:center;
    display: block;
    -webkit-user-select: none;
    min-width:280px;
    user-select: none;
    margin: 50px 0 50px 0;
    color: transparent;
    padding: 20px 0 20px 0;
    background-color: rgba(38, 146, 28, 0.1);
    width: 100%;
    position: relative;
    font-size: 3rem;
}
.font-change{
    font-family: 'Roboto', sans-serif !important;
}
#h2-text{
    background-image:  linear-gradient(to left, var(--basic-dark-green-2), var(--basic-dark-green));
    background-clip: text;
    display: block;
    -webkit-background-clip: text;
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
        props: ['fontChange']
    }
</script>
