<script setup>
    import phoneNumber from './phoneNumber.vue'
    import contactHref from './contactHref.vue'
    import FontSizeChange from './fontSizeChange.vue';
</script>
<template>
    <div :class = "mobileMenuShown ? 'shown' : 'hiden'" id = "mobile-nav-wrap">
        <div id = "mobile-nav-logo">
            <span id = 'text'>LOGO</span>
            <button @click = "$emit('closeMenu')" id = "close-mobile-menu">
                <fa icon = "xmark" size = '6x' color = 'white'></fa>
            </button>
            <!-- <FontSizeChange :isMobile = true /> -->
        </div>
        <div id = "mobile-links-wrap">
                    <ul>
                        <li v-for="(item, index) in Paths">
                            <router-link @click = "$emit('closeMenu')" :to="{path:item.path}" :class = "routeName === item.name ? 'inactive-selected-mobile' : ''">{{item.span}}</router-link>
                        </li>
                    </ul>
        </div>
        <div id = "mobile-bottom-wrap">
            <div id = "mobile-href-wrap">
                <phoneNumber />
                <contactHref @click = "$emit('closeMenu')" />
            </div>
            <div id = "mobile-time-wrap">
                <fa icon = 'clock' size = "1x" id = "navbar-mobile-svg-clock"></fa> <span class = "text">Wtorek - Czwartek, od 9:00 do 18:00 </span>
            </div>
        </div>

    </div>
</template>
<style>
    #mobile-nav-wrap{
        overflow: auto;
        background-image:  linear-gradient(to left, var(--basic-dark-green-2), var(--basic-dark-green));
        width: 100vw;
        max-width: 100%;
        min-width: 260px;
        color: white;
        transition: opacity .25s ease, transform .25s ease;
        align-items: center;
        letter-spacing: 1px;
        position: fixed;
        z-index: 500;
        top: 0;
        left: 0;
        height: 100%;
        
    }
    #close-mobile-menu{
        position: absolute;
        top: 9px;
        right: 10px;
        background-color: transparent;
        border: none;
    }
    #close-mobile-menu:hover, #close-mobile-menu:focus, #close-mobile-menu:active{
        outline: none;
        border: none;
        cursor: pointer;
    }
    #mobile-bottom-wrap{
        margin-top: 60px;
        padding-top: 40px;
        -webkit-box-shadow: 0px -1px 1px 0px  white;
        -moz-box-shadow: 0px -1px 1px 0px  white;
        box-shadow: 0px -1px 1px 0px white;
    }
    #mobile-nav-logo{
        text-align: left;
        height: 120px;
        padding: 35px 0 0 20px;
        margin: auto;
        font-size: 40px;
        -webkit-box-shadow: 0px 1px 1px 0px  white;
        -moz-box-shadow: 0px 1px 1px 0px  white;
        box-shadow: 0px 1px 1px 0px  white;
        position: relative;
    }
    #mobile-links-wrap{
        margin: 70px auto 70px auto;
        height: 370px;
    }
    #mobile-links-wrap ul{
        text-align: center;
        font-size: 22px;
        padding: 45px;
    }
    #mobile-links-wrap ul li:not(:last-of-type){
        margin-bottom: 25px;
        padding-bottom: 5px;
    }
    #mobile-links-wrap ul a:focus, #mobile-links-wrap ul a:hover, #mobile-links-wrap ul a:active{
        outline: none;
        border: none;
        font-weight: 900;
    }
    #mobile-time-wrap{
        margin: auto;
        height: 50px;
        overflow-wrap: break-word;
        width: max-content;
        width: 100%;
        text-align: center;    
        font-size: 16px;
    }
    #mobile-href-wrap{
        display: flex;
        margin-bottom: 20px;
        gap: 30px;
        justify-content: center;
    }
    .inactive-selected-mobile{
        font-weight: 900;
        pointer-events: none;
        letter-spacing: 3px;
    }
    @media (min-width: 990px){
    #mobile-nav-wrap{
        display: none;
    }

}
</style>
<script>
    export default {
        name: 'MobileNavbar',
        data(){
            return{
                Paths: [{path: '/', name: 'Home', span: 'Strona Główna'}, {path: '/Uslugi', name: 'Services', span: 'Usługi'}, {path: '/Cennik', name: 'Price', span: 'Cennik'}, {path: '/Kontakt', name: 'Contact', span: 'Kontakt'}, {path: 'Umow-Wizyte', name: 'Appointment', span: 'Umów Wizytę'}],
            }
        },
        props: ['mobileMenuShown'],
        computed:{
            routeName(){
            return this.$route.name
            },
        },
    }
</script>