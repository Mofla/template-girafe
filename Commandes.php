<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <title>CLERIO.FR-COMMANDES</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/Contacts.css" rel="stylesheet">
    <style type="text/css">
        <!--
            /* /////////////////\\\\\\\\\\\\\\\\\\ */
            table{
                margin:auto;
            }
            td{
                padding:20px;
                border:none;
                margin:auto;
            }
            /* /////////////////\\\\\\\\\\\\\\\\\\ */
            .formulaire-achat{
             margin-top:100px;
            }
            /* /////////////////\\\\\\\\\\\\\\\\\\ */
            input[type=range] {
                -webkit-appearance: none;
                background:transparent;
                width: 100%;
                height:16px;
                border-color:transparent;
                color:transparent;
            }
            /* Firefox */
            
                /* le curseur */
            input[type=range]::-moz-range-thumb{
                height:14px;
                width:8px;
                background:#F64D00;
                border:1px solid #F64D00;
                border-radius:0;
            }
                /* la barre */
            input[type=range]:hover::-moz-range-track{
                background: #ccc;
            }
            /* Chrome,Opera,Safari */
                /* le curseur */
            input[type=range]::-webkit-slider-thumb{
                -webkit-appearance: none;
                height:14px;
                width:8px;
                background:#F64D00;
                border:1px solid #F64D00;
                border-radius:0;
            }
                /* la barre */
            input[type=range]::-webkit-slider-runnable-track{
                background: #aaa;
            }
            input[type=range]:hover::-webkit-slider-runnable-track{
                background: #ccc;
            }
            /* IE */
                /* le curseur */
            input[type=range]::-ms-thumb{
                height:14px;
                width:8px;
                background:#F64D00;
                border:1px solid #F64D00;
                border-radius:0;
            }
                /* la barre */
            input[type=range]:hover::-ms-fill-upper{
                background: #ccc;
            }
            /* /////////////////\\\\\\\\\\\\\\\\\\ */
            select{
                color:#F64D00;
            }
            /* /////////////////\\\\\\\\\\\\\\\\\\ */
            .btn-commander{
                display:block;
                margin:auto;
                border:2px solid #F64D00;
                color:#F64D00;
                text-transform: uppercase;
                font-weight: bold;
                padding:8px 16px;
                background: transparent;
            }
            
            .btn-commander:hover{
                background:#F64D00;
                color:white;
            }
            /* /////////////////\\\\\\\\\\\\\\\\\\ */
            form{
                font-style: italic;
                max-width: 90%;
                
            }
            form h6{
                color:#F64D00;
                text-shadow: 0 0 1px #ddd;
                font-style: normal;
            }
            
            .gras{
                color:#F64D00;
                font-weight: bold;
                text-shadow: 0 0 1px #ddd;
                font-style: normal;
            }
            /* /////////////////\\\\\\\\\\\\\\\\\\ */
            .titre-form{
                color:#F64D00;
                font-size:2em;
                font-style: normal;
                text-align: center;
            }
            .td-center{
                text-align: center;
            }
            .titre-infos{
                color:#F64D00;
                font-style: bold;
                
            }
        -->
    </style>

    <script src='js/device.min.js'></script>
