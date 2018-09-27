
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>

<table class="table">
  <thead>
    <tr>
      <th>Email</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>      

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $conn = mysqli_connect($servername, $username, $password);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";



// $servername = "localhost";
// $username = "root";
// $password = "";
// $conn = mysqli_connect($servername, $username, $password);

// $sql = "CREATE DATABASE aptech_php_14";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);




// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "aptech_php_14";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// $sql = "CREATE TABLE users (
//     email VARCHAR(50),password VARCHAR(50)
//     )";
//     if (mysqli_query($conn, $sql)) {
//         echo "Table users created successfully";
//     } else {
//         echo "Error creating table: " . mysqli_error($conn);
//     }  
//     mysqli_close($conn);



// $servername = "192.168.60.141";
// $username = "nam";
// $password = "123456";
// $dbname = "aptech_php_14";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// $sql = "INSERT INTO users (email,password)
// VALUES ('john2@example.com','123456')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);



// $servername = "192.168.60.141";
// $username = "nam";
// $password = "123456";
// $dbname = "aptech_php_14";
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// $sql = "DELETE FROM users WHERE email like '%john%'";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }

// $conn->close();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_14";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT email, password FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo 
        "<tr>
        <td>" . $row["email"] . "</td>
        <td>" . $row["password"] . "</td>
        </tr> ";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);


?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>