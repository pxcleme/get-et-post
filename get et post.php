

<!--
question 2

post :pour envoyer des données

get: pour obtenir des données 

oui je peux envoyer des requete post et get en dehors d'un formulaire
-->


<!-- formulaire d'inscription -->


<form action="utilisateur.php" method="get">
<label >Identifiant</label>
<input type="text" name="identifiant">
<p></p>
<label >MDP</label>
<input type="password" name="MDP">
<p></p>
<label>Confimation du MDP</label>
<input type="password" name="MDP2">
<input type="submit">
<?php
if(empty($_get['identifiant'])&& empty($_get['MDP']))
{

}else if($_get['MDP']==$_get['MDP2'])
{
$admin = new identifiant();
$admin->inscription($_get['identifiant'] ,$_get['MDP']);
echo"Inscription validée";
}else
{
    echo"Erreur";
}
?>
<!-- fin du formulaire d'inscription -->
</form>
<!--
<center>
<form action="utilisateur.php" method="POST">
<label >Identifiant</label>
<input type="text" name="identifiant">
<p></p>
<label >MDP</label>
<input type="password" name="MDP">
<p></p>
<label>Confimation du MDP</label>
<input type="password" name="MDP2">
<input type="submit">


<!- fin du formulaire d'inscription -->
</center>
</form>
-->