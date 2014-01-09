<?php
//Return student data by student name (syntax: http://<servername>/api.php?action=getstudentdata&name=lastame-firstname)
function getstudentdata($name)
{
  $student_data = array();

  // normally this info would be pulled from a database.
  // build JSON array.
  switch ($name){
    case "Abercrombie-Mckenna":
      $student_data = array('studentData' => array(array('assignment' => "Kaplan Full-Length 5", 'score' => "31", 'percentile' => "82"),
                                            array('assignment' => "Kaplan Full-Length 4", 'score'=> "23", 'percentile' => "35"),
                                            array('assignment' => "Kaplan Full-Length 3", 'score' => "27", 'percentile' => "59")));
      break;
    case "VanderWel-Rachel":
      $student_data = array("studentData" => array(array('assignment' => "AAMC Practice Test 11", 'score' => "31", 'percentile' => "82"),
                                                array('assignment' => "AAMC Practice Test 10", 'score' => "23", 'percentile' => "35"),
                                                array('assignment' => "Kaplan Full-Length 1", 'score' => "27", 'percentile' => "59")));
      break;
  }

  return $student_data;
}

$possible_url = array("getstudentdata");

$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{
  if ($_GET["action"] == "getstudentdata")
    {
        if (isset($_GET["name"]))
          $value = getstudentdata($_GET["name"]);
        else
          $value = "Missing argument";
    }
}

//return JSON array
$json = json_encode($value);

echo $json;
?>
