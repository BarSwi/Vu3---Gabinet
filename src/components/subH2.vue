<template>
    <h2>
        {{message}}
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
    background-image: linear-gradient(to left, var(--basic-dark-green), var(--basic-light-green));
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
    position: relative;
    font-size: 2.3rem;
}
</style>
<script>
    export default{
        props: {
            message: String
        }
    }
</script>
