
<!DOCTYPE html>
<!-- saved from url=(0056)http://localhost/CHECKER%20SANTANDER/Checker%20Full.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Required meta tags always come first -->

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> CHECKER MP</title>
        <link rel="icon" type="image/png" href="http://full.thequeenchk.xyz/assets/images/favicon.png">

        <!--Core CSS -->
        <link rel="stylesheet" href="checker_santander_files/bulma.css">
        <link rel="stylesheet" href="checker_santander_files/core.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <style>

            .shop-wrapper{
                width: 100%;
                float: right;
            }
            .resultados_finais{
                font-size: 1.5em;
            }
            .account-title{
                width: 100%;
            }
            #titulo_chk{
                font-size: 2vw;
                color: #DDDDDD;
                padding: 1 0%;
            }


            .status_alias{
                width: 100%;
                float: left;
                margin: 0 auto;
                padding: 0 0.7%;
            }

            #status_choise{
                width: 103%;
                font-size: 1.1em;
                float: right;
                padding: auto;
                margin: 0 auto;
            }
            .container{
                width: 100%;
                margin: 0 auto;
                padding: 0 1%;
            }

            #lista{
                padding: 1%;
                width: 100%;
                float: left;
                height: 250px;
            }

            #resultsmag{
                width: 100%;
                margin: 0 auto;
            }
            #reprovadas{
                font-size: 1.2em;
            }
            #aprovadas{
                font-size: 1.2em;
            }
            .shop-wrapper{
                background-color: #1E1E1E;
            }
            body{
                background-color: #1E1E1E;
            }
            h2{
                color: #DDDDDD;
            }

            .pageloader.is-active{
                width: 100%;
                margin-left: 0px;
                margin: 0px;
            }

            #iniciar_check{
                font-size: 1.2em;
                width: 100%;
                height: 65px;
                border-color: #DDDDDD;
                background-color: #DDDDDD;
                color: #1E1E1E;
            }
            #parar_check{
                font-size: 1.2em;
                width: 100%;
                height: 65px;
                border-color: #DDDDDD;
                background-color: #DDDDDD;
                color: #1E1E1E;
            }

        </style>


        <style type="text/css">.jp-card.jp-card-safari.jp-card-identified .jp-card-front:before, .jp-card.jp-card-safari.jp-card-identified .jp-card-back:before {
                background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
                background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%); }

            .jp-card.jp-card-ie-10.jp-card-flipped, .jp-card.jp-card-ie-11.jp-card-flipped {
                -webkit-transform: 0deg;
                -moz-transform: 0deg;
                -ms-transform: 0deg;
                -o-transform: 0deg;
                transform: 0deg; }
            .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-front, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-front {
                -webkit-transform: rotateY(0deg);
                -moz-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                -o-transform: rotateY(0deg);
                transform: rotateY(0deg); }
            .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back {
                -webkit-transform: rotateY(0deg);
                -moz-transform: rotateY(0deg);
                -ms-transform: rotateY(0deg);
                -o-transform: rotateY(0deg);
                transform: rotateY(0deg); }
            .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back:after, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back:after {
                left: 18%; }
            .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-cvc, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-cvc {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg);
                left: 5%; }
            .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-shiny, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-shiny {
                left: 84%; }
            .jp-card.jp-card-ie-10.jp-card-flipped .jp-card-back .jp-card-shiny:after, .jp-card.jp-card-ie-11.jp-card-flipped .jp-card-back .jp-card-shiny:after {
                left: -480%;
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg); }

            .jp-card.jp-card-ie-10.jp-card-amex .jp-card-back, .jp-card.jp-card-ie-11.jp-card-amex .jp-card-back {
                display: none; }

            .jp-card-logo {
                height: 36px;
                width: 60px;
                font-style: italic; }
            .jp-card-logo, .jp-card-logo:before, .jp-card-logo:after {
                box-sizing: border-box; }

            .jp-card-logo.jp-card-amex {
                text-transform: uppercase;
                font-size: 4px;
                font-weight: bold;
                color: white;
                background-image: repeating-radial-gradient(circle at center, #FFF 1px, #999 2px);
                background-image: repeating-radial-gradient(circle at center, #FFF 1px, #999 2px);
                border: 1px solid #EEE; }
            .jp-card-logo.jp-card-amex:before, .jp-card-logo.jp-card-amex:after {
                width: 28px;
                display: block;
                position: absolute;
                left: 16px; }
            .jp-card-logo.jp-card-amex:before {
                height: 28px;
                content: "american";
                top: 3px;
                text-align: left;
                padding-left: 2px;
                padding-top: 11px;
                background: #267AC3; }
            .jp-card-logo.jp-card-amex:after {
                content: "express";
                bottom: 11px;
                text-align: right;
                padding-right: 2px; }

            .jp-card.jp-card-amex.jp-card-flipped {
                -webkit-transform: none;
                -moz-transform: none;
                -ms-transform: none;
                -o-transform: none;
                transform: none; }

            .jp-card.jp-card-amex.jp-card-identified .jp-card-front:before, .jp-card.jp-card-amex.jp-card-identified .jp-card-back:before {
                background-color: #108168; }

            .jp-card.jp-card-amex.jp-card-identified .jp-card-front .jp-card-logo.jp-card-amex {
                opacity: 1; }

            .jp-card.jp-card-amex.jp-card-identified .jp-card-front .jp-card-cvc {
                visibility: visible; }

            .jp-card.jp-card-amex.jp-card-identified .jp-card-front:after {
                opacity: 1; }

            .jp-card-logo.jp-card-discover {
                background: #FF6600;
                color: #111;
                text-transform: uppercase;
                font-style: normal;
                font-weight: bold;
                font-size: 10px;
                text-align: center;
                overflow: hidden;
                z-index: 1;
                padding-top: 9px;
                letter-spacing: .03em;
                border: 1px solid #EEE; }
            .jp-card-logo.jp-card-discover:before, .jp-card-logo.jp-card-discover:after {
                content: " ";
                display: block;
                position: absolute; }
            .jp-card-logo.jp-card-discover:before {
                background: white;
                width: 200px;
                height: 200px;
                border-radius: 200px;
                bottom: -5%;
                right: -80%;
                z-index: -1; }
            .jp-card-logo.jp-card-discover:after {
                width: 8px;
                height: 8px;
                border-radius: 4px;
                top: 10px;
                left: 27px;
                background-color: #FF6600;
                background-image: -webkit-radial-gradient(#FF6600, #fff);
                background-image: radial-gradient(  #FF6600, #fff);
                content: "network";
                font-size: 4px;
                line-height: 24px;
                text-indent: -7px; }

            .jp-card .jp-card-front .jp-card-logo.jp-card-discover {
                right: 12%;
                top: 18%; }

            .jp-card.jp-card-discover.jp-card-identified .jp-card-front:before, .jp-card.jp-card-discover.jp-card-identified .jp-card-back:before {
                background-color: #86B8CF; }

            .jp-card.jp-card-discover.jp-card-identified .jp-card-logo.jp-card-discover {
                opacity: 1; }

            .jp-card.jp-card-discover.jp-card-identified .jp-card-front:after {
                -webkit-transition: 400ms;
                -moz-transition: 400ms;
                transition: 400ms;
                content: " ";
                display: block;
                background-color: #FF6600;
                background-image: -webkit-linear-gradient(#FF6600, #ffa366, #FF6600);
                background-image: linear-gradient(#FF6600, #ffa366, #FF6600);
                height: 50px;
                width: 50px;
                border-radius: 25px;
                position: absolute;
                left: 100%;
                top: 15%;
                margin-left: -25px;
                box-shadow: inset 1px 1px 3px 1px rgba(0, 0, 0, 0.5); }

            .jp-card-logo.jp-card-visa {
                text-transform: uppercase;
                color: white;
                text-align: center;
                font-weight: bold;
                font-size: 24px;
                line-height: 18px;
                margin-top: 5px; }
            .jp-card-logo.jp-card-visa:before, .jp-card-logo.jp-card-visa:after {
                content: " ";
                display: block;
                width: 100%;
                height: 25%; }
            .jp-card-logo.jp-card-visa:before {
                position: absolute;
                left: -4px;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 0 12px 6px 0;
                border-color: transparent #ffffff transparent transparent; }

            .jp-card.jp-card-visa.jp-card-identified .jp-card-front:before, .jp-card.jp-card-visa.jp-card-identified .jp-card-back:before {
                background-color: #191278; }

            .jp-card.jp-card-visa.jp-card-identified .jp-card-logo.jp-card-visa {
                opacity: 1;
                box-shadow: none; }

            .jp-card-logo.jp-card-visaelectron {
                background: white;
                text-transform: uppercase;
                color: #1A1876;
                text-align: center;
                font-weight: bold;
                font-size: 15px;
                line-height: 18px; }
            .jp-card-logo.jp-card-visaelectron:before, .jp-card-logo.jp-card-visaelectron:after {
                content: " ";
                display: block;
                width: 100%;
                height: 25%; }
            .jp-card-logo.jp-card-visaelectron:before {
                background: #1A1876; }
            .jp-card-logo.jp-card-visaelectron:after {
                background: #E79800; }
            .jp-card-logo.jp-card-visaelectron .elec {
                float: right;
                font-family: arial;
                font-size: 9px;
                margin-right: 1px;
                margin-top: -5px;
                text-transform: none; }

            .jp-card.jp-card-visaelectron.jp-card-identified .jp-card-front:before, .jp-card.jp-card-visaelectron.jp-card-identified .jp-card-back:before {
                background-color: #191278; }

            .jp-card.jp-card-visaelectron.jp-card-identified .jp-card-logo.jp-card-visaelectron {
                opacity: 1; }

            .jp-card-logo.jp-card-mastercard {
                color: white;
                font-style: normal;
                text-transform: lowercase;
                font-weight: bold;
                text-align: center;
                font-size: 9px;
                line-height: 84px;
                z-index: 1;
                text-shadow: 1px 1px rgba(0, 0, 0, 0.6); }
            .jp-card-logo.jp-card-mastercard:before, .jp-card-logo.jp-card-mastercard:after {
                content: " ";
                display: block;
                width: 36px;
                top: 0;
                position: absolute;
                height: 36px;
                border-radius: 18px; }
            .jp-card-logo.jp-card-mastercard:before {
                left: 0;
                background: #EB001B;
                z-index: -1;
                opacity: 0.9; }
            .jp-card-logo.jp-card-mastercard:after {
                right: 0;
                background: #FF5F00;
                z-index: -2; }

            .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front .jp-card-logo.jp-card-mastercard, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back .jp-card-logo.jp-card-mastercard {
                box-shadow: none; }

            .jp-card.jp-card-mastercard.jp-card-identified .jp-card-front:before, .jp-card.jp-card-mastercard.jp-card-identified .jp-card-back:before {
                background-color: #0061A8; }

            .jp-card.jp-card-mastercard.jp-card-identified .jp-card-logo.jp-card-mastercard {
                opacity: 1; }

            .jp-card-logo.jp-card-maestro {
                color: white;
                font-style: normal;
                text-transform: lowercase;
                font-weight: bold;
                text-align: center;
                font-size: 14px;
                line-height: 84px;
                z-index: 1;
                text-shadow: 1px 1px rgba(0, 0, 0, 0.6); }
            .jp-card-logo.jp-card-maestro:before, .jp-card-logo.jp-card-maestro:after {
                content: " ";
                display: block;
                width: 36px;
                top: 0;
                position: absolute;
                height: 36px;
                border-radius: 18px; }
            .jp-card-logo.jp-card-maestro:before {
                left: 0;
                background: #EB001B;
                z-index: -2; }
            .jp-card-logo.jp-card-maestro:after {
                right: 0;
                background: #00A2E5;
                z-index: -1;
                opacity: 0.8; }

            .jp-card.jp-card-maestro.jp-card-identified .jp-card-front .jp-card-logo.jp-card-maestro, .jp-card.jp-card-maestro.jp-card-identified .jp-card-back .jp-card-logo.jp-card-maestro {
                box-shadow: none; }

            .jp-card.jp-card-maestro.jp-card-identified .jp-card-front:before, .jp-card.jp-card-maestro.jp-card-identified .jp-card-back:before {
                background-color: #0B2C5F; }

            .jp-card.jp-card-maestro.jp-card-identified .jp-card-logo.jp-card-maestro {
                opacity: 1; }

            .jp-card-logo.jp-card-dankort {
                width: 60px;
                height: 36px;
                padding: 3px;
                border-radius: 8px;
                border: #000000 1px solid;
                background-color: #FFFFFF; }
            .jp-card-logo.jp-card-dankort .dk {
                position: relative;
                width: 100%;
                height: 100%;
                overflow: hidden; }
            .jp-card-logo.jp-card-dankort .dk:before {
                background-color: #ED1C24;
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 6px; }
            .jp-card-logo.jp-card-dankort .dk:after {
                content: '';
                position: absolute;
                top: 50%;
                margin-top: -7.7px;
                right: 0;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 7px 7px 10px 0;
                border-color: transparent #ED1C24 transparent transparent;
                z-index: 1; }
            .jp-card-logo.jp-card-dankort .d, .jp-card-logo.jp-card-dankort .k {
                position: absolute;
                top: 50%;
                width: 50%;
                display: block;
                height: 15.4px;
                margin-top: -7.7px;
                background: white; }
            .jp-card-logo.jp-card-dankort .d {
                left: 0;
                border-radius: 0 8px 10px 0; }
            .jp-card-logo.jp-card-dankort .d:before {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                display: block;
                background: #ED1C24;
                border-radius: 2px 4px 6px 0px;
                height: 5px;
                width: 7px;
                margin: -3px 0 0 -4px; }
            .jp-card-logo.jp-card-dankort .k {
                right: 0; }
            .jp-card-logo.jp-card-dankort .k:before, .jp-card-logo.jp-card-dankort .k:after {
                content: '';
                position: absolute;
                right: 50%;
                width: 0;
                height: 0;
                border-style: solid;
                margin-right: -1px; }
            .jp-card-logo.jp-card-dankort .k:before {
                top: 0;
                border-width: 8px 5px 0 0;
                border-color: #ED1C24 transparent transparent transparent; }
            .jp-card-logo.jp-card-dankort .k:after {
                bottom: 0;
                border-width: 0 5px 8px 0;
                border-color: transparent transparent #ED1C24 transparent; }

            .jp-card.jp-card-dankort.jp-card-identified .jp-card-front:before, .jp-card.jp-card-dankort.jp-card-identified .jp-card-back:before {
                background-color: #0055C7; }

            .jp-card.jp-card-dankort.jp-card-identified .jp-card-logo.jp-card-dankort {
                opacity: 1; }

            .jp-card-logo.jp-card-elo {
                height: 50px;
                width: 50px;
                border-radius: 100%;
                background: black;
                color: white;
                text-align: center;
                text-transform: lowercase;
                font-size: 21px;
                font-style: normal;
                letter-spacing: 1px;
                font-weight: bold;
                padding-top: 13px; }
            .jp-card-logo.jp-card-elo .e, .jp-card-logo.jp-card-elo .l, .jp-card-logo.jp-card-elo .o {
                display: inline-block;
                position: relative; }
            .jp-card-logo.jp-card-elo .e {
                -webkit-transform: rotate(-15deg);
                -moz-transform: rotate(-15deg);
                -ms-transform: rotate(-15deg);
                -o-transform: rotate(-15deg);
                transform: rotate(-15deg); }
            .jp-card-logo.jp-card-elo .o {
                position: relative;
                display: inline-block;
                width: 12px;
                height: 12px;
                right: 0;
                top: 7px;
                border-radius: 100%;
                background-image: -webkit-linear-gradient( yellow 50%, red 50%);
                background-image: linear-gradient( yellow 50%, red 50%);
                -webkit-transform: rotate(40deg);
                -moz-transform: rotate(40deg);
                -ms-transform: rotate(40deg);
                -o-transform: rotate(40deg);
                transform: rotate(40deg);
                text-indent: -9999px; }
            .jp-card-logo.jp-card-elo .o:before {
                content: "";
                position: absolute;
                width: 49%;
                height: 49%;
                background: black;
                border-radius: 100%;
                text-indent: -99999px;
                top: 25%;
                left: 25%; }

            .jp-card.jp-card-elo.jp-card-identified .jp-card-front:before, .jp-card.jp-card-elo.jp-card-identified .jp-card-back:before {
                background-color: #6F6969; }

            .jp-card.jp-card-elo.jp-card-identified .jp-card-logo.jp-card-elo {
                opacity: 1; }

            .jp-card-logo.jp-card-jcb {
                border-radius: 5px 0px 5px 0px;
                -moz-border-radius: 5px 0px 5px 0px;
                -webkit-border-radius: 5px 0px 5px 0px;
                background-color: white;
                font-style: normal;
                color: white;
                width: 50px;
                padding: 2px 0 0 2px; }
            .jp-card-logo.jp-card-jcb > div {
                width: 15px;
                margin-right: 1px;
                display: inline-block;
                text-align: center;
                text-shadow: 1px 1px rgba(0, 0, 0, 0.6);
                border-radius: 5px 0px 5px 0px;
                -moz-border-radius: 5px 0px 5px 0px;
                -webkit-border-radius: 5px 0px 5px 0px; }
            .jp-card-logo.jp-card-jcb > div:before, .jp-card-logo.jp-card-jcb > div:after {
                content: " ";
                display: block;
                height: 8px; }
            .jp-card-logo.jp-card-jcb > div.j {
                background-color: #000063;
                background-image: -webkit-linear-gradient(left, #000063, #008cff);
                background-image: linear-gradient(to right,#000063, #008cff); }
            .jp-card-logo.jp-card-jcb > div.c {
                background-color: #630000;
                background-image: -webkit-linear-gradient(left, #630000, #ff008d);
                background-image: linear-gradient(to right,#630000, #ff008d); }
            .jp-card-logo.jp-card-jcb > div.b {
                background-color: #006300;
                background-image: -webkit-linear-gradient(left, #006300, #00ff00);
                background-image: linear-gradient(to right,#006300, #00ff00); }

            .jp-card.jp-card-jcb.jp-card-identified .jp-card-front:before, .jp-card.jp-card-jcb.jp-card-identified .jp-card-back:before {
                background-color: #CB8000; }

            .jp-card.jp-card-jcb.jp-card-identified .jp-card-logo.jp-card-jcb {
                opacity: 1;
                box-shadow: none; }

            .jp-card-logo.jp-card-dinersclub {
                font-family: serif;
                height: 40px;
                width: 100px;
                color: white;
                font-size: 17px;
                font-style: normal;
                letter-spacing: 1px; }
            .jp-card-logo.jp-card-dinersclub::before, .jp-card-logo.jp-card-dinersclub::after {
                display: block;
                position: relative; }
            .jp-card-logo.jp-card-dinersclub::before {
                content: 'Diners Club'; }
            .jp-card-logo.jp-card-dinersclub::after {
                content: 'International';
                text-transform: uppercase;
                font-size: 0.6em; }

            .jp-card.jp-card-dinersclub .jp-card-front .jp-card-logo {
                box-shadow: none !important; }

            .jp-card.jp-card-dinersclub.jp-card-identified .jp-card-front:before, .jp-card.jp-card-dinersclub.jp-card-identified .jp-card-back:before {
                background-color: #999; }

            .jp-card.jp-card-dinersclub.jp-card-identified .jp-card-logo.jp-card-dinersclub {
                opacity: 1; }

            .jp-card-container {
                -webkit-perspective: 1000px;
                -moz-perspective: 1000px;
                perspective: 1000px;
                width: 350px;
                max-width: 100%;
                height: 200px;
                margin: auto;
                z-index: 1;
                position: relative; }

            .jp-card {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                line-height: 1;
                position: relative;
                width: 100%;
                height: 100%;
                min-width: 315px;
                border-radius: 10px;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transition: all 400ms linear;
                -moz-transition: all 400ms linear;
                transition: all 400ms linear; }
            .jp-card > *, .jp-card > *:before, .jp-card > *:after {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                font-family: inherit; }
            .jp-card.jp-card-flipped {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg); }
            .jp-card .jp-card-front, .jp-card .jp-card-back {
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-transition: all 400ms linear;
                -moz-transition: all 400ms linear;
                transition: all 400ms linear;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                overflow: hidden;
                border-radius: 10px;
                background: #DDD; }
            .jp-card .jp-card-front:before, .jp-card .jp-card-back:before {
                content: " ";
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                opacity: 0;
                border-radius: 10px;
                -webkit-transition: all 400ms ease;
                -moz-transition: all 400ms ease;
                transition: all 400ms ease; }
            .jp-card .jp-card-front:after, .jp-card .jp-card-back:after {
                content: " ";
                display: block; }
            .jp-card .jp-card-front .jp-card-display, .jp-card .jp-card-back .jp-card-display {
                color: white;
                font-weight: normal;
                opacity: 0.5;
                -webkit-transition: opacity 400ms linear;
                -moz-transition: opacity 400ms linear;
                transition: opacity 400ms linear; }
            .jp-card .jp-card-front .jp-card-display.jp-card-focused, .jp-card .jp-card-back .jp-card-display.jp-card-focused {
                opacity: 1;
                font-weight: 700; }
            .jp-card .jp-card-front .jp-card-cvc, .jp-card .jp-card-back .jp-card-cvc {
                font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
                font-size: 14px; }
            .jp-card .jp-card-front .jp-card-shiny, .jp-card .jp-card-back .jp-card-shiny {
                width: 50px;
                height: 35px;
                border-radius: 5px;
                background: #CCC;
                position: relative; }
            .jp-card .jp-card-front .jp-card-shiny:before, .jp-card .jp-card-back .jp-card-shiny:before {
                content: " ";
                display: block;
                width: 70%;
                height: 60%;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                background: #d9d9d9;
                position: absolute;
                top: 20%; }
            .jp-card .jp-card-front .jp-card-logo {
                position: absolute;
                opacity: 0;
                right: 5%;
                top: 8%;
                -webkit-transition: 400ms;
                -moz-transition: 400ms;
                transition: 400ms; }
            .jp-card .jp-card-front .jp-card-lower {
                width: 80%;
                position: absolute;
                left: 10%;
                bottom: 30px; }
            @media only screen and (max-width: 480px) {
                .jp-card .jp-card-front .jp-card-lower {
                    width: 90%;
                    left: 5%; } }
            .jp-card .jp-card-front .jp-card-lower .jp-card-cvc {
                visibility: hidden;
                float: right;
                position: relative;
                bottom: 5px; }
            .jp-card .jp-card-front .jp-card-lower .jp-card-number {
                font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
                font-size: 24px;
                clear: both;
                margin-bottom: 30px; }
            .jp-card .jp-card-front .jp-card-lower .jp-card-expiry {
                font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
                letter-spacing: 0em;
                position: relative;
                float: right;
                width: 25%; }
            .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:before, .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:after {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-weight: bold;
                font-size: 7px;
                white-space: pre;
                display: block;
                opacity: .5; }
            .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:before {
                content: attr(data-before);
                margin-bottom: 2px;
                font-size: 7px;
                text-transform: uppercase; }
            .jp-card .jp-card-front .jp-card-lower .jp-card-expiry:after {
                position: absolute;
                content: attr(data-after);
                text-align: right;
                right: 100%;
                margin-right: 5px;
                margin-top: 2px;
                bottom: 0; }
            .jp-card .jp-card-front .jp-card-lower .jp-card-name {
                text-transform: uppercase;
                font-family: "Bitstream Vera Sans Mono", Consolas, Courier, monospace;
                font-size: 20px;
                max-height: 45px;
                position: absolute;
                bottom: 0;
                width: 190px;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: horizontal;
                overflow: hidden;
                text-overflow: ellipsis; }
            .jp-card .jp-card-back {
                -webkit-transform: rotateY(180deg);
                -moz-transform: rotateY(180deg);
                -ms-transform: rotateY(180deg);
                -o-transform: rotateY(180deg);
                transform: rotateY(180deg); }
            .jp-card .jp-card-back .jp-card-bar {
                background-color: #444;
                background-image: -webkit-linear-gradient(#444, #333);
                background-image: linear-gradient(#444, #333);
                width: 100%;
                height: 20%;
                position: absolute;
                top: 10%; }
            .jp-card .jp-card-back:after {
                content: " ";
                display: block;
                background-color: #FFF;
                background-image: -webkit-linear-gradient(#FFF, #FFF);
                background-image: linear-gradient(#FFF, #FFF);
                width: 80%;
                height: 16%;
                position: absolute;
                top: 40%;
                left: 2%; }
            .jp-card .jp-card-back .jp-card-cvc {
                position: absolute;
                top: 40%;
                left: 85%;
                -webkit-transition-delay: 600ms;
                -moz-transition-delay: 600ms;
                transition-delay: 600ms; }
            .jp-card .jp-card-back .jp-card-shiny {
                position: absolute;
                top: 66%;
                left: 2%; }
            .jp-card .jp-card-back .jp-card-shiny:after {
                content: "This card has been issued by Jesse Pollak and is licensed for anyone to use anywhere for free. It comes with no warranty. For support issues, please visit: github.com/jessepollak/card.";
                position: absolute;
                left: 120%;
                top: 5%;
                color: white;
                font-size: 7px;
                width: 230px;
                opacity: .5; }
            .jp-card.jp-card-identified {
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); }
            .jp-card.jp-card-identified .jp-card-front, .jp-card.jp-card-identified .jp-card-back {
                background-color: #000;
                background-color: rgba(0, 0, 0, 0.5); }
            .jp-card.jp-card-identified .jp-card-front:before, .jp-card.jp-card-identified .jp-card-back:before {
                -webkit-transition: all 400ms ease;
                -moz-transition: all 400ms ease;
                transition: all 400ms ease;
                background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 90% 20%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 15% 80%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
                background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 70% 70%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 90% 20%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-radial-gradient(circle at 15% 80%, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
                opacity: 1; }
            .jp-card.jp-card-identified .jp-card-front .jp-card-logo, .jp-card.jp-card-identified .jp-card-back .jp-card-logo {
                box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.3); }
            .jp-card.jp-card-identified.no-radial-gradient .jp-card-front:before, .jp-card.jp-card-identified.no-radial-gradient .jp-card-back:before {
                background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), -webkit-linear-gradient(-245deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%);
                background-image: repeating-linear-gradient(45deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0.05) 1px, rgba(255, 255, 255, 0) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.03) 4px), repeating-linear-gradient(90deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), repeating-linear-gradient(210deg, rgba(255, 255, 255, 0) 1px, rgba(255, 255, 255, 0.03) 2px, rgba(255, 255, 255, 0.04) 3px, rgba(255, 255, 255, 0.05) 4px), linear-gradient(-25deg, rgba(255, 255, 255, 0) 50%, rgba(255, 255, 255, 0.2) 70%, rgba(255, 255, 255, 0) 90%); }
            </style></head>
        <body>

            <!-- Main wrapper -->
            <div class="shop-wrapper">

            <div class="section">
                <!-- Container -->
                <div class="container">

                    <!-- Account Layout -->
                    <div class="columns account-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="account-title">
                                <span id="titulo_chk"> CHECKER MP</span>
                            </div>
                            <br><br><br>
                            <!-- Account layout -->
                            <div class="status_alias">
                                <span class="tag is-info" id="status_choise">STATUS: <i id="status_barra">PARADO</i></span><i id="status_geral">
                                </i></div><!--<a href="javascript:historico();" class="button feather-button default-button raised" id="historico"><li class="fas fa-cloud"></li>Â Â HISTORICO DE CC'S TESTADAS</a>--><i id="status_geral"><br><br>
                                <div class="columns is-account-grid is-multiline col-lg-12">

                                    <div class="column is-20 col-lg-12">
                                        <!-- User card -->
                                        <div class="flat-card profile-info-card is-auto">
                                            <div class="card-body col-lg-12">
                                                <textarea id="lista" class="textarea is-default resultados_finais"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Details -->
                                    <div class="column is-4 col-lg-12">
                                        <div class="flat-card is-auto list-card">
                                            <div class="list-card-header">
                                                RESULTADOS | CARREGADAS: <span id="numcarregas">0</span>
                                            </div>
                                            <!-- List -->
                                            <ul class="resultados_finais">

                                                <!-- List item -->
                                                <li id="showlives" class="resultados_finais">
                                                    <span class="resultados_finais"><span class="tag is-success resultados_finais" id="apv">0</span> MOSTRAR LOGINS APROVADOS</span>
                                                </li>
                                                <!-- List item -->

                                                <!-- List item -->
                                                <li id="showdies" class="resultados_finais">
                                                    <span class="resultados_finais"><span class="tag is-danger resultados_finais" style="" id="rp">0</span> MOSTRAR LOGINS RECUSADOS</span>
                                                </li>

                                            </ul>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <center><button  class="button feather-button default-button raised" id="iniciar_check">REALIZAR TESTE</button></center>
                                        <center><button  class="button feather-button default-button raised" style="display:none" id="parar_check">PARAR TESTE</button></center>
                                    </div>


                                    <div class="column is-12" id="resultsmag">

                                        <!-- aprovadas -->

                                        <div id="aprovadas" class="flat-card is-auto order-list-card animated">
                                        </div>

                                        <!-- reprovadas -->
                                        <div id="reprovadas" class="flat-card is-auto order-list-card animated" style="display:none">
                                        </div>
                                        <!-- /reprovadas -->

                                    </div>
                                </div>
                            </i></div><i id="status_geral">
                        </i></div><i id="status_geral">
                    </i></div><i id="status_geral">
                    <!-- /Container -->
                </i></div><i id="status_geral">
                <!-- /Main section -->
            </i></div><i id="status_geral">  
            <script type="text/javascript">
                $("#showlives").click(function () {
                    $('#aprovadas').attr('style', 'display:block');
                    $('#reprovadas').attr('style', 'display:none');
                });
                $("#showdies").click(function () {
                    $('#aprovadas').attr('style', 'display:none');
                    $('#reprovadas').attr('style', 'display:block');
                });
                $("#testar").click(function () {
                    $("#testar").attr("style", "display:none");
                    $("#parar_check").attr("style", "display:block");
                    executando = true;
                    document.getElementById("apv").innerHTML = 0;
                    document.getElementById("rp").innerHTML = 0;
                    iniciarchk();
                    function remover_linha(id, item) {
                        var lines = $(id).val().split('\n');
                        index = lines.length - 1;
                        while (index >= 0) {
                            if (lines[index] === item) {

                                lines.splice(index, 1);
                            }

                            index -= 1;
                        }
                        $(id).val(lines.join("\n"));


                    }
                    function iniciarchk() {
                        document.getElementById('testar').disabled = true;
                        document.getElementById('lista').disabled = true;
                        var lista = document.getElementById("lista").value;
                        var arraylista = lista.split("\n");
                        error = 0;
                        $('#numcarregas').html(arraylista.length);
                        if (arraylista.length !== "1" && arraylista[0] !== "") {
                            $('#status_barra').html('EXECUTANDO');
                            $('#status_choise').attr('class', 'tag is-warning');
                            arraylista.forEach(function (item, index, object) {
                                $.ajax({
                                    url: "api.php",
                                    data: "lista=" + item,
                                    type: "GET",
                                    async: true,

                                    success: function (data) {

                                        var countlive = (eval(document.getElementById("apv").innerHTML) + 1);
                                        var countdie = (eval(document.getElementById("rp").innerHTML) + 1);

                                        var json = $.parseJSON(data);
                                        var status = json.status;
                                        var msg = json.msg;
                                        switch (status) {
                                            case 0:
                                                $("#apv").text(countlive);
                                                document.getElementById("apv").innerHTML = countlive;
                                                if (msg.indexOf("CARD") > -1) {
                                                    $("#aprovadas").prepend(msg + ' <br>');
                                                } else {
                                                    $("#aprovadas").append(msg + ' <br>');
                                                }
                                                remover_linha("#lista", item);
                                                var lista = document.getElementById("lista").value;
                                                var arraylista = lista.split("\n");
                                                if (arraylista.length !== "1" && arraylista[0] !== "") {
                                                    $('#numcarregas').html(arraylista.length);
                                                } else {
                                                    $('#status_barra').html('COMPLETADO');
                                                    $('#status_choise').attr('class', 'tag is-success');
                                                    $('#numcarregas').html('0');
                                                    document.getElementById('testar').disabled = false;
                                                    document.getElementById('lista').disabled = false;
                                                    $("#testar").attr("style", "display:block");
                                                    $("#parar_check").attr("style", "display:none");
                                                    delete arraylista;
                                                }
                                                break;
                                            case 1:
                                                $("#rp").text(countdie);
                                                $("#reprovadas").append('<b style="color:red"> #Reprovada ' + msg + '</b><br>');
                                                remover_linha("#lista", item);
                                                var lista = $('#lista').val();
                                                var arraylista = lista.split("\n");
                                                if (arraylista.length !== "1" && arraylista[0] !== "") {
                                                    $('#numcarregas').html(arraylista.length);
                                                } else {
                                                    $('#status_barra').html('COMPLETADO');
                                                    $('#status_choise').attr('class', 'tag is-success');
                                                    $('#numcarregas').html('0');
                                                    document.getElementById('testar').disabled = false;
                                                    document.getElementById('lista').disabled = false;
                                                    $("#testar").attr("style", "display:block");
                                                    $("#parar_check").attr("style", "display:none");
                                                    delete arraylista;
                                                }
                                                break;
                                            case 2:
                                                $("#reprovadas").append('<b style="color:red"> #Reprovada ' + msg + '</b><br>');
                                                error = error + 1;
                                                console.log(error);
                                                break;
                                        }
                                        if (error === parseInt($('#numcarregas').text())) {
                                            iniciarchk();
                                        }
                                    }
                                });
                            });
                        } else {
                            $('#status_barra').html('COMPLETADO');
                            $('#status_choise').attr('class', 'tag is-success');
                            $('#numcarregas').html('0');
                            document.getElementById('testar').disabled = false;
                            document.getElementById('lista').disabled = false;
                            $("#testar").attr("style", "display:block");
                            $("#parar_check").attr("style", "display:none");
                            delete arraylista;
                        }
                    }
                });
                $("#parar_check").click(function () {
                    executando = false;
                    $("#testar").attr("style", "display:block");
                    $("#parar_check").attr("style", "display:none");
                    document.getElementById('testar').disabled = false;
                    document.getElementById('lista').disabled = false;
                });
            </script>
        </i></body></html>