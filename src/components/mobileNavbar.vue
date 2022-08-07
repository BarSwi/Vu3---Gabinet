<script setup>
    import phoneNumber from './phoneNumber.vue'
    import contactHref from './contactHref.vue'
    import FontSizeChange from './fontSizeChange.vue';
</script>
<template>
    <div id = "mobile-nav-wrap">
        <div id = "mobile-nav-logo">
            <span id = 'text'>LOGO</span>
        </div>
        <div id = "mobile-links-wrap">
                    <ul>
                        <li v-for="(item, index) in Paths">
                            <router-link :to="{path:item.path}" :class = "routeName === item.name ? 'inactive-selected-mobile' : ''">{{item.span}}</router-link>
                        </li>
                    </ul>
        </div>
        <div id = "mobile-bottom-wrap">
            <div id = "mobile-href-wrap">
                <phoneNumber />
                <contactHref />
            </div>
            <div id = "mobile-time-wrap">
                <fa icon = 'clock' size = "1x" id = "navbar-mobile-svg-clock"></fa> <span class = "text">Wtorek - Czwartek, od 9:00 do 18:00 </span>
            </div>
            <FontSizeChange :isMobile = true />
        </div>

    </div>
</template>
<style>
    #mobile-nav-wrap{
        overflow: auto;
        background-image:  linear-gradient(to left, var(--basic-dark-green), var(--basic-light-green));
        width: 100vw;
        color: white;
        align-items: center;
        letter-spacing: 1px;
        position: fixed;
        z-index: 500;
        top: 0;
        height: 100vh;
    }
    #mobile-bottom-wrap{
        margin-top: 100px;
    }
    #mobile-nav-logo{
        text-align: center;
        height: 120px;
        margin: auto;
        font-size: 40px;
        border-bottom: 1px solid grey;
        position: relative;
    }
    #mobile-links-wrap{
        margin: 100px auto 20px auto;
        height: 370px;
    }
    #mobile-links-wrap ul{
        text-align: center;
        font-size: 30px;
        padding: 20px;
    }
    #mobile-links-wrap ul li{
        padding: 5px;
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
        letter-spacing: 3px;
    }
    @media (max-width: 303px){
        #navbar-mobile-svg-clock{
            display: block;
            margin: auto;
        }
    }
</style>
<script>
    export default {
        name: 'MobileNavbar',
        data(){
            return{
                Paths: [{path: '/', name: 'Home', span: 'Strona Główna'}, {path: '/Uslugi', name: 'Services', span: 'Usługi'}, {path: '/Cennik', name: 'Price', span: 'Cennik'}, {path: '/Kontakt', name: 'Contact', span: 'Kontakt'}, {path: 'Umow-Wizyte', name: 'Appointment', span: 'Umów Wizytę'}],
                hideBottomNavbar: false
            }
        },
        computed:{
            routeName(){
            return this.$route.name
            },
        }
    }
</script>