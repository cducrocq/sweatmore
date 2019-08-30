<?php
if (isset($_GET['adminuserdel']))
{

    $id=$_GET['adminuserdel'];

    $req = $bdd->query('DELETE FROM users WHERE id='.$id);

    header ('Location: index.php?adminuser');
}
                    
?>