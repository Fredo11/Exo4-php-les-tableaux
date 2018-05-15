<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <title>Exo_php_tableaux</title>
  </head>
  <body>
    <?php
    //=============exo 1 ==================================
    $mois = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');

        echo "<br>Exo 2:";
    //=============exo 2 ==================================
    $mois = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
    // boucle pour tout afficher :

        echo $mois[2] . '<br />Exo 3: '; // affichera $mois[0], $mois[1]

    //=============exo 3 ==================================
    $mois = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
        // boucle pour tout afficher :
        echo $mois[5] . '<br />';


    //=============exo 4 ==================================
    echo "<br>Exo 4:";

    $mois = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
    // boucle pour tout afficher :


    //=============exo 5 et 6 ==================================
    //Avec le tableau de l'exercice 5, afficher la valeur de l'index 30.
      echo "<br>Exo 6:";
    $occitanie = array(
        9 => "Ariege",
        11 => "Aude",
        12 => "Aveyron",
        30 =>"Gard",
        31 => "Haute-Garonne",
        32 => "Gers",
        34 => "Hérault",
        46 => "Lot",
        48 => "Lozère",
        65 => "Hautes-Pyrénées",
        66 => "Pyrénées-Orientales",
        81 => "Tarn",
        82 => "Tarn-et-Garonne",
      );
      echo $occitanie[30] . '<br />';

      //=============exo 7 ==================================
      //Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Narbonne.
        $occitanie = array(
        9 => "Ariege",
        10 => "aube",
        11 => "Aude",
        12 => "Aveyron",
        30 => "Gard",
        31 => "Haute-Garonne",
        32 => "Gers",
        34 => "Hérault",
        46 => "Lot",
        48 => "Lozère",
        65 => "Hautes-Pyrénées",
        66 => "Pyrénées-Orientales",
        81 => "Tarn",
        82 => "Tarn-et-Garonne",
      );
      //=============exo 8 ==================================
      //Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
      echo "<br>Exo 8:";
      $mois = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
      // boucle pour tout afficher :
      for ($numero = 0; $numero < 12; $numero++)
      {
          echo $mois[$numero] . '<br />'; // affichera $mois[0], $mois[1] etc.
      }
      //=============exo 9 ==================================
      echo "<br>Exo 9:";
      //Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
      $occitanie = array(
          9 => "Ariege",
          11 => "Aude",
          12 => "Aveyron",
          30 => "Gard",
          31 => "Haute-Garonne",
          32 => "Gers",
          34 => "Hérault",
          46 => "Lot",
          48 => "Lozère",
          65 => "Hautes-Pyrénées",
          66 => "Pyrénées-Orientales",
          81 => "Tarn",
          82 => "Tarn-et-Garonne",
        );
        foreach($occitanie as $depart)
        {
          echo $depart . '<br>';
        }
        //=============exo 9 ==================================
        echo "<br>Exo 10:";
        //Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
        //Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement
        $occitanie = array(
            9 => "Ariege",
            11 => "Aude",
            12 => "Aveyron",
            30 => "Gard",
            31 => "Haute-Garonne",
            32 => "Gers",
            34 => "Hérault",
            46 => "Lot",
            48 => "Lozère",
            65 => "Hautes-Pyrénées",
            66 => "Pyrénées-Orientales",
            81 => "Tarn",
            82 => "Tarn-et-Garonne",
          );
          foreach ($occitanie as $key => $depart)
          {
            echo "Le département " . $depart . " a le numéro " . $key .'<br>';
          }
    ?>
  </body>
</html>
