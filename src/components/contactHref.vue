<template>
    <div id = "contact-href-wrap">
        <router-link to =  "/Kontakt"  id = "contact-href"><fa class = 'envelope-icon' icon = 'rectangle-list' size = '1x'  id = 'svg-envelope'></fa><span class = 'text'>Zadaj pytanie</span></router-link>
    </div>
</template>

<style>
    #contact-href{
        border-radius: 25px;
        font-size: 20px;
        height: 40px;
        width: max-content;
        background-color: var(--basic-pink);
        opacity: 80%;
        transition : .2s ease-in-out;
        padding: 7px 10px 0px 10px;
        position: relative;
    }
    #contact-href:hover, #contact-href:focus{
        outline: none;
        opacity: 1;
    }
    #svg-envelope{
        margin-right: 10px;
        margin-left: 10px;
    }
    #contact-href-wrap{
        color: white;
        display: flex;
    }
    @media (max-width: 500px){
        #contact-href .text{
            display: none;

        }
        #contact-href .envelope-icon{
            margin: 0 5px 0 5px;
        }
    }

</style>

<script>

</script>