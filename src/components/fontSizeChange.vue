<template>
<div v-if = "!isMobile" id = "font_change_wrap">
    <input type = "range" min = '18' max = '24' v-model="fontSize" class = 'slider' id = "font_change_slider" />
</div>
<!-- <div v-if="isMobile" id = "font-change-wrap-mobile">
    <input type = "range" min = '18' max = '24' v-model="fontSize" class = 'slider' id = "font-change-slider-mobile" />
</div> -->
</template>
<style>
    #font_change_wrap{
        width: 75px;
        height: 35px;
        position: fixed;
        z-index: 1;
        opacity: 0.55; 
        bottom: 5px;
        transition: 0.25s ease;
        left: 5px;
    }
    #font_change_wrap:hover, #font_change_wrap:focus-within, #font-change-wrap-mobile:hover, #font-change-wrap-mobile:focus-within{
        opacity: 100%;
        outline: none;
    }
    .slider {
    -webkit-appearance: none; 
    appearance: none;
    width: 100%;
    height: 25px; 
    background: var(--basic-dark-green-3); 
    outline: none; 
    -webkit-transition: .2s;
    transition: opacity .2s ease;
    }
    .slider::-webkit-slider-thumb {
    -webkit-appearance: none; 
    appearance: none;
    width: 7px; 
    height: 11px; 
    background: var(--basic-dark-green-2);
    cursor: pointer; 
    }

    .slider::-moz-range-thumb {
    width: 10px; 
    height: 10px;
    background: var(--basic-dark-green-2);
    cursor: pointer; 
    }
    .slider{
        width: 100%;
        height: 7px;
        top: 20px;
        display: block;
        position: relative;
        outline: none; 
        transition: opacity .2s;
    }
    #font_change_slider:after, #font-change-slider-mobile:after{
        content: 'A';
        font-size: 13px;
        color: grey;
        position: absolute;
        top: -21px;
        left: 4px;
    }
    #font_change_slider:before, #font-change-slider-mobile:before{
        content: 'A';
        font-size: 20px;
        color: grey;
        position: absolute;
        top: -27px;
        right: 1px;
    }
    @media (max-width: 990px){
        #font_change_wrap{
            display: none;
        }

    }

</style>
<script>

    export default{
        data() {
            return{
                fontSize: 18
            }
        },
        props: ['isMobile'],
        watch: {
            fontSize(value){
                document.documentElement.setAttribute('style','font-size: ' + value  +'px')
            }
        }

    }
</script>