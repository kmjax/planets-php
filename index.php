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
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>


<?php

/*************************************************
 LIST OF PLANETS (SELECT)
 ************************************************/

print "<hr><h3>List of Planets:</h3>";

// Create the SQL SELECT statement to read the planets
// Note: Data is returned sorted by planet_id
$sql = "SELECT planet_id, planet_name, planet_description, distance_from_sun, radius, mass, length_of_day, orbital_period, google_maps_link FROM planets ORDER BY planet_id";
$result = mysqli_query($conn, $sql);

// If the query returned rows from the database, display all of the records in an HTML table
if (mysqli_num_rows($result) > 0) {
  // Start the table and output the table header names
  print "<table id='planets-table'>";
  print "<tr>";
  print "<thead>";
  print "<th id='th-planet-name'>Planet</th>";
  print "<th id='th-description'>Description</th>";
  print "<th id='th-distance'>Distance From Sun</th>";
  print "<th id='th-radius'>Radius</th>";
  print "<th id='th-mass'>mass</th>";
  print "<th id='th-length-of-day'>Length of Day</th>";
  print "<th id='th-orbital-period'>Oribital Period</th>";
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
    print "<td class='col-google-maps-link'>$googleMapsLink</td>";
    
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

<!-- ===================
       CLOSE HTML PAGE
     =================== -->
    
</body>
</html>
