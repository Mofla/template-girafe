<!doctype html>
<html>
<head
    <meta charset="utf-8"/>
    <title>TRAITEMENT FORMULAIRE</title>
    <style>
        
        td{padding:4px;font-size:10px;}
        table, tr, td{border:1px solid black;}
        .tr1{text-transform: uppercase;text-align:center;
            background-color:antiquewhite;font-weight:bold;}
        .mess{text-align:left;}
        h2.traitement{background-color:lemonchiffon;
        padding:20 0px;border:5px solid #fff9c1;
        margin-left:300px;margin-right:300px;}
    </style>
</head>
<body>

<center><h2 class="traitement">Page de traitement</h2></center>

<?php /*SCRIPT RECUP DONNEES FORMULAIRE DANS UN TABLEAU */
    if (isset($_POST['prenom']) and (isset($_POST['nom'])) and (isset($_POST['telephonne']))
    and (isset($_POST['email']))and (isset($_POST['adresse']))and (isset($_POST['ville']))
    and (isset($_POST['ville']))and (isset($_POST['codepostal']))and (isset($_POST['message']))){
    
    $nom = $_POST['nom'];    
    $prenom = $_POST['prenom'];
    $tel = $_POST['telephonne'];
    $mail = $_POST['email'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codepostal = $_POST['codepostal'];
    $message = $_POST['message'];
    }else{echo 'il manque des élements';
         header("Location:Contacts.html");}
    echo '<table class="table"><tr class="tr1"><td>nom</td><td>prenom</td><td>telephonne</td><td>email</td><td>adresse</td><td>ville</td><td>code postal</td><td class="mess">message</td></tr>
    <tr><td>'.$nom.'</td><td>'.$prenom.'</td><td>'.$tel.'</td><td>'.$mail.'</td><td>'.$adresse.'</td><td>'.$ville.'</td><td>'.$codepostal.'</td><td>'.$message.'</td></tr></table>';
?>
  
    
    
<script type="text/javascript">
var form = function(){
var name =  document.getElementsById('mailform-input-name').innerHTML;
var subname =  document.getElementsById('mailform-input-prenom').innerHTML;
var tel =   document.getElementsById('mailform-input-tel').innerHTML;
var email =   document.getElementsById('mailform-input-email').innerHTML;
var addr =  document.getElementsById('mailform-input-adresse').innerHTML;
var ville =  document.getElementsById('mailform-input-ville').innerHTML;
var cp =  document.getElementsById('mailform-input-cp').innerHTML;
var message =  document.getElementsById('mailform-input-message').innerHTML;
    
    alert(name + subname + email + addr + ville + cp + message);
}    
    
</script>
</body></html>
