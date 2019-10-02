
<?php
/*    Using "mysqli" instead of "mysql" that is obsolete.
* Change the value of parameter 3 if you have set a password on the root userid
* Add port number 3307 in parameter number 5 to use MariaDB instead of MySQL
*
*     Utilisation de "mysqli" � la place de "mysql" qui est obsol�te.
* Changer la valeur du 3e param�tre si vous avez mis un mot de passe � root
* Ajouter le port 3307 en param�tre 5 si vous voulez utiliser MariaDB
*/
$mysqli = new mysqli('127.0.0.1', 'root', '', 'secondproduct','3306');
$mysqli->query("SET NAMES utf8");


?>