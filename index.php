<?php

/* ===============================================================
 ====================== DATABASE CONNECTION  =====================
 ================================================================= */

// Attempt a database connection before doing anything else!

// Define database connection variables (login credentials to the MySQL database)
// NOTE: I know this is hardcoded and in GitHub... It is just for learning and this
//       is a temporary database runs locally on a training PC, not over the Internet!
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jaxcode";

// Create the database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection attempt. Fail with an error if no connection was made
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>

<!-- =============================================================
 ========================= BEGIN HTML PAGE =======================
 ================================================================= -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
      name="description"
      content="PLANETS PHP/MySQL Homework Assignment - 2020-12-07"
    />
    <meta name="author" content="Kelsey McClanahan" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<div class="container-fluid table-responsive-lg">


<?php

/*************************************************
 LIST OF PLANETS (SELECT)
 ************************************************/

print "<h1>PLANETS OF THE SOLAR SYSTEM</h1>";

// Create the SQL SELECT statement to read the planets
// Note: Data is returned sorted by planet_id
$sql = "SELECT planet_id, planet_name, planet_description, distance_from_sun, radius, mass, length_of_day, orbital_period, google_maps_link FROM planets ORDER BY planet_id";
$result = mysqli_query($conn, $sql);

// If the query returned rows from the database, display all of the records in an HTML table
if (mysqli_num_rows($result) > 0) {
  // Start the table and output the table header names
  print "<table class='table table-sm table-bordered table-striped table-dark table-hover' id='planets-table'>";
  print "<tr>";
  print "<thead class='thead-dark planets-thead'>";
  print "<th id='th-planet-name'>Planet</th>";
  print "<th id='th-description'>Description</th>";
  print "<th id='th-distance' width='135px'>Distance From Sun</th>";
  print "<th id='th-radius' width='95px'>Radius</th>";
  print "<th id='th-mass' width='150px'>Mass</th>";
  print "<th id='th-length-of-day' width='110px'>Length of Day</th>";
  print "<th id='th-orbital-period' width='85px'>Oribital Period</th>";
  print "<th id='th-google-maps-link'>Google Maps Link</th>";
  print "</tr>";
  print "</thead>";
  
  // Start the table body
  print "<tbody>";
  // Loop through and output each returned database row in the form of an HTML row
  while($row = mysqli_fetch_assoc($result)) {
    // Grab the data from the result dataset
    $planetID           = $row['planet_id'];
    $planetName         = $row['planet_name'];
    $planetDescription  = $row['planet_description'];
    $distanceFromSun    = $row['distance_from_sun'];
    $radius             = $row['radius'];
    $mass               = $row['mass'];
    $lengthOfDay        = $row['length_of_day'];
    $orbitalPeriod      = $row['orbital_period'];
    $googleMapsLink     = $row['google_maps_link'];

    // Start the HTML table row
    print "<tr>";
    // Now output each table cell
    print "<td class='col-planet-name'>$planetName</td>";
    print "<td class='col-description'>$planetDescription</td>";
    print "<td class='col-distance'>$distanceFromSun</td>";
    print "<td class='col-radius'>$radius</td>";
    print "<td class='col-mass'>$mass</td>";
    print "<td class='col-length-of-day'>$lengthOfDay</td>";
    print "<td class='col-orbital-period'>$orbitalPeriod</td>";
    print "<td class='col-google-maps-link'><a href='$googleMapsLink' target='_blank' class='google-maps-link'>$planetName</a></td>";
    
    // And close out the table row
    print "</tr>";

  }

  // After looping through all of the planets, close out the table
  print "</tbody></table>";
  
} else {
  print "No planets were retrieved from the database. Make sure you are in the correct solar system.";
}

// Close the database collection
mysqli_close($conn);

?>

<!-- ========================================================
       Required Bootstrap Scripts and Closing the HTML PAGE
     ======================================================== -->
    
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
