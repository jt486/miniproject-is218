<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Contact List</title>
</head>
<body>
<h1>My Contact List</h1>
<div>
    <?php
    print <<< HERE
  <table border = "1">
  <tr>
   <th>First Name</th>
   <th>Last Name</th>
   <th>E-mail</th>
   <th>Contact Number</th>
  </tr>
HERE;
    $data = file("data.csv");
    foreach ($data as $line){
        $lineArray = explode(",", $line);
        list($firstName, $lastName, $email, $phone) = $lineArray;
        print <<< HERE
   <tr>
   <td>$firstName</td>
   <td>$lastName</td>
   <td>$email</td>
   <td>$phone</td>
   </tr>
HERE;
    } // end foreach
    print "</table>";
    ?>
</div>
</body>
</html>