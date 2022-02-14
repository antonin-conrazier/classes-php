<?php 
  try {

    $pdo = new PDO ('mysql:host=localhost;dbname=classes;charset=utf8','root','');
}
    catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$res = $pdo->query('SELECT * FROM utilisateurs');
var_dump($res->fetchAll(PDO::FETCH_OBJ));


$res = $pdo->exec('INSERT INTO utilisateurs(login, password,email ,firstname ,lastname) VALUES (\'boris\',\'borisbg\',\'boris@boris.fr\',\'boris\', \'bg\')');

echo 'Utilisateur créé !';

$res = $pdo->exec('UPDATE utilisateurs SET login =\'mauriceleretour\' WHERE login = \'maurice\'');

echo $res . 'Changement effectué !';

$res = $pdo->exec('DELETE FROM utilisateurs WHERE login=\'swagman41\'');

echo 'Utilisateur supprimé !';

?>