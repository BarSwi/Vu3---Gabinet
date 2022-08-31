<script setup>
    import SubH2 from "../components/subH2.vue";
    import Map from "../components/map.vue";
    import ContactForm from "../components/contactForm.vue";
</script>
<template>
    <main>
        <SubH2>Kontakt</SubH2>
        <div class = "container-main">
            <div id = "row-contact">
                <div id = "row-contact-left">
                    <div class = "row-contact-left-informations" id = "row-contact-left-company">
                        <span class = 'header' id = "company-name">Nazwa firmy</span>
                        <ul>
                            <li>
                                NIP:
                            </li>
                            <li>
                                REGON:
                            </li>
                            <li>
                                KRS: 
                            </li>
                        </ul>
                    </div>
                    <div class = "row-contact-left-informations" id = "row-contact-left-company">
                        <span class = 'header' id = "open-time">Godziny otwarcia poradni</span>
                        <p>Wtorek, Środa, Czwartek, od 9:00 do 18:00</p>
                    </div>
                    <div class = 'row-contact-left-informations' id = 'row-contact-left-phone'>
                        <span class = "header" id = 'phone'>Kontakt telefoniczny</span>
                        <p><a href = "tel:+48605342428"><span id = 'phone-icon'><fa  icon = 'phone-flip' size = '1x' style = "transform: rotate(-220deg)" /></span>605 342 428</a></p>
                    </div>
                    <div class = 'row-contact-left-informations' id = 'row-contact-left-email'>
                        <span class = 'header' id = 'email'>Kontakt mailowy</span>
                        <p><a href = "mailto:przykładowy_email@gmail.com"><span id = 'envelope-icon'><fa icon = "envelope" size = '1x' /></span>Przykładowy_email@gmail.com</a></p>
                    </div>
                    <div class = 'row-contact-left-informations' id = 'row-contact-left-address'>
                        <span class = 'header' id = 'address'>Adres gabinetu</span>
                        <p><span id = 'location-icon'><fa icon = 'location-dot'></fa></span>Katowice ul. Teatralna 6 Lokal 3</p>
                    </div>
                </div>
                <div id = "row-contact-right">
                    <ContactForm />
                </div>
            </div>
            <div id = "contact-map">
                <Map />
            </div>
        </div>
    </main>
</template>
<style>
#row-contact{
    display: flex;
    min-width: 260px;
    overflow: auto;
    color: #0f3450;
    justify-content: space-between;
    margin:40px 0 40px 0;
}
#row-contact-left, #row-contact-right{
    padding: 20px;
    width: 50%;
}
#row-contact .header{
    font-weight: 900;
    letter-spacing: 1px;
}
.row-contact-left-informations{
    padding-bottom: 10px;
    margin-bottom: 10px;
}
.row-contact-left-informations ul li{
    padding: 5px 0 5px 0;
}
.row-contact-left-informations a{
    transition: color .25s ease;
}
.row-contact-left-informations a:hover, .row-contact-left-informations a:focus{
    color: var(--basic-dark-green-2);
    outline: none;
}
.row-contact-left-informations #phone-icon, .row-contact-left-informations #envelope-icon, .row-contact-left-informations #location-icon{      
    margin-right: 10px;
}
@media (max-width: 900px){
    #row-contact{
        flex-direction: column;
    }
    #row-contact-left{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        width: 100%;
        margin: auto;
    }
    #row-contact-right{
        width: 100%;
    }
    .row-contact-left-informations{
        min-width: 300px;
        width: 300px;
        margin: 10px 20px 10px 20px;
    }
@media (max-width: 757px){
    #row-contact-left{
        justify-content: flex-start;
    }
}
}

</style>
<script>
</script>