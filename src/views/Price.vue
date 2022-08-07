<script setup>
    import { stringify } from 'postcss';
import subH2 from '../components/subH2.vue'
</script>
<template>
    <subH2>Cennik</subH2>
    <div id="container">
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
        <br>
        <p id = "price_disclaimer">
           * Cena analizy i pomocy w postepowaniu, może się różnić w zależności od ilości zebranych materiałow - akt postępowania.
        </p>
    </div>
</template>

<style>
    #price{
        display: block;
        overflow-X:auto;
        width: 100%;
    }
    table{
        border-collapse: collapse;
        width: 100%;
        display: table;
        margin: auto;
        box-sizing: border-box;
        white-space: nowrap;
    }
    thead{
        font-size: 1.1rem;
    }
    tbody tr{
        -webkit-box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
        -moz-box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
        box-shadow: 0px -3px 2px -1px rgba(66, 68, 90, 1);
    }
    td, th{
        text-align: left;
        height: 80px;
        vertical-align: center;
        padding: 0.1rem 30px 0.1rem 10px;
    }
    tbody tr:nth-child(odd){
        background-color: var(--basic-dark-white);
    }
    #price_disclaimer{
        text-align: center;
    }
    @media (max-width: 1100px){
        table{
            table-layout: fixed;
            width: 900px;
            white-space: unset;
        }
        td, th:not(:first-of-type){
            width: 25%;
            text-align: center;
        }
        td:first-of-type{
            width: 35%;
            text-align: left
        }
        th:last-of-type{
            text-align: center;
        }
    }
</style>
<script>

</script>