
<template>
    <div id = "contact-header">
        <h3>Masz pytanie?</h3>
        <p>Możesz nam je zadać używając formularza poniżej i postaramy się odpowiedzieć tak szybko jak to możliwe.</p>
    </div>
    <form id = "send-message-form">
        <div id = 'send-message-form-input-name' class = 'input-box'>
            <input id = 'fullName' type = 'text' class = 'input' placeholder = ' ' required v-model = 'nameInput'  />
            <label for = 'fullName' class = 'label'>Imię i nazwisko</label>
        </div>
        <div id = 'send-message-form-input-email' class = 'input-box'>
            <input id = 'emailAddress' type = 'email' class = 'input' placeholder = ' ' required />
            <label for = 'emailAddress' class = 'label'>Adres e-mail <span class = 'required'>*</span></label>
        </div>
        <div id = 'send-message-form-input-phone' class = 'input-box'>
            <input id = 'tel' type = 'tel' class = 'input' placeholder = ' '/>
            <label for = 'tel' class = 'label'>Numer telefonu (Niewymagane)</label>
        </div>
        <div id = 'send-messagea-form-input-message' class = 'input-box'>
            <textarea required  id = 'message' class = 'input' placeholder = ' ' v-model = 'messageInput' ></textarea>
            <label for =  'message' class = 'label'>Treść wiadomości</label>
        </div>
        <div id = "send-message-form-checkbox" class = 'input-box'>
            <label id = 'send-message-form-checkbox-label' tabindex = '0'>
                <input type = 'checkbox' id = 'legal-check' required  />
                <span @click = 'checkedFunc'>Wysyłając pytanie wyrażam dobrowolną zgodę na przetwarzanie moich danych osobowych przez NAZWA FIRMY z siedzibą w XYZ (kod-pocztowy), KRS XXXXXXXXXX, NIP XXX-XXX-XX-XX, REGON XXXXXXXXX</span>
            </label>
        </div>
        <div id = 'send-message-form-button-wrap' class = 'input-box'>
            <button id = 'send-message-form-button' :disabled = !enableBtn >Wyślij zapytanie</button>
        </div>

    </form>
</template>
<style>
    #send-message-form .required{
        position: relative;
        bottom: 2px;
        color: red;
    }
    #contact-header{
        padding: 0 0 5px 10px;
    }
    #contact-header h3{
        margin: 0;
    }
    #send-message-form{
        width: 100%;
        display: block;
        position: relative;
    }
    #send-message-form .input-box{
        position: relative;  
        padding: 15px 0 15px 10px;
        width: 100%;
    }
    #send-message-form .input{
        display: block;
        height: 55px;
        border: 1px solid grey;
        z-index: 1;
        font-size: 18px;
        border-radius: 2px;
        background-color: transparent;
        position: relative;
        padding: 15px;
        width: 100%;
    }
    #send-message-form .input:focus, #send-message-form .input:hover, #send-message-form .input:active{
        outline: none;
    }
    #send-message-form .input-box .label{
        font-size: 18px;
        max-width: 100%;
        position: absolute;
        transition: 0.2s ease;
        display: block;
        padding: 0 15px 0 15px;
        top: 32px;
        left: 15px;
    }
    #send-message-form .input-box .input:not(:placeholder-shown) + .label{
        transform: translateY(-26px);
        background-color: white;
        z-index: 1;
        font-size: 14px;
    }
    #send-message-form .input:focus + .label{
        transform: translateY(-26px);
        background-color: white;
        z-index: 1;
        font-size: 14px;
    }
    #send-message-form .input:not(#tel):valid{
        border: 1px solid #50c038;
    }
    #send-message-form .input:not(#tel):valid + .label{
        color: #50c038;
    }
    #send-message-form .input:not(:placeholder-shown):focus:invalid{
        border: 1px solid red;
    }
    #send-message-form .input:not(:placeholder-shown):focus:invalid + .label{
        color: red;
    }
    #send-message-form textarea{
        resize: none;
        height: 130px !important;
        padding: 10px;
        width: 100%;
    }
    #send-message-form-checkbox{
        padding-left: 35px !important;
        font-size: 0.7rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        line-height: 1rem;
    }
    #send-message-form-checkbox-label input{
        display: none;
    }
    #send-message-form-checkbox-label:hover, #send-message-form-checkbox-label:focus-within{
        cursor: pointer;
        outline: none;
    }
    #send-message-form-checkbox-label span:before{
        content: '';
        width: 7px;
        height: 10px;
        top: 18px;
        left: 15px;
        transform: translateY(200%);
        transition: .3s ease;
        display: block;
        border-right: 2px solid white;
        border-bottom: 2px solid white;
        position: absolute;
    }
    #send-message-form-checkbox-label span{
        display: block;
    }
    #send-message-form-checkbox-label span:after{
        content: '';
        background-color: transparent;
        width: 16px;
        transition: .2s ease;
        height: 16px;
        position: absolute;
        display: block;
        border-radius: 2px;
        top: 16px;
        left: 10px;
        border: 1px solid grey;
    }
    #send-message-form-checkbox-label input[type=checkbox]:checked + span:after{
        background-color: var(--basic-dark-green-2);
    }
    #send-message-form-checkbox-label input[type=checkbox]:checked + span:before{
        transform: translateY(0) rotate(35deg);
        z-index: 1;
    }
    #send-message-form-button{
        border: none;
        background-color: var(--basic-dark-green-2);
        border: 1px solid var(--basic-dark-green-2);
        display: block;
        margin: auto;
        font-size: 1rem;
        border-radius: 25px;
        color: white;
        transition: .2s ease;
        padding: 20px 35px 20px 35px;
        letter-spacing: 1px;
    }
    #send-message-form-button:disabled{
        opacity: .7;
        pointer-events: none;
    }
    #send-message-form-button:focus, #send-message-form-button:hover{
        cursor: pointer;
        outline: none;
        border: 1px solid var(--basic-light-green);
        -webkit-box-shadow: 0px 0px 15px 0px var(--basic-light-green);
        -moz-box-shadow: 0px 0px 15px 0px var(--basic-light-green);
        box-shadow: 0px 0px 15px 0px var(--basic-light-green);
    }
    @media (max-width: 900px){
        #send-message-form .input-box{
            min-width: 300px;
        }
    }
</style>
<script>
import { faTurkishLiraSign } from '@fortawesome/free-solid-svg-icons';

export default {
    data(){
        return{
            nameInput: '',
            emailValidate: true,
            messageInput: '',
            checked: false
        }
    },
    methods:{
        checkedFunc(){
            this.checked = !this.checked
        }
    },
    computed: {
        enableBtn() {
            return this.checked == true && this.emailValidate==true && this.nameInput.length > 2 && this.messageInput.length > 1 ? true : false
        }
    }
}
</script>