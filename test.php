<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <title>Menus de la semaine</title>
        <link rel ="stylesheet" href="Style.css">
    </head>
    <body>
      <section>    
          <h1>Les Menus de la semaine</h1>

        <table class ="color_line">

        <?php
        //Création du tableau
        $repasem = array(

        "Lundi" => array('Entrée'=> 'Macédoine de légumes et mayonnaise' , 'Plat'=> 'Cari de porc aux pois Riz' , 'Dessert'=> 'Fromage KIRI Mandarine', 'Boisson'=> 'Eau Fraîche'),
        "Mardi" => array('Entrée'=> 'Salade de carotte' , 'Plat'=> 'Rôti de dindonneau aux oignons ' , 'Dessert'=> 'Fromage gouda Prune', 'Boisson'=> 'Eau Fraîche'),
        "Mercredi" => array('Entrée'=> 'Salade de tomate et maïs' , 'Plat'=> 'Rôti de poulet fumé et Pâte à la tomate' , 'Dessert'=> 'Fromage chédard Poire au sirop', 'Boisson'=> 'Eau Fraîche'),
          "Jeudi"=> array('Entrée'=> 'Salade de laitue' , 'Plat'=> 'Sauté de poulet aux légumes et Riz' , 'Dessert'=> 'Yaourt ferme sucré', 'Boisson'=> 'Eau Fraîche'),
          "Vendredi" => array('Entrée'=> 'Salade de pommes de terre persillée' , 'Plat'=> 'Poisson pané - ketchup et Pain' , 'Dessert'=> 'Fromage vache qui rit Orange', 'Boisson'=> 'Eau Fraîche'));

        unset($repasem['']);
?>

       <tr>

    <th>Jour</th>   
    <th>Entree </th>
    <th>Plat </th>
    <th>Dessert </th>
    <th>Boissons</th>
    
   </tr>
  


    <?php 
      foreach($repasem as $cle1 => $valeur1) {
        echo '<tr>';
        echo '<td class = "test1">';
        echo $cle1."<br/>";
        echo '</td>';

        foreach($valeur1 as $cle2 => $valeur2)
    {
    echo '<td class =" test2">';
    echo $valeur2."<br />";

      
    
    echo '</td>';
   
      
    
    }

  
?>


<td>

  <form action='modifier.php' method='post'>
    <a href = 'modifier.php'>
<input class="favorite styled" type="button" value="Modifier">
</td>
</form>

<form action='supprimer.php' method='post'>
<td>   
      <a href = 'supprimer.php'>
       <input class="favorite styled" type="button" value="Supprimer">
</td>
</form>


  <?php
     echo '</tr>';
  }
    ?>


      </table>

      <?php


    echo "<br /><br />"."Le nombre de repas de la semaine est :"." ".count($repasem)."<br /><br />" ;

    ?>
  </section>

<section>

      <input class="favorite styled" type="button" value="Ajouter">

       


</section>

    </body>
</html>