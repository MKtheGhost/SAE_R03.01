<?php

echo <<< HTML

<footer>
    <div class="footer">
        <div class="footer-text">
            <h1 class="footer-title">FNAPSY</h1>
            <div class="text">
                <div class="col">
                    <p>33 rue Daviel<br>75013 Paris</p>
                    <br>
                    <p>Lundi à Vendredi 9h-13h<br>01 43 64 85 42</p>
                </div>
                <div class="col">
                    <p>fnapsy@yahoo.fr</p>
                </div>
            </div>
        </div>
        <div class="footer-map">
        <iframe id="footer-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2277.3174749972513!2d2.342917204601087!3d48.828334517788036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67197b65e5c49%3A0x13952cf61fc24881!2s33%20Rue%20Daviel%2C%2075013%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1735744720572!5m2!1sen!2sus" width="272" height="229" style="border:10px solid #7a5d85; filter: invert(90%)" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>
</footer>

<style>
    .footer{
        background-color : #436957;
        padding : 20px;
        display : flex;
    }

    .footer-title{
        font-size : 50px;
        padding : 0;
        margin : 0 0 0 10px;
    }
    
    .footer-map{
        margin-left : auto;
        margin-right : 50px;
    }

    .footer-text{
        margin-left : 50px;
        font-family: "Source Sans 3", serif;
        font-weight : 500;
    }
    .text{
        display : flex;
        float : left;
    }
    .col{
        margin : 0 20px;
    }
</style>


HTML;