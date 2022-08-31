<script setup>
import { createDOMCompilerError } from '@vue/compiler-dom';
import subH2 from '../components/subH2.vue'
import SubH2 from '../components/subH2.vue';
import ContactDiv from '../components/contactDiv.vue';
</script>
<template>
    <div id = "top_title" :style = imagesStyles[currentImg] rel = 'preload'>
        <h1>GABINET <span id = 'bottom-text'>"DOBRE SŁOWO"</span></h1>
    </div>

    <subH2>Usługi w gabinecie</subH2>
    <div class = 'container-main'>
        <section id = 'home-services'>
            <div id = 'home-services-wrap'>
                <div class = 'home-services-square'>
                    <router-link :to="{name: 'Services', params: {scrollTo: '#services-wrap', top: 100}}">
                        <div class = 'home-services-square-img' style = "background-image: url('/img/słowo.jpg');" >
                            
                        </div>
                        <div class = 'home-services-square-text' id = 'therapy'>
                            Terapia słowem
                        </div>
                    </router-link>
                </div>
                <div class = 'home-services-square'>
                    <router-link :to = "{name: 'Services', params: {scrollTo: '#help', top: 300}}">
                        <div class = 'home-services-square-img' style = "background-image: url('/img/problemy.jpg');">
                            
                        </div>
                        <div class = 'home-services-square-text' id = 'help'>
                            Pomoc w rozwiązywaniu problemów życiowych
                        </div>
                    </router-link>
                </div>
                <div class = 'home-services-square'>
                    <router-link :to = "{name: 'Services', params: {scrollTo: '#graphology', top: 350}}">
                        <div class = 'home-services-square-img' style = "background-image: url('/img/grafolog.jpg');">
                            
                        </div>
                        <div class = 'home-services-square-text' id = 'graphology'>
                            Badania grafologiczne
                        </div>
                    </router-link>

                </div> 
                <div class = 'home-services-square'>
                    <router-link :to = "{name: 'Services', params: {scrollTo: '#analysis', top: 350}}">
                        <div class = 'home-services-square-img' style = "background-image: url('/img/analiza.jpg');">
                            
                        </div>
                        <div class = 'home-services-square-text' id = 'analysis'>
                            Analiza postępowań
                        </div>
                    </router-link>

                </div>              
                <div class = 'home-services-square'>
                    <router-link :to = "{name: 'Services', params: {scrollTo: '#detective', top: 350}}">
                        <div class = 'home-services-square-img' style = "background-image: url('/img/detektyw.jpg');">
                            
                        </div>
                        <div class = 'home-services-square-text' id = 'detective'>
                            Usługi detektywistyczne
                        </div>
                    </router-link>

                </div>
            </div>
        </section>
    </div>
    <SubH2>Kiedy przyjmujemy?</SubH2>
    <div class = 'container-main'>
        <section id = 'home-opening-time'>
            <p>Gabinet "Dobre Słowo" otwarty jest w dniach:</p>
            <ul>
                <li>Wtorek - Od godziny 9:00, do godziny 18:00</li>
                <li>Środa - Od godziny 9:00, do godziny 18:00</li>
                <li>Czwartek - Od godziny 9:00, do godziny 18:00</li>
            </ul>
        </section>
    </div>
    <section id = 'home-contact'>
        <ContactDiv />
    </section>
</template>

<style>
#top_title{
    text-align: center;
    --webkit-user-select: none;
    user-select: none;
    margin-top: 10px;
    background-image: url('/img/1.jpg');
    background-size: cover;
    transition: background-image .7s ease-in-out;
    background-repeat: no-repeat;
  text-shadow:
   -1px -1px 0 #000,  
    1px -1px 0 #000,
    -1px 1px 0 #000,
     1px 1px 0 #000;
    letter-spacing: 5px;
    color: white;
    min-width: 280px;
    font-size: 25px;
    padding: 120px 30px 120px 30px;
}
#top_title p{
    font-size: 35px;
}
#top_title h1{
    margin: 0;
}
#home-services h3{
    text-align: center;
}
#home-services{
    max-width: 100%;
}
#home-services-wrap{
    display: flex;
    flex-wrap: wrap;
    gap: 50px;
    justify-content: center;
    min-width: 260px;
    flex-direction: row;
    margin: 50px 0 150px 0;
}
.home-services-square{
    width: 380px;
    min-width: 260px;
    height: max-content;
    margin: 50px 0 50px 0;
}
.home-services-square-img{
    height: 320px;
    width: 380px;
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 10px 10px 0 0;
}
.home-services-square-text{
    background-image:  linear-gradient(to left, var(--basic-dark-green), var(--basic-dark-green-2));
    text-align: center;
    color: white;
    padding: 20px;
    height: 70px;
    font-size: 25px;
    border-radius: 0 0 10px 10px;
}
.home-services-square a{
    transition: .2s ease;
    display: block;
}
.home-services-square a:focus, .home-services-square a:hover, .home-services-square a:active{
    outline: none;

    transform: translateY(-5%); 
}
.home-services-square-text:not(#help){
    padding-top: 20px;
}
.home-services-square #help{
    padding: 5px 0 0 0;
}
#home-opening-time ul{
    list-style-type: circle !important;
    margin: auto;
    width: max-content;
    min-width: 245px;
    max-width: calc(100% - 15px);
    overflow-wrap: break-word;
}
#home-opening-time ul li{
    padding: 10px 0 5px 10px;
    font-size: 1.1rem;
}
#home-opening-time p{
    text-align: center;
    font-size: 1.4rem;
    font-weight: 900;
}
    @media (max-width: 770px){
        #top_title #bottom-text{
            display: block;
        }
        .home-services-square{
            margin: 0;
        }
    }
    @media (max-width: 550px){
        #top_title{
            font-size: 0.9rem !important;
        }
        .home-services-square-img{
            width: 100%;
        }
        .home-services-square{
            width: 75%;
        }
        #home-opening-time ul{
            margin-left: 15px;
        }
    }
    @media (max-width: 440px){
        #top_title{
            padding: 90px 30px 90px 30px;
            font-size: 0.75rem !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        .home-services-square-img{
            height: 250px;
        }
        .home-services-square:not(:first-of-type) .home-services-square-text{
            height: 100px;
        }
        #home-opening-time ul li{
            margin: 0;
        }
    }
</style>
<script>
    export default {
        data(){
            return{
                currentImg: 0,
                imagesPreloadTable: [],
                images: ['/img/1.jpg', '/img/2.jpg', '/img/3.jpg'],
                imagesStyles: ["background-image: url('/img/1.jpg')", "background-image: url('/img/2.jpg')", "background-image: url('/img/3.jpg')"]
            }
        },
        mounted(){
            this.changeImg()

        },
        created(){
            this.preloadImg()
        },
        methods:{
            changeImg(){
                setInterval(() => {
                        if(document.hasFocus()) this.currentImg = (this.currentImg + 1) % this.images.length
                }, 5000);
            },
            preloadImg(){
                for(let i = 0; i<this.images.length ; i++){
                    this.imagesPreloadTable[i] = new Image()
                    this.imagesPreloadTable[i].src = this.images[i]
                }
            }
    }
}

</script>
