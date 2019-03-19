<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Contact List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<h1>My Contact List</h1>
<div>
    <?php
    print <<< HERE
  <table class="table table-bordered">
  <thead>
  <tr class="table-primary">
   <th scope="col">First Name</th>
   <th scope="col">Last Name</th>
   <th scope="col">e-mail</th>
   <th scope="col">Contact Number</th>
  </tr>
</thead>
HERE;
    $data = file("data.csv"); //moving .csv data into an array
    foreach ($data as $line) { //use loop to go through each content in .csv
        $lineArray = explode(",", $line); //use explode to separate each line into parts
        list($firstName, $lastName, $email, $phone) = $lineArray; //use function to store elements into a variable
        print <<< HERE
        <tbody>
   <tr>
   <td>$firstName</td>
   <td>$lastName</td>
   <td>$email</td>
   <td>$phone</td>
   </tr>
</tbody>
HERE;
    }
    print "</table>";
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>