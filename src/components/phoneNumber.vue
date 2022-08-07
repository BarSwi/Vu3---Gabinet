<template>
            <div id="phone-href-wrap">
                <a href = "tel:+48605342428" id = 'phone-href'><fa icon = "phone-flip" size = '1x' style = "transform: rotate(-220deg)" id = 'navbar-bottom-svg-phone'/> <span class = 'text'>605 342 428</span></a>
            </div>
</template>
<style>
    #phone-href{
        border-radius: 25px;
        font-size: 20px;
        width: max-content;
        opacity: 80%;
        transition : .2s ease-in-out;
        padding: 5px 10px 5px 10px;
        position: relative;
        bottom: 4px;
        background-color: var(--basic-orange);
    }
    #phone-href:hover, #phone-href:focus{
        outline: none;
        opacity: 1;
    }
    #navbar-bottom-svg-phone{
        margin-right: 10px;
        margin-left: 10px;
    }
    #phone-href-wrap{
        color: white;
        display: flex;
    }
    @media (max-width: 500px){
        #phone-href .text{
            display: none;
        }
    }

</style>