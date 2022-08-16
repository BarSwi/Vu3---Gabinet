<template>
<div id = "scroll-wrap" :class = "showBtn ? 'shown' : 'hiden'">
    <button @click = 'scrollToTop' id = "scrollUp" aria-label = 'Scroll to the top'>
        <fa icon = 'angle-up' size = '2x' color = 'white'> </fa>
    </button>
</div>
</template>
<style>
#scroll-wrap{
    position: fixed;
    opacity: 60%;
    z-index: 1;
    bottom: 10px;
    transition: transform .2s ease, opacity .2s ease;
    right: 15px;
}
#scroll-wrap button{
    transition: .2s ease;
    background-color: grey;
    border: 1px solid rgb(131, 132, 139);
    padding: 5px;
    border-radius: 10px;
}
#scroll-wrap:hover, #scroll-wrap:active, #scroll-wrap:focus-within{
    opacity: 1;
    outline: none;
}
#scroll-wrap:hover button, #scroll-wrap button:focus, #scroll-wrap:active button{
    -webkit-box-shadow: 0px 0px 3px 0px rgba(66, 68, 90, 1);
    -moz-box-shadow: 0px 0px 3px 0px rgba(66, 68, 90, 1);
    box-shadow: 0px 0px 3px 0px rgba(66, 68, 90, 1);
    outline: none;
    cursor: pointer;
}
</style>
<script>
export default {
    data(){
        return{
            showBtn: false
        }
    },
    props: ['scrollValue'],
    methods: {
        scrollToTop(e){
            window.scrollTo({top: 0, behavior: 'smooth'});
            e.currentTarget.blur();
        }
    },
    watch: {
        scrollValue(value){
            if(value > 65){
                this.showBtn = true
            }
            else if(value <= 65){
                this.showBtn = false
            }
        }
    }
}
</script>