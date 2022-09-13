<script setup>
import subH2 from '../components/subH2.vue'
</script>
<template>
    <main>
    <subH2>Cennik</subH2>
    <div class="container-main">    
        <div class = "price">
            <table>
                <thead>
                    <tr>
                        <th>
                            Usługi w gabinecie
                        </th>
                        <th>
                            Czas
                        </th>
                        <th>
                            Cena (brutto)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in tableInfo">
                        <td>{{item.span}}</td>
                        <td>{{item.time}}</td>
                        <td>{{item.price}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <p id = "price-disclaimer">
           * Cena analizy i pomocy w postepowaniu, może się różnić w zależności od ilości zebranych materiałow - akt postępowania.
        </p>
        <div id = "price-detective" class = 'price'>
            <table>
                <thead>
                    <tr>
                        <th>
                            Usługi detektywistyczne
                        </th>
                        <th>
                            Czas
                        </th>
                        <th>
                            Cena (netto)
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in tableInfoDetective">
                        <td>{{item.span}}</td>
                        <td v-if="item.colspan" colspan = '2'>{{item.colspan}}</td>
                        <td v-if="!item.colspan">{{item.time}}</td>
                        <td v-if="!item.colspan">{{item.price}}</td>
                    </tr>

                </tbody>
            </table>
        </div>


    </div>
    </main>
</template>

<style>

    .price{
        display: block;
        width: 100%;
        min-width: 260px;
        overflow-x: auto;
    }
    .price table{
        border-collapse: collapse;
        width: 100%;
        display: table;
        margin: auto;
        box-sizing: border-box;
        /* white-space: nowrap; */
    }
    .price table td:first-of-type{
        width: 300px;
        word-wrap: break-word !important;
        padding-right: 15%;
    }
    .price table td:not(:first-of-type){
        width: 15%;
    }
    .price thead{
        font-size: 1.1rem;
    }
    .price tbody tr{
        -webkit-box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
        -moz-box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
        box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
    }
    .price tr td, th{
        text-align: left;
        height: 80px;
        max-width: 30%;
        padding: 0.1rem 30px 0.1rem 30px;
    }
    .price tr td:not(:first-of-type), th:not(:first-of-type){
        text-align: center;
    }
    .price tbody tr:nth-child(odd){
        background-color: var(--basic-dark-white);
    }
    #price-disclaimer, #detective-services-price{
        text-align: center;
        margin: 3rem 0 3rem 0;
    }
    #detective-services-price{
        padding: 10px;
        font-weight: 900;
        margin: 30px auto 0 auto;
        width: max-content;
        display: block;
        font-size: 1.1rem;
    }
    #detective-services-price a{
        overflow-wrap: break-word;
        background-color: var(--basic-dark-green);
        width: 420px;
        min-width: 200px;
        display: block;
        transition: background-color .2s ease;
        padding: 20px;
        border-radius: 25px;
    }
    #detective-services-price a:hover, #detective-services-price a:focus, #detective-services-price a:active{
        outline: none;
        border: none;
        background-color: var(--basic-dark-green-2);
    }
    @media (max-width: 1100px){
        .price table{
            table-layout: fixed;
            width: 900px;
            white-space: unset;
        }
        .price td, th:not(:first-of-type){
            width: 20%;
        }
    }

</style>
<script>
export default {
    data(){
        return{
            tableInfo: 
            [{span: 'Terapia słowem', time: '45 min', price: '130 zł'}, 
            {span: 'Pomoc w rozwiązywaniu problemów życiowych', time: '45 min', price: '130 zł'},
            {span: '* Analiza i pomoc w postępowaniach przygotowawczych (Sprawy kryminalne)', time: '45 min', price: '150 zł'},
            {span: '* Analiza i pomoc w postępowaniach o wykroczenia w ruchu drogowym', time: '45 min', price: '150 zł'},
            {span: 'Opinia grafologiczna', time: '45 min', price: '500 zł'}],

            tableInfoDetective:
             [{span: 'Obserwacja osób, miejsca, mienia', time: '1 dzień',  price: 'od 1000 zł'},
            {span: 'Obserwacja osób, miejsca, mienia poza granicami RP', colspan: 'Wycena indywidualna'},
            {span: 'Kontrobserwacja', time: '1 dzień',  price: '1200 zł'},
            {span: 'Potwierdzenie danych personalnych osoby', time: '7 dni',  price: '1000 zł'},
            {span: 'Wywiad o osobie fizyczne-prawnej', time: '3 - 5 dni',  price: 'od 500 zł'},
            {span: 'Ustalenie aktualnego nr tel. lub właściciela', time: '7 - 14 dni',  price: 'od 500 zł'},
            {span: 'Ustalenie PESEL', time: '7 dni',  price: 'od 500 zł'},
            {span: 'Ustalenie właściciela pojazdu', time: '7 - 14 dni',  price: 'od 500 zł'},
            {span: 'Ustalenie członków rodziny', time: '7 - 14 dni',  price: 'od 500 zł'},
            {span: 'Ustalenie adresu zameldowania', time: '7 - 14 dni',  price: 'od 500 zł'},
            {span: 'Ustalenie faktycznego adresu zamieszkania', time: '7 - 14 dni',  price: '1800 zł'},
            {span: 'Ustalenie oficjalnego miejsca pracy', time: '7 - 14 dni',  price: '1800 zł'},
            {span: 'Poszukiwanie osób zaginionych', colspan: 'Wycena indywidualna'},
            {span: 'Poszukiwanie ukrytych ruchomości', colspan: 'Wycena indywidualna'},
            {span: 'Poszukiwanie posiadanych ruchomości i KW', time: '7 - 14 dni',  price: 'od 500zł'},
            {span: 'Ustalenie składników majątkowych', time: '7 - 14 dni',  price: 'od 500zł'},
            {span: 'Odzyskiwanie danych telefon, laptop, dysk', colspan: 'Wycena indywidualna'},
            {span: 'Na życzenie klienta sporządzamy szczegółowy raport związany ze składnikami majątkowymi w skład wchodzą ruchomości i nieruchomości', colspan: 'Wycena indywidualna'},
            {span: 'Wykrywanie podsłuchów, gps i innych tego typu podobnych rzeczy', colspan: 'Wycena indywidualna'}]
        }
    }
    

}

</script>