<template>
    <div id = "contact-href-wrap">
        <router-link to =  "/Kontakt"  id = "contact-href"><fa icon = 'envelope' size = '1x'  id = 'svg-envelope'></fa><span class = 'text'>Zadaj pytanie</span></router-link>
    </div>
</template>

<style>
    #contact-href{
        border-radius: 25px;
        font-size: 20px;
        width: max-content;
        background-color: var(--basic-pink);
        opacity: 80%;
        transition : .2s ease-in-out;
        padding: 5px 10px 5px 10px;
        position: relative;
        bottom: 4px;
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
    }

</style>

<script>

</script>