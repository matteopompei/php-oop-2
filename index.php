<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
</head>
<body>


<?php
  require_once __DIR__."./classes/Film.php";
  require_once __DIR__."./classes/Sala.php";
  require_once __DIR__."./classes/Sala4D.php";
  require_once __DIR__."./classes/Spettacolo.php";

  $filmArr = [
    new Film("Pulp Fiction", "Noir, gangster, thriller, commedia, drammatico", "154 minuti", "Un killer si innamora della moglie del suo capo, un pugile rinnega la sua promessa e una coppia tenta una rapina che va rapidamente fuori controllo.", "Quentin Tarantino", "John Travolta, Samuel L. Jackson, Uma Thurman, Bruce Willis, Tim Roth, Harvey Keitel, Ving Rhames, Amanda Plummer, Christopher Walken"),
    new Film("Interstellar", "Fantascienza, avventura, drammatico", "154 minuti", "In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l'agricoltura. Il granturco è l'unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.", "Christopher Nolan", "Matthew McConaughey, Anne Hathaway, Jessica Chastain, Michael Caine, Mackenzie Foy, Matt Damon, Timothée Chalamet, Casey Affleck, John Lithgow, Wes Bentley, Ellen Burstyn, Topher Grace, David Gyasi"),
    new Film("Taxi Driver", "Noir, thriller, drammatico", "113 minuti", "Un tassista di New York dal carattere sensibile e solitario scivola lentamente in una spirale di follia che lo spinge a ribellarsi in maniera violenta alle ingiustizie di una società corrotta e alienante.", "Martin Scorsese", "Robert De Niro, Jodie Foster, Harvey Keitel, Cybill Shepherd, Steven Prince"),
    new Film("Blade Runner", "Fantascienza, thriller, noir", "118 minuti", "In un futuro prossimo venturo un investigatore ha il compito di eliminare un gruppo di androidi assassini in fuga dal loro artefice, ma nel corso della propria ricerca viene a conoscenza di una verità terrificante.", "Ridley Scott", "Harrison Ford, Rutger Hauer, Sean Young, Daryl Hannah, Edward James Olmos, Joanna Cassidy, M. Emmet Walsh, William Sanderson, Brion James, Joe Turkel, John Edward Allen, Hy Pyke, Morgan Paull"),
    new Film("Full Metal Jacket", "Drammatico, guerra", "116 minuti", "Un soldato della marina statunitense osserva gli effetti della guerra del Vietnam sui propri colleghi. Questi ultimi vengono sottoposti ad allenamenti estenuanti da parte del sergente Hartman, con lo scopo di diventare strumenti di guerra.", "Stanley Kubrick", "R. Lee Ermey, Vincent D'Onofrio, Matthew Modine, Adam Baldwin, Kevyn Major Howard, Arliss Howard, Dorian Harewood")
  ];

  $saleArr = [
    new Sala(1, 250),
    new Sala(2, 180),
    new Sala(3, 100),
    new Sala4D(4, 300, true, true, true),
    new Sala4D(5, 250, true, false, false)
  ];

  $spettacoliArr = [
    new Spettacolo($filmArr[0]->getTitolo(), "15 marzo 2022", "16:00, 19:00, 21:00", $saleArr[0]->getInfo()[0]),
    new Spettacolo($filmArr[1]->getTitolo(), "15 marzo 2022", "16:00, 19:00, 21:00", $saleArr[1]->getInfo()[0]),
    new Spettacolo($filmArr[2]->getTitolo(), "15 marzo 2022", "16:00, 19:00, 21:00", $saleArr[2]->getInfo()[0]),
    new Spettacolo($filmArr[3]->getTitolo(), "15 marzo 2022", "16:00, 19:00, 21:00", $saleArr[3]->getInfo()[0]),
    new Spettacolo($filmArr[4]->getTitolo(), "15 marzo 2022", "16:00, 19:00, 21:00", $saleArr[4]->getInfo()[0])
  ];



  // Milestone 1

  foreach ($saleArr as $sala) {
    echo "Sala {$sala->getInfo()[0]} <br> Capienza {$sala->getInfo()[1]} posti <br>";
    if($sala->getInfo()[2]) {
      echo "Interazioni immersive: vibrazione";
      if($sala->getInfo()[3]) {
        echo ", fumo";
      }
      if($sala->getInfo()[4]) {
        echo ", acqua";
      }
      echo "<br>";
    }
    echo "<br>";
  }

  // Milestone 2
  $totCapienza = 0;
  foreach ($saleArr as $capienza) {
    $totCapienza += $capienza->getInfo()[1];
  }
  echo "La capienza totale del cinema è di ".$totCapienza." posti. <br><br>";

  // Milestone 3
  $proiezioni = explode(',', $spettacoliArr[0]->getOrari());
  for ($i=0; $i < count($proiezioni); $i++) { 
    $proiezioniTot = $i + 1;
  }
  echo "{$filmArr[0]->getTitolo()} verrà proiettato il giorno {$spettacoliArr[0]->getData()} per {$proiezioniTot} volte.<br><br>";
  
  // Milestone 4
  // $fineUltimoSpettacolo= strtotime('{$proiezioni[2]} + 5 minute');
  // echo date($proiezioni[2], $fineUltimoSpettacolo);
  // echo date($proiezioni[2]);

  echo "<pre>";
  // var_dump($filmArr);
  // var_dump($saleArr);
  // var_dump($spettacoliArr);
  echo "</pre>";

?>

</body>
</html>