<script setup>
    import { createDOMCompilerError } from '@vue/compiler-dom';
import { stringify } from 'postcss';
import subH2 from '../components/subH2.vue'
import ContactDiv from '../components/contactDiv.vue';
</script>
<template>
    <subH2>Cennik</subH2>
    <div class="container-main">    
        <div id = "price">
            <table>
                <thead>
                    <tr>
                        <th>
                            Rodzaj usługi
                        </th>
                        <th>
                            Czas
                        </th>
                        <th>
                            Cena
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Terapia słowem
                        </td>
                        <td>
                            45 min
                        </td>
                        <td>
                            130 zł
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Pomoc w rozwiązywaniu problemów życiowych
                        </td>
                        <td>
                            45 min
                        </td>
                        <td>
                            130 zł
                        </td>
                    </tr>
                    <tr>
                        <td>
                            * Analiza i pomoc w postępowaniach przygotowawczych (Sprawy kryminalne)
                        </td>
                        <td>
                            45 min
                        </td>
                        <td>
                            150 zł
                        </td>
                    </tr>
                    <tr>
                        <td>
                            * Analiza i pomoc w postępowaniach o wykroczenia w ruchu drogowym
                        </td>
                        <td>
                            45 min
                        </td>
                        <td>
                            150 zł
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Opinia grafologiczna
                        </td>
                        <td>
                            45 min
                        </td>
                        <td>
                            500 zł
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <p id = "detective-services-price">
            <a href = "https://agencja-contra.pl/cennik/" target = "_blank">CENNIK USŁUG DETEKTYWISTYCZNYCH</a> 
        </p>
        <p id = "price-disclaimer">
           * Cena analizy i pomocy w postepowaniu, może się różnić w zależności od ilości zebranych materiałow - akt postępowania.
        </p>
    </div>
    <ContactDiv />
</template>

<style>
    #price{
        display: block;
        width: 100%;
        overflow-x: auto;
    }
    #price table{
        border-collapse: collapse;
        width: 100%;
        display: table;
        margin: auto;
        box-sizing: border-box;
        white-space: nowrap;
    }
    #price thead{
        font-size: 1.1rem;
    }
    #price tbody tr{
        -webkit-box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
        -moz-box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
        box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
    }
    #price tr td, th{
        text-align: left;
        height: 80px;
        vertical-align: center;
        padding: 0.1rem 30px 0.1rem 10px;
    }
    #price tbody tr:nth-child(odd){
        background-color: var(--basic-dark-white);
    }
    #price-disclaimer, #detective-services-price{
        text-align: center;
        margin: 40px 0 40px 0;
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
        #price table{
            table-layout: fixed;
            width: 900px;
            white-space: unset;
        }
        #price td, th:not(:first-of-type){
            width: 25%;
            text-align: center !important;
        }
        #price td:first-of-type{
            width: 35%;
            text-align: left !important;
        }
    }
    @media (max-width: 460px){
        #detective-services-price a{
            width: 90vw;
            
            font-size: 0.80rem;
        }
    }
</style>
<script>
export default {

}

</script>