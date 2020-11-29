<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="text-align:center; background-color: #b4ecb4; margin: 20px">
<h1>Pictures taken at Various Locations</h1>

<?php
$mysqli = new mysqli("localhost","z2singh","Pleabros","z2singh");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli ->
    connect_error;
    exit();
}

$commandText = "SELECT * from users";
$result = $mysqli->query($commandText);


if ($result) {
    printf("%d Destination(s). \n", $result->
    num_rows);
    print("<br/>");
    print("<br/>");
    
    print('<h3>List of images in the database:</h3>');
    while ($row = mysqli_fetch_row($result)) {
        print("<tr> \n");
        printf("
            <ul>
            <li>
                <ul>
                    <li>Description: %s</li>
                    <li>Location: %s</li>
                    <li>Date Taken: %s</li>
                </ul>
            </li>
            </ul>
        " ,$row[2] ,$row[1], $row[3]);

    }
}







?>
</body>
</html>
