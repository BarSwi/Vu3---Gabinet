<script setup>
    import subH2 from './subH2.vue'
import Map from './map.vue';
</script>
<template>
    <subH2>Kontakt i Lokalizacja</subH2>
    <div id = "contact-div-informations">
        <p>Jeżeli chcesz nas o coś zapytać możesz zadzwonić, wysłać SMS, wiadomość e-mail lub bezpośrednio zadać pytanie bezpośrednio poprzez formularz kontaktowy znajdujący się na stronie. Na wszystko postaramy się odpowiedzieć tak szybko, jak to tylko będzie możliwe</p>
        <div id = "contact-div-informations-provide">
            <ul>
                <div class = 'contact-div-informations-item' id = 'contact-div-informations-phone'><a href = "tel:+48605342428"><span id = 'contact-div-informations-phone-icon'><fa  icon = 'phone-flip' size = '1x' style = "transform: rotate(-220deg)" /></span>605 342 428</a></div>
                <div class = 'contact-div-informations-item' id = "contact-div-informations-email"><a href = "mailto:przykładowy_email@gmail.com"><span id = 'contact-div-informations-envelope-icon'><fa icon = "envelope" size = '1x' /></span>Przykładowy_email@gmail.com</a></div>
                <div class = 'contact-div-informations-item' id = "contact-div-informations-form"><router-link to ='/Kontakt'><span id = 'contact-div-informations-form-icon'><fa  icon = 'rectangle-list' /></span>Formularz Kontaktowy</router-link></div>
                <div class = "contact-div-informations-item" id = 'contact-div-informations-location'><span id = 'contact-div-informations-location-icon'><fa icon = 'location-dot' ></fa></span>Katowice ul. Teatralna 6/3</div>
            </ul>

        </div>
        <Map />
    </div>
</template>
<style>
    #contact-div-informations-provide{
        text-align: center;
        color: #103F62;
    }
    #contact-div-informations-provide a{
        transition: color 0.2s ease-in-out;
    }
    #contact-div-informations-provide a:hover, #contact-div-informations-provide a:focus{
        color: var(--basic-dark-green-2);
        outline: none;
    }
    #contact-div-informations p {
        text-align: center;
    }
    #contact-div-informations-provide{
        text-align: left;
        margin: 40px auto 0 auto;
        white-space: nowrap;
        overflow: auto;
        max-width: 100%;
        width: max-content;
    }
    #contact-div-informations-envelope-icon{
        position: relative;
        margin-right: 10px; 
    }
    #contact-div-informations-phone-icon{
        margin-right: 10px;
    }
    #contact-div-informations-form-icon{
        position: relative; 
        top: 1px;
        margin: 0 8px 0 -1px;
    }
    #contact-div-informations-location-icon{
        margin: 0 10px 0 3px;
    }
    .contact-div-informations-item{
        padding-top: 15px;
    }
</style>
<script>

</script>