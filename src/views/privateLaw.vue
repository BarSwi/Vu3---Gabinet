<script setup>
import SubH2 from '../components/subH2.vue';

</script>
<template>

    <main>
        <SubH2 fontChange = 'true'>Polityka Prywtaności</SubH2>
        <div class = 'container-main'>
            <div id = 'privacy-law-container'>
                <p>Niniejsza polityka prywatności opisuje zbiór zasad, według których są zbierane i przetwarzane dane osobowe witryny <a href = "https://www.gabinetdobreslowo.pl">https://www.gabinetdobreslowo.pl</a></p>
                <p>Administratonem strony jest nazwa firmy, z siedzibą adres, KRS: XXXXXXX, NIP: XXXXXXXXXX, REGON: XXXXXXXX</p>
                <p>Kontakt jest możliwy pod numerem <a href = "tel:+48605342428">605 342 428</a>, oraz pod adresem e-mail <a href = "mailto:przykladowy_mail@gmail.com">przykładowy_mail@gmail.com</a>.</p>
                <h3>1. Definicje:</h3>
                <ol>
                    <li>Administrator strony - Nazwa firmy, adres firmy, NIP KRS REGON</li>
                    <li>Strona - strona internetowa znajdująca się pod adresem https://www.gabinetdobreslowo.pl</li>
                </ol>   
                <h3>2. Przetwarzanie danych osobowych</h3>
                <ol>
                    <li>Użytkownik strony, ma możliwość przekazania swoich danych osobowych, takich jak: Numer telefonu, adres e-mail, imię i nazwisko, za pomocą formularzy znajdujących się na stronie.</li>
                    <li>Administrator gwarantuje bezpieczeństwo i poufność wszelkich przekazanych mu poprzez stronę danych osobowych.</li>
                    <li>Podanie danych przez użytkownika jest zawsze dobrowolne.</li>
                    <li>Dane przekazane przez użytkownika strony w ramach formularza kontaktowego, są przetwarzane w celu kontaktu z użytkownikiem.</li>
                    <li>Administrator nie udostępni powierzonych mu danych osobom trzecim.</li>
                    <li>Dane użytkownika są należycie chronione przed dostępem do nich podmiotów innych niż Administrator</li>
                    <li>Użytkownik posiada następujące uprawnienia:
                        <ul>
                            <li>- Prawo ograniczenia przetwarzania, lub usunięcia danych osobowych podanych przez użytkownika, którego te dane dotyczą</li>
                            <li>- Prawo do wycofania zgody na przetwarzanie danych osobowych użytkownika, którego te dane dotyczą</li>
                            <li>- Prawo do korekty danych, jeżeli są one nieprawidłowe, niekompletne lub uległy zmianie</li>
                        </ul>
                    </li>
                    <li>Dane są przechowywane przez okres niezbędny do wykonania umowy</li>
                    <li>Jeśli Administrator będzie planować przetwarzanie danych osobowych w celu innym niż cel, w którym dane osobowe zostały uzyskane, przed dalszym przetwarzaniem użytkownika, którego te dane dotyczą – o powyższym innym celu oraz udzieli wszystkich niezbędnych informacji z tym związanych.</li>
                </ol>
                <h3>3. Wykorzystywane technologie:</h3>
                <p>Na stronie stosowane są poniższe technologie śledzące działania wykonywane przez użytkownika w ramach poruszania się po stronie:</p>
                <p>Google Search Console, Google Analytics, Google Adwords - Wspomniane technologie wykorzystywane są w celu prowadzenia statystyk strony.</p>
            </div>

        </div>

    </main>

</template>
<style>
    #privacy-law-container{
        text-align: left;
        overflow-wrap: break-word;
        word-wrap: break-word;
    }
    #privacy-law-container a{
        color: var(--basic-dark-green-2);
        font-weight: 900;
    }
    #privacy-law-container p{
        margin: 0;
        padding: 3px;
    }
    #privacy-law-container ol li{
        padding-top: 12px;
        
    }
</style>