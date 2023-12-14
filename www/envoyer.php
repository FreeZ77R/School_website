<?php
header('Content-Type: text/csv;');
header('Content- Disposition: attachment; filename="donnees.csv"');
try{
		$PDO = new PDO('mysql:host=localhost;dbname=sitebezout','root','');
		$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		$PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}catch(PDOException $e){
		echo 'Connexion impossible';
}
$req = $PDO->prepare('SELECT email,mdp,age FROM form');
$req->execute();
$data = $req->fetchAll();
?>"email";"mdp";"age"<?php
foreach($data as $d){
	echo "\n".'"'.$d->email.'";"'.$d->mdp.';'.$d->age.'"';
}?> 