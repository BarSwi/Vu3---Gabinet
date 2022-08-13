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
        height: 40px;
        opacity: 80%;
        transition : .2s ease-in-out;
        padding: 7px 10px 0px 10px;
        position: relative;
        background-color: var(--basic-orange);
    }
    #phone-href:hover, #phone-href:focus{
        outline: none;
        opacity: 1;
    }
    #navbar-bottom-svg-phone{
        margin-right: 5px;
        margin-left: 5px;
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