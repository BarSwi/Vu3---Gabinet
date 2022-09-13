<script setup>
    import phoneNumber from './phoneNumber.vue'
    import contactHref from './contactHref.vue'
</script>
<template>
    <nav :class = "mobileMenuShown ? 'shown' : 'hiden'" id = "mobile-nav-wrap">
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

    </nav>
</template>
<style>
    #mobile-nav-wrap{
        overflow: auto;
        background-image:  linear-gradient(to left, var(--basic-dark-green), var(--basic-dark-green-3));
        width: 100vw;
        max-width: 100%;
        min-width: 280px;
        color: white;
        transition: opacity .25s ease, transform .25s ease;
        align-items: center;
        letter-spacing: 1px;
        position: fixed;
        z-index: 500;
        top: 87.5px;
        left: 0;
        
    }
    #close-mobile-menu{
        margin: auto;
        display: block;
        background-color: transparent;
        border: none;
    }
    #close-mobile-menu:hover, #close-mobile-menu:focus, #close-mobile-menu:active{
        outline: none;
        border: none;
        cursor: pointer;
    }
    #mobile-bottom-wrap{
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
        margin: 20px auto 20px auto;
    }
    #mobile-links-wrap ul{
        text-align: center;
        margin: 0 20px 0 20px;
        flex-wrap: wrap;
        justify-content: space-around;
        font-size: 22px;
    }
    #mobile-links-wrap ul li{
       padding: 10px;
    
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
    #mobile-bottom-wrap{
        padding-top: 30px;
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
    @media (min-width: 1008px){
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
                Paths: [{path: '/', name: 'Home', span: 'Strona Główna'}, {path: '/Uslugi', name: 'Services', span: 'Usługi'}, {path: '/Cennik', name: 'Price', span: 'Cennik'}, {path: '/Kontakt', name: 'Contact', span: 'Kontakt'}],
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