</head>
<body onload="Afficher();">
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
<?php include('header.php'); ?>
    <!--========================================================
                              CONTENT
    =========================================================-->

    <main>
        <center class="formulaire-achat">
       <form method='post' action='Contacts.php'>
        <table>
            <tr>
                <td colspan=2 class="td-center"><span class="titre-form">Formulaire de commande</span></td>
            </tr>
            <tr>
                <td colspan=2>500<input type="range" min="500" max="10000" step="500" value="1" oninput="document.getElementById('quantite').textContent=value;Afficher()"/><span style="float:right;">10000</span></td>
            </tr>
            <tr>
                <td>Quantité : <span id="quantite" class="gras">500</span></td>
                <td>Prix par unité : <h6 id="prixuni">1.80</h6><b> €</b></td>
            </tr>
            <tr>
                <td>Anneaux montés :</td>
                <td><input type="radio" name="anneau" id="avec-anneau" value="avec" onchange="Afficher()"/>Avec
                <input type="radio" name="anneau" id="sans-anneau" value="sans" onchange="Afficher()" checked/>Sans</td>
            </tr>
            <tr>
                <td>Méthode de marquage :</td>
                <td>
                    <select name="marquage" id="marquage" onchange="Afficher()" >
                        <option value="Laser">Gravure laser</option>
                        <option value="Seri1">Sérigraphie 1 couleur</option>
                        <option value="Seri2">Sérigraphie 2 couleurs</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Frais de port :</td>
                <td><h6 id="fdp"></h6><b> €</b></td>
            </tr>
            <tr>
                <td>Total :</td>
                <td><h6 id="total"></h6><b> €</b></td>
            </tr>
            <tr>
                <td colspan=2 class="td-center titre-infos">Vos informations :</td>
            </tr>
            <tr>
                <td>Société : </td>
                <td><input type="text" name="societe" id="societe" required/></td>
            </tr>
            <tr>
                <td>E-mail : </td>
                <td><input type="email" name="email" id="email" required/></td>
            </tr>
            <tr>
                <td>Tél : </td>
                <td><input type="tel" name="tel" id="tel" /></td>
            </tr>
            <tr>
                <td colspan=2><button class="btn-commander">Commander</button></td>
            </tr>
        </table>
       </form>
       <!-- Paypal -->
       <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="clerio@simplon.com">
        <input type="hidden" name="item_name" id="item_name" value="">
        <input type="hidden" name="currency_code" value="EUR">
        <input type="hidden" name="quantity" id="quantity" value="">
        <input type="hidden" name="amount" id="amount" value="">
        <input type="hidden" name="shipping" id="shipping" value="">
        <input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
        </form>
       <!-- !Paypal -->
       </center>
    <script type="text/javascript">
        //récupération des données
        function recupVars() {
            // récupérer la quantité
            var quantite = parseInt(document.getElementById('quantite').innerHTML);
            // récupérer le booléen pour l'anneau
            if (document.getElementById('avec-anneau').checked) {
                var anneau = document.getElementById('avec-anneau').value;
            }
            else{
                var anneau = document.getElementById('sans-anneau').value;
            }
            // récupérer la méthode de marquage
            var marquage = document.getElementById('marquage').value;
            // calcul des frais de port
            var fraisDePort = 5.9+2*(quantite/500-1);
            return [quantite,anneau,marquage,fraisDePort];
        }
        //calcul prix unitaire des clés
        function CalculPrixUnitaire(q,type) {
            var prixUnitaire;
            switch (type) {
                case 'Laser':
                    prixUnitaire = -0.0000747368421052*q+1.8373684210526;
                    break;
                case 'Seri1':
                    prixUnitaire =  -0.000078947368421053*q+2.1394736842105;
                    break;
                case 'Seri2':
                    prixUnitaire = -0.000091578947368421*q+2.3357894736842;
                    break;
            }
            return prixUnitaire.toFixed(2);
        }
        // Paypal
        function ValeursPaypal(prix,quantite,anneau,marquage,fdp) {
            var nom;
            nom = 'Cles (';
            switch (marquage) {
                case 'Laser':
                    nom += 'Gravure laser';
                    break;
                case 'Seri1':
                    nom += 'Serigrapie 1 couleur';
                    break;
                case 'Seri2':
                    nom += 'Serigrapie 2 couleurs';
                    break;
            }
            nom += ')';
            if (anneau === 'avec') {
                nom += ' avec anneau';
            }
            document.getElementById("item_name").value = nom;
            document.getElementById("amount").value = prix;
            document.getElementById("quantity").value = quantite;
            document.getElementById("shipping").value = fdp;
        }
        // calcul du total
        function calculTotal() {
            // je récup les différentes valeurs dans un tableau
            var valeurs = recupVars();
            // valeurs[0] -> quantite
            // valeurs[1] -> anneau avec/sans
            // valeurs[2] -> type de marquage
            // valeurs[3] -> frais de port
            var prixUnitaire = CalculPrixUnitaire(valeurs[0],valeurs[2]);
            var total = prixUnitaire*valeurs[0]+valeurs[3];
            if (valeurs[1] === 'avec') {
                total += valeurs[0]*0.15;
            }
            total = total.toFixed(2);
            ValeursPaypal(prixUnitaire,valeurs[0],valeurs[1],valeurs[2],valeurs[3]);
            return total;
        }
        
        // afficher les valeurs dans le html
        function Afficher() {
            var total = calculTotal();
            var vals = recupVars();
            var prixUni = CalculPrixUnitaire(vals[0],vals[2]);
            document.getElementById('total').innerHTML = total;
            document.getElementById('fdp').innerHTML = vals[3];
            document.getElementById('prixuni').innerHTML = prixUni;
        }
        
        function test() {
            var t = recupVars();
            alert(t);
        }
    </script>
    </main>
    <!--========================================================
                            FOOTER
    =========================================================-->
<?php include('footer.php'); ?>
</div>

</html>
