<script setup>
    import navbarBottom from './navbarBottom.vue'
    import mobileNavbar from './mobileNavbar.vue'
import FontSizeChange from './fontSizeChange.vue';
</script>
<template>
    <div id = "navbar">
        <div id="navbar_cont">
            <div id="logo">
                <router-link to ='/' ><fa icon = 'house' size = '2x' color = 'black' ></fa></router-link>
            </div>
            <nav id = "right_navbar_cont">
                <div id="links-not-mobile">
                    <ul>
                        <li v-for="(item, index) in Paths">
                            <router-link :to="{path:item.path}" :class = "routeName === item.name && routeName != 'Appointment' ? 'inactive_selected' : ''">{{item.span}}</router-link>
                        </li>
                        <li>
                            <router-link to="/Umow-Wizyte" :class = "routeName === 'Appointment' ? 'inactive_selected_appointment' : ''">Umów Wizytę</router-link>
                        </li>
                    </ul>
                </div>
                <button @click = "toggleMobileMenuFunc" id="mobile-burger-menu" aria-label = "Open mobile menu">
                    <fa icon = "bars" color = '#097969' size = '4x'/>
                </button>
            </nav>
        </div>
    </div>
    <navbarBottom :scrollValue = "scrollValue" />
    <mobileNavbar @close-menu = "toggleMobileMenuFunc" :mobileMenuShown = showMobileMenu />
</template>
<style>


#links-not-mobile, #navbar_cont #logo{
    float: left;
}
#navbar_cont #logo a:hover, #navbar_cont #logo a:focus{
    outline: none;
}
#links-not-mobile{
    height: max-content;
    padding: 13px 5px 15px 5px;
}
#links-not-mobile li{
    
}
#navbar_cont #logo{
    font-size: 38px;
    font-weight: 900;
    height: max-content;
}
#logo{
    font-size: 30px !important;
}
a{
    text-decoration: none;
    color: black;
}
#navbar_cont{
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    max-width: 1200px;
    margin: 0 auto 0 auto   ;
    display: flex;
    justify-content: space-between;
}

#navbar{
    width: 100vw;
    max-width:100%;
    min-width:280px;
    -webkit-box-shadow: 0px 0px 6px 1px rgba(66, 68, 90, 1);
    -moz-box-shadow: 0px 0px 6px 1px rgba(66, 68, 90, 1);
    box-shadow: 0px 0px 6px 1px rgba(66, 68, 90, 1);
    position: sticky;
    background-color: var(--basic-dark-white);
    top: 0;
    padding: 10px;
    z-index: 16;
}
#navbar ul{
    display: flex;
    margin: 0;
    padding: 0;
}
#navbar li:last-of-type a{
    background-color: rgba(162, 238, 91, 0.1);
    opacity: 80%;
    border-radius: 20px;
    -webkit-box-shadow: 0px 0px 9px 0px var(--basic-dark-green-2);
    -moz-box-shadow: 0px 0px 9px 0px var(--basic-dark-green-2);
    box-shadow: 0px 0px 9px 0px var(--basic-dark-green-2);
}

#navbar #navbar_cont a{
    padding: 6px 10px 6px 10px;
    position: relative;
    display: block;
    color: var(--navbar-a-color);
    font-size: 22px;
    width: max-content;
    margin: 0 20px 0 20px;
}
#navbar a:after{
    content: '';
    transition: .25s ease;
    transform: scaleX(0);
    transform-origin: center;
    position: absolute;
    height: 2px;
    bottom: 0px;
    margin: 0 auto;
    border-radius: 2px;
    left: 0;
    right: 0;
    width: 100%;
    /* background: var(--basic-dark-green-2); */
    background-image:  linear-gradient(to left, var(--basic-dark-green-2), var(--basic-dark-green));
}
#navbar li a:hover, #navbar li a:focus, #navbar li a:active{
    color: black !important;
    opacity: 1;
    outline: none;
}
#navbar li:not(:last-of-type) a:hover:after, #navbar li:not(:last-of-type) a:focus:after{
    transform: scaleX(1);
}

.inactive_selected{
    font-weight: 900;
    position: relative;
    pointer-events: none;
    color: black !important;
}
.inactive_selected_appointment{
    background-color: rgba(162, 238, 91, 0.4) !important;
    opacity: 1;
    pointer-events: none;
    font-weight: 900;
    color: black !important;
}
#mobile-burger-menu{
    display: none;
    position: absolute;
    top: 13px;
    background-color: transparent;
    border: none;
    right: 12px;
}
#mobile-burger-menu:hover, #mobile-burger-menu:focus, #mobile-burger-menu:active{
    outline: none;
    border: none;
    cursor: pointer;
}
.inactive_selected:before{
    content: '';
    position: absolute;
    height: 2px;
    bottom: 0px;
    margin: 0 auto;
    border-radius: 2px;
    left: 0;
    right: 0;
    width: 100%;
    background-image:  linear-gradient(to left, var(--basic-dark-green-2), var(--basic-dark-green));
}
@media (max-width: 1330px){
    #navbar_cont{
    width: 1000px;
    }
@media (max-width: 1007px){
    #links-not-mobile{
        display: none;
    }
    #mobile-burger-menu{
        display: block;
    }
    #navbar_cont{
        width: 100%;
        padding-bottom: 23px;
    }
    #logo a{
        margin: 0 !important;
        padding: 0 !important;
    }
    #logo{
        position: relative;
        top: 7px;
    }
}
}


</style>
<script>
export default {
    data(){
        return{
            Paths: [{path: '/', name: 'Home', span: 'Strona Główna'}, {path: '/Uslugi', name: 'Services', span: 'Usługi'}, {path: '/Cennik', name: 'Price', span: 'Cennik'}, {path: '/Kontakt', name: 'Contact', span: 'Kontakt'}],
            showMobileMenu: false,
        }
    },
    props: ['scrollValue'],
    methods:{
        toggleMobileMenuFunc(){
            this.showMobileMenu = !this.showMobileMenu
            if(this.showMobileMenu==true){
                document.documentElement.style.overflow =  "hidden"
                }
            else document.documentElement.removeAttribute('style')
        }
    },
    computed:{
        routeName(){
        return this.$route.name
    },
    }
};



</script>