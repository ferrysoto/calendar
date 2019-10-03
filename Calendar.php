<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/calendar.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <title>Calendar by Ferran Herrero</title>
  </head>
  <body>
    <?php
      // Variables para el calendario
      $day = date('d'); // Día actual de la semana (hoy)
      $month = date('m'); // Mes actual

      // Texto del mes a mostrar como title
      switch ($month) {
        case "01":
          $month = "Enero";
          break;

        case "02":
          $month = "Febrero";
          break;

        case "03":
          $month = "Marzo";
          break;

        case "04":
          $month = "Abril";
          break;

        case "05":
          $month = "Mayo";
          break;

        case "06":
          $month = "Junio";
          break;

        case "07":
          $month = "Julio";
          break;

        case "08":
          $month = "Agosto";
          break;

        case "09":
          $month = "Septiembre";
          break;

        case "10":
          $month = "Octubre";
          break;

        case "11":
          $month = "Noviembre";
          break;

        case "12":
          $month = "Diciembre";
          break;
      }
      $year = date('y'); // Año actual

      // Posiciones de la semana del 0 al 6.
      $totalDays = date('t'); // Total de días que tiene el mes actual

      // Útiles del calendario
      $title = $day . " " . $month . " " . $year; // Título del calendario
      $day_count = 0;

      echo "
        <div class='month'>
          <ul>
            <li>
              <h1>" . $title . "</h1>
            </li>
          </ul>
        </div>

        <ul class='weekDays'>
          <li>Lunes</li>
          <li>Martes</li>
          <li>Miércoles</li>
          <li>Jueves</li>
          <li>Viernes</li>
          <li>Sábado</li>
          <li>Domingo</li>
        </ul>

        <ul class='days'>";

        while ($day_count < $totalDays) {
          if ($day_count == $day) {
            echo "<li><span class='active'>" . $day_count . "</span></li>";
          } elseif ($day_count == 0) {
            echo "<li></li>";
          } else {
            echo "<li>" . $day_count . "</li>";
          }
          $day_count++;
        }

  echo "</ul>";
    ?>
  </body>
</html>
