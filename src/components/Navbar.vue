<script setup>
    import navbarBottom from './navbarBottom.vue'
    import mobileNavbar from './mobileNavbar.vue'
</script>
<template>
    <div id = "navbar">
        <div id="navbar_cont">
            <div id="logo">
                LOGO
            </div>
            <div id = "right_navbar_cont">
                <div id="links_not_mobile">
                    <ul>
                        <li v-for="(item, index) in Paths">
                            <router-link :to="{path:item.path}" :class = "routeName === item.name && routeName != 'Appointment' ? 'inactive_selected' : ''">{{item.span}}</router-link>
                        </li>
                        <li>
                            <router-link to="/Umow-Wizyte" :class = "routeName === 'Appointment' ? 'inactive_selected_appointment' : ''">Umów Wizytę</router-link>
                        </li>
                    </ul>
                </div>
                <div id="mobile-burger-menu">
                    <fa icon = "bars" color = '#097969' size = '3x'/>
                </div>
            </div>
        </div>
    </div>
    <navbarBottom />
    <mobileNavbar />
</template>
<style>


#links_not_mobile, #logo{
    float: left;
}
#links_not_mobile{
    height: max-content;
    padding: 13px 5px 13px 5px;
}
#logo{
    font-size: 38px;
    font-weight: 900;
    height: max-content;
    padding: 6px;
}
a{
    text-decoration: none;
    color: black;
}
#navbar_cont{
    max-width: 1200px;
    margin: 0 auto 0 auto   ;
    display: flex;
    justify-content: space-between;
}

#navbar{
    overflow: hidden;
    width: 100vw;
    -webkit-box-shadow: 0px 0px 6px 1px rgba(66, 68, 90, 1);
    -moz-box-shadow: 0px 0px 6px 1px rgba(66, 68, 90, 1);
    box-shadow: 0px 0px 6px 1px rgba(66, 68, 90, 1);
    position: sticky;
    background-color: var(--basic-dark-white);
    top: 0;
    z-index: 5;
}
#navbar ul{
    display: flex;
    margin: 0;
    padding: 0;
}
#navbar li:last-of-type a{
    transition:  .25s ease;
    background-color: rgba(162, 238, 91, 0.1);
    opacity: 80%;
    border-radius: 20px;
    -webkit-box-shadow: 0px 0px 9px 0px var(--basic-dark-green);
    -moz-box-shadow: 0px 0px 9px 0px var(--basic-dark-green);
    box-shadow: 0px 0px 9px 0px var(--basic-dark-green);
}

#navbar #navbar_cont a{
    padding: 6px 10px 6px 10px;
    transition: .25s ease;
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
    bottom: 3px;
    margin: 0 auto;
    border-radius: 2px;
    left: 0;
    right: 0;
    width: 100%;
    background: var(--basic-dark-green);
}
#navbar li a:hover, #navbar li a:focus, #navbar li a:active{
    color: black !important;
    opacity: 1;
    outline: none;
}
#navbar li:not(:last-of-type) a:hover:after, #navbar li:not(:last-of-type) a:focus:after{
    transform: scaleX(1);
    -webkit-box-shadow: 0px 0px 11px 0px var(--basic-dark-green);
    -moz-box-shadow: 0px 0px 11px 0px var(--basic-dark-green);
    box-shadow: 0px 0px 11px 0px var(--basic-dark-green);
}

.inactive_selected{
    font-weight: 900;
    position: relative;
    pointer-events: none;
    color: black !important;
}
.inactive_selected_appointment{
    background-image: linear-gradient(to left, var(--basic-dark-green), var(--basic-light-green));  
    opacity: 1 !important;
    pointer-events: none;
    color: black !important;
}
#mobile-burger-menu{
    display: none;
    position: absolute;
    top: 2px;
    right: 40px;
}
.inactive_selected:before{
    content: '';
    position: absolute;
    height: 2px;
    bottom: 3px;
    margin: 0 auto;
    border-radius: 2px;
    left: 0;
    right: 0;
    width: 100%;
    background: var(--basic-dark-green);
}
@media (max-width: 1330px){
    #navbar_cont{
    width: 1000px;
    }
@media (max-width: 990px){
    #links_not_mobile{
        display: none;
    }
    #mobile-burger-menu{
        display: block;
    }
    #navbar_cont{
        width: 100%;
    }
    #navbar{
        width: 100vw;
    }
}
}


</style>
<script>
export default {
    data(){
        return{
            Paths: [{path: '/', name: 'Home', span: 'Strona Główna'}, {path: '/Uslugi', name: 'Services', span: 'Usługi'}, {path: '/Cennik', name: 'Price', span: 'Cennik'}, {path: '/Kontakt', name: 'Contact', span: 'Kontakt'}],
            hideBottomNavbar: false
        }
    },
    methods:{
    },
    computed:{
        routeName(){
        return this.$route.name
    },
    }
};



</script>