<template>
    <div id = "footer">
        <div id = 'footer-top-cont'>
            <div id = 'col-1' class = 'col'>
                <div id = 'logo'>
                    LOGO
                </div>
                <div id = 'company-name'>
                    Nazwa firmy
                </div>
                <div id = 'company-informations'>
                    <p>NIP: XXXXXXXXXXX</p>
                    <p>REGON: XXXXXXXXXXX</p>
                    <p>KRS: XXXXXXXXXX</p>
                </div>
            </div>
            <div id = 'col-2' class = 'col'>
                <div id = "address">
                    <span id = 'address-header' class = 'footer-header'>Adres gabinetu:</span>
                    <span id = 'address-cont'>ul. Teatralna 6/3, Katowice</span>
                </div>
                <div id = 'time'>
                    <span id = 'time-header' class = 'footer-header'>Godziny otwarcia:</span>
                    <span id = 'time-cont'>Wtorek - Czwartek, od 9:00 do 18:00</span>
                </div>
                <div id = 'contact'>
                    <span id = 'contact-phone'><a href = "tel:+48605342428"><span id = 'footer-contact-phone-icon'><fa  icon = 'phone-flip' size = '1x' style = "transform: rotate(-220deg)" /></span>605 342 428</a></span><br>
                    <span id = 'contact-form'><router-link to = "/Kontakt"><span id = 'footer-contact-envelope-icon'><fa icon = 'envelope' size = '1x' /></span>Zadaj pytanie</router-link></span>
                </div>
            </div>
            <div id = 'col-3' class = 'col'>
                <ul>
                    <li v-for="(item, index) in Paths">
                        <router-link :to="{path:item.path}">{{item.span}}</router-link>
                    </li>
                </ul>
            </div>
        </div>
        <div id = 'footer-bottom-cont'>
            Polityka prywatności
        </div>
    </div>
</template>

<style>
    #footer{
        background-color: rgb(31, 29, 29);
        width: 100%;
        font-size: 15px;
        min-width: 260px;
        padding-top: 35px;
        margin-top: 50px;
        color: white;
        position: relative;
    }
    #footer .col{
        margin: 0 15px 0 15px;
        width: 25%;
    }
    #footer-top-cont{
        justify-content: space-evenly;
        display: flex;
        flex-wrap: wrap;
    }
    #footer-top-cont .footer-header{
        font-weight: 900;
        font-size: 17px;
        margin-bottom: 15px;
        display: block;
    }
    #footer-top-cont #time-header{
        margin-top: 15px;
    }
    #footer-top-cont, #footer-bottom-cont{
        width: 1200px;
        margin: auto;
    }
    #footer p {
        margin: 3px;
    }
    #footer ul{
        margin: 0;
    }
    #footer ul li{
        text-align: center;
        transition: .2s ease;
    }
    #footer ul li:hover, #footer ul li:focus{
        color: var(--basic-light-green);
    }
    #footer ul li:not(:last-of-type){
        margin-bottom: 32px;
    }
    #footer-bottom-cont{
        padding: 20px;
        margin-top: 25px;
        text-align: center;
        font-size: 12px;
    }
    #footer #col-1 #logo{
        font-size: 38px;
    }
    #footer #col-2, #footer #col-1{
        text-align: center;
    }
    #footer #address{
        margin-bottom: 20px;
    }
    #footer #col-1 #logo, #footer #col-1 #company-name{
        margin-bottom: 35px;
        /* text-align: left; */
    }
    #footer-top-cont #contact{
        margin-top: 25px;
        font-weight: 900;
        font-size: 18px;
    }
    #footer-top-cont #contact #contact-form{
        display: block;
        margin-top: 20px;
    }
    #footer-top-cont #contact-form:hover, #footer-top-cont #contact-form:focus, #footer-top-cont #contact-phone:hover, #footer-top-cont #contact-form:focus{
        color: var(--basic-light-green);
    }
    #footer-contact-phone-icon, #footer-contact-envelope-icon   {
        margin: 0px 12px 0 -3px;
    }
    @media (max-width: 1200px){
        #footer-top-cont, #footer-bottom-cont{
            width: 900px;
        }
    }
    @media (max-width: 900px){
        #footer-top-cont, #footer-bottom-cont{
            width: 100%;
        }
        #footer #col-1, #footer #col-2{
            width: 40%;
        }
        #footer #col-3{
            width: 100%;
            margin: 80px auto 20px auto;
        }
        #footer #col-3 ul{
            display: flex;
            justify-content: center;
        }
        #footer #col-3 ul li{
            margin: 0 20px 0 20px;
        }
    }
    @media (max-width: 640px){
        #footer #col-2{
            justify-content: center;
            flex-direction: column;
        }
    }
    #footer #time, #footer #contact{
        margin-top: 25px;
        margin-left: 0;
    }
    @media (max-width: 525px){
        #footer-top-cont{
            flex-direction: column;
        }
        #footer #col-1, #footer #col-2, #footer #col-3{
            padding: 10px 0 10px 0;
            margin-left: auto;
            margin-right: auto;
        }
        #footer #col-1, #footer #col-3, #footer #col-2{
            width: 100%;
        }
        #footer #col-3{
            margin-top: 50px;
        }
        #footer #col-3  ul{
            flex-direction: column;
        }
        #footer #col-3 ul li{
            margin: 10px 0 10px 0;
        }
        #footer #col-2{
            margin-top: 50px;
        }
        #footer #time-header{
            margin-top: 0;
            margin-bottom: 25px;
        }
        #footer #address-header{
            margin-bottom: 25px;
        }
        #footer #address{
            margin: 0;
        }

    }
</style>

<script>
export default {
    data(){
        return{
            Paths: [{path: '/', name: 'Home', span: 'Strona Główna'}, {path: '/Uslugi', name: 'Services', span: 'Usługi'}, {path: '/Cennik', name: 'Price', span: 'Cennik'}, {path: '/Kontakt', name: 'Contact', span: 'Kontakt'}, {path: '/Umow-Wizyte', name: 'Appointment', span: 'Umów Wizytę'}],
        }
    },
}
</script>
