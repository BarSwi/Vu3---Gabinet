<template>
<div id = "font_change_wrap">
    <input type = "range" @input="changeFontSize(fontSize)" min = '18' max = '24' v-model="fontSize" class = 'slider' id = "font_change_slider" />
</div>
</template>
<style>
    #font_change_wrap{
        width: 85px;
        padding: 5px;
        height: 35px;
        /* background-color: white; */
        opacity: 40%;
        position: fixed;
        bottom: 5px;
        transition: 0.25s ease;
        left: 5px;
    }
    #font_change_wrap:hover, #font_change_wrap:focus-within{
        opacity: 100%;
        outline: none;
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
    #font_change_slider:after{
        content: 'A';
        font-size: 13px;
        position: absolute;
        top: -21px;
        left: 4px;
    }
    #font_change_slider:before{
        content: 'A';
        font-size: 20px;
        position: absolute;
        top: -27px;
        right: 1px;
    }

</style>
<script>
import { createDOMCompilerError } from '@vue/compiler-dom'
import { onMounted } from 'vue'

    export default{
        data() {
            return{
                fontSize: 18
            }
        },
        methods: {
            changeFontSize(fontSize){
                document.documentElement.setAttribute('style','font-size: ' + fontSize +'px')
            }
        }

    }
</script>