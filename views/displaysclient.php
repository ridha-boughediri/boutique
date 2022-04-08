<?php
require_once("../includes/class.autoload.inc.php");

require_once("../adminhtmlcss/slideadmin.php");
require_once("../adminhtmlcss/barreadmin.php");
require_once("../adminhtmlcss/footeradmin.php");

//test table client 

// $testuser1 = new User();
// $utilisateur=$testuser1->getClient();

// var_dump($utilisateur);






?>


<h2>table client</h2>

<table style="width:100%">
  <tr>
    <th>id_utilisateur</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>mail</th>
    <th>phone</th>
    <th>postal_code</th>
    
    <th>supprimer</th>
    <th>modifier</th>

  </tr>
  <?php $testuser1 = new User(); ?>

  <?php if ($testuser1->getClient()) : ?>
    <?php foreach ($testuser1->getClient() as $newclient) : ?>
      <tr>
          <th><?= $newclient["id_utilisateur"] ?></th>
        <th><?= $newclient["firstname"] ?></th>
        <th><?= $newclient["lastname"] ?></th>
        <th><?= $newclient["mail"] ?></th>
        <th><?= $newclient["phone"] ?></th>
        <th><?= $newclient["postal_code"] ?></th>
        
        
       


      <?php endforeach; ?>
    <?php else : ?>
    <?php endif; ?>


      </tr>


</table>
