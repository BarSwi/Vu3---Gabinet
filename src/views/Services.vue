<script setup>
    import SubH2 from '../components/subH2.vue'
import ContactDiv from '../components/contactDiv.vue';
</script>
<template>

    <main>
        <SubH2>Usługi</SubH2>
        <div class="container-main">
            <div id = 'services-wrap'>
                <div class = 'service'>
                    <h3>Terapia słowem</h3>
                    <p>Rozmowy mające na celu zmniejszenie lub rozwiązanie problemów petenta.</p>
                    <router-link to = '/Cennik'>Sprawdź cenę</router-link>
                </div>
                <div class = 'service' id = 'help'>
                    <h3>Pomoc w rozwiązywaniu problemów życiowych</h3>
                    <p>Wszelkie działania dążące do rozwiązania różnego rodzaju problemów życiowych danej osoby.</p>
                    <router-link to = '/Cennik'>Sprawdź cenę</router-link>
                </div>

                <div class = 'service' id = 'graphology'>
                    <h3>Badania grafologiczne</h3>
                    <p>Porównanie pisma, podpisów co do autentycznosci nakreślenia ich przez osoby posądzone o ich sporządzenie.</p>
                    <router-link to = '/Cennik'>Sprawdź cenę</router-link>
                </div>
                <div class = 'service' id = 'analysis'>
                    <h3>Analiza postępowań</h3>
                    <p>Zapoznanie się z materiałami postępowania, przegląd materiału dowodowego, informacja o mozliwości złożenia ewentualnych wniosków lub pism pod kątem pozytywnego zakończenia postępowania.</p>
                    <router-link to = '/Cennik'>Sprawdź cenę</router-link>
                </div>
                <div class = 'service' id = 'detective'>
                    <h3>Usługi detektywistyczne</h3>
                    <p>Wszelkiego rodzaju usługi związane z działalnością agencji detektywistycznej.</p>
                    <router-link :to = "{name: 'Price', params: {scrollTo: '#price-detective', top: 90}}">Sprawdź cenę</router-link>
                </div>
            </div>
        </div>
        <ContactDiv/>
    </main>

    
</template>
<style>
    #services-wrap{
        min-width: 270px;
    }
    #services-wrap p{
        /* border-left: 3px solid var(--basic-dark-green);
        border-right: 3px solid var(--basic-dark-green); */
        /* border-bottom: 3px solid var(--basic-dark-green); */
        text-align: center;
        /* -webkit-box-shadow: 0px 0px 3px 0px rgba(66, 68, 90, 1);
        -moz-box-shadow: 0px 0px 3px 0px rgba(66, 68, 90, 1);
        box-shadow: 0px 0px 3px 0px var(--basic-dark-green-2); */
    }
    #services-wrap .service:nth-of-type(odd){
        /* background-color: rgba(15, 87, 8, 0.1); */
    }
    #services-wrap .service{
        /* border-bottom: 5px solid var(--basic-dark-green); */
        padding: 0.5rem;
        -webkit-box-shadow: inset 0px 0px 3px 0px rgba(66, 68, 90, 1);
        border-radius: 15px;
        -moz-box-shadow: inset 0px 0px 3px 0px rgba(66, 68, 90, 1);
        box-shadow: inset 0px 0px 3px 0px var(--basic-dark-green-2);
        margin: 0.7rem 0 0.7rem 0;
    }
    #services-wrap .keyword{
        font-weight: 900;
    }
    #services-wrap .service a{
        display: block;
        margin: 10px;
        color: var(--basic-dark-green-2);
        font-weight: 900;
        opacity: 80%;
        transition:  .2s ease;
        text-align: center;
    }
    #services-wrap .service a:hover, #services-wrap .service a:focus{
        opacity: 1;
        outline: none;
    }


    #services-wrap h3{
        text-align: center;
    }
    @media (max-width: 420px){
        #services-wrap .service{
            margin-bottom: 40px;
        }
    }
</style>
<script>
    // export default {
    //     mounted(){
    //         console.log(this.$route.params.id)
    //     }
    // }
</script>