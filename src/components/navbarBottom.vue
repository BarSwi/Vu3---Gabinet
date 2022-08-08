<script setup>
    import phoneNumber from './phoneNumber.vue'
    import contactHref from './contactHref.vue'
</script>

<template>
    <div id = "navbar-bottom" :class = "hideBottomNavbar ? 'hiden' : 'shown'">
        <div id="navbar-bottom-wrap">
            <phoneNumber />
            <contactHref />
            <div id = "opening-time-information">
                <fa icon = 'clock' size = "2x" id = "navbar-bottom-svg-clock"></fa> <span class = "text">Wtorek - Czwartek, od 9:00 do 18:00 </span>
            </div>
        </div>
        <div id="navbar-bottom-toggle">

        </div>
        <button aria-label = 'Hide bottom menu' @click = "bottomNavbarToggle" id = 'hide-bottom-menu'><fa icon = 'circle-up' size ='2x' color = '#41B3A3'></fa></button>
    </div>  
    <button v-if = "hideBottomNavbar" @click = "bottomNavbarToggle"  id = "show-bottom-menu" aria-label = 'Show bottom menu'><fa icon = 'circle-down' size = '2x' color = 'white'></fa></button>
</template>
<style>
    #navbar-bottom{
        width: 100vw;
        max-width:100%;
        font-size: 15px;
        transition: transform .2s ease;
        transform-origin: top;
        display: block;
        -webkit-box-shadow: 0px 0px 5px 1px var(--basic-light-green);
        -moz-box-shadow: 0px 0px 5px 1px var(--basic-light-green);
        box-shadow: 0px 0px 5px 1px var(--basic-light-green);
        position: sticky;
        z-index: 4;
        top: 79px;
        background-image:  linear-gradient(to left, var(--basic-dark-green-2), var(--basic-dark-green));
        padding: 12px 0 6px 0;
    }
    #navbar-bottom-wrap{
        display: flex;
        gap: 20px;
        justify-content: center;
    }
    .navbar-bottom-href{
        border-radius: 25px;
        font-size: 20px;
        width: max-content;
        opacity: 80%;
        transition : .2s ease-in-out;
        padding: 5px 10px 5px 10px;
        position: relative;
        bottom: 4px;
    }
    .navbar-bottom-href:hover, .navbar-bottom-href:focus{
        outline: none;
        opacity: 1;
    }

    #navbar-bottom-svg-clock{
        margin-right: 10px;
        margin-left: 10px;
    }
    #opening-time-information{
        color: white;
        height: max-content;
        width: max-content;
        position: relative;
        font-size: 20px;
    }
    #opening-time-information .text{
        bottom: 7px;
        position: relative;
        width: max-content;
    }
    #hide-bottom-menu{
        background: transparent;
        background-color: transparent;
        border: none;
        position: absolute;
        background-color: white;
        border-radius: 50px;
        padding: 5px;
        transition: .2s ease;
        top: 12px;
        left: 6px;
    }
    #show-bottom-menu{

        background-image:  linear-gradient(to left, var(--basic-dark-green-2), var(--basic-dark-green));
        border: none;
        position: fixed;
        z-index: 1; 
        padding: 5px;
        transition: .2s ease;
        border-radius: 50px;
        left: 5px;
        top: 70px;
    }
    #hide-bottom-menu:hover, #hide-bottom-menu:focus{
        cursor: pointer;
        outline: none;
        transform: translateY(-5px);
    }
    #show-bottom-menu:hover, #show-bottom-menu:focus{
        cursor: pointer;
        transform: translateY(5px);
        outline: none;
    }
    @media (max-width: 900px){
        #opening-time-information{
            display: none;
        }
        #navbar-bottom-wrap{
            justify-content: end;
            margin-right: 20px;
        }

    }

</style>

<script>

    export default {
        data(){
            return{
                hideBottomNavbar: false,           
                bottomNavbarUserInteraction: false
                }
        },
        created(){
            window.addEventListener('scroll', this.bottomNavbarScrollToggle)
        },
        destroyed(){
            window.removeEventListener('scroll', this.bottomNavbarScrollToggle)
        },
        methods:{
            bottomNavbarToggle(){
                this.hideBottomNavbar = !this.hideBottomNavbar
                this.bottomNavbarUserInteraction = true
            },
            bottomNavbarScrollToggle(){
                if(window.scrollY > 75 && this.hideBottomNavbar == false && this.bottomNavbarUserInteraction == false){
                    this.hideBottomNavbar = true
                }
                else if(window.scrollY <= 75 && this.hideBottomNavbar ==  true && this.bottomNavbarUserInteraction == false){
                    this.hideBottomNavbar = false                }
            }
        }
    }
</script>