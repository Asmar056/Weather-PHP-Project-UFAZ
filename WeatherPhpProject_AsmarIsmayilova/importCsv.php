<?php
require_once 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();
$file = fopen('test.csv', "r");
          while (($getData = fgetcsv($file, 10000, ",", "'")) !== FALSE)
           {
             $sql = "INSERT INTO `weather`(`cityId`, `dateMeasurement`, `timeMeasurement`, 
             `temperature`, `airPressure`, `precipitation`, `solarRadiance`, `windSpeed`, `windDirection`,
              `humidity`, `UVindex`, `cloudinessID`, `weatherOverallID`) 
              VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."',
              '".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."',
              '".$getData[10]."','".$getData[11]."','".$getData[12]."')";
                   $result = mysqli_query($conn, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
            
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            
          </script>";
        }
           }
      
           fclose($file);
?>