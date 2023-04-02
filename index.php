<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ejemplo de uso de clases y herencia en PHP</title>
</head>
<body>
  <?php
  // Incluimos el archivo que contiene las clases
  include('aves.php');
  
  // Creamos algunos objetos
  $pato = new Pato("Pato Donald", "blanco");
  $condor = new Condor("Condor Flaco", 1.5);
  $gallina = new Gallina("Gallina Pintadita");
  $pinguino = new Pinguino("Pinguino Cabo", 0.8);

  echo "<h1>Parte 1: Ejemplo de uso de clases y herencia en PHP</h1>";
  echo "<h2>Objetos creados:</h2>";
  echo "<ul>";
  echo "<li>Pato: " . $pato->nombre . "</li>";
  echo "<li>Cóndor: " . $condor->nombre . "</li>";
  echo "<li>Gallina: " . $gallina->nombre . "</li>";
  echo "<li>Pingüino: " . $pinguino->nombre . "</li>";
  echo "</ul>";

  // Ejecutamos algunos métodos de los objetos
  echo "<h2>Comportamiento de los objetos:</h2>";
  echo "<ul>";
  echo "<li>" . $pato->nombre . ":</li>";
  echo "<ul>";
  echo "<li>" . $pato->nadar() . "</li>";
  echo "<li>" . $pato->volar() . "</li>";
  echo "</ul>";
  echo "<li>" . $condor->nombre . ":</li>";
  echo "<ul>";
  echo "<li>" . $condor->volar() . "</li>";
  echo "</ul>";
  echo "<li>" . $gallina->nombre . ":</li>";
  echo "<ul>";
  echo "<li>" . $gallina->nadar() . "</li>";
  echo "</ul>";
  echo "<li>" . $pinguino->nombre . ":</li>";
  echo "<ul>";
  echo "<li>" . $pinguino->nadar() . "</li>";
  echo "</ul>";
  echo "</ul>";

  // Mostramos algunos datos de los objetos
  echo "<h1>Parte: 2 Ejemplo de uso de clases y herencia en PHP</h1>";

  // Tabla de registro
  echo "<h2>Tabla de registro:</h2>";
  echo "<form method='post' action=''>";
  echo "<table border='1'>";
  echo "<tr><th>Nombre</th><th>Puede nadar</th><th>Puede volar</th></tr>";
  echo "<tr>";
  echo "<td>" . $pato->nombre . "</td>";
  echo "<td><input type='checkbox' name='pato_nadar' value='1' " . ($pato->puedeNadar ? 'checked' : '') . "></td>";
  echo "<td><input type='checkbox' name='pato_volar' value='1' " . ($pato->puedeVolar ? 'checked' : '') . "></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $condor->nombre . "</td>";
  echo "<td><input type='checkbox' name='condor_nadar' value='1' " . ($condor->puedeNadar ? 'checked' : '') . "></td>";
  echo "<td><input type='checkbox' name='condor_volar' value='1' " . ($condor->puedeVolar ? 'checked' : '') . "></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $gallina->nombre . "</td>";
  echo "<td><input type='checkbox' name='gallina_nadar' value='1' " . ($gallina->puedeNadar ? 'checked' : '') . "></td>";
  echo "<td><input type='checkbox' name='gallina_volar' value='1' " . ($gallina->puedeVolar ? 'checked' : '') . "></td>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $pinguino->nombre . "</td>";
  echo "<td><input type='checkbox' name='pinguino_nadar' value='1' " . ($pinguino->puedeNadar ? 'checked' : '') . "></td>";
  echo "<td><input type='checkbox' name='pinguino_volar' value='1' " . ($pinguino->puedeVolar ? 'checked' : '') . "></td>";
  echo "</tr>";
  echo "</table>";
  echo "<input type='submit' name='submit' value='Actualizar'>";
  echo "</form>";
  
  ?>
</body>
</html>
