<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Show</title>
</head>
<body>
    


<?php

session_start();

$name = '';
$email = '';
$issue = '';
$description = '';

if ( isset($_POST['submit'])
        )
     {
        $name = $_SESSION['name'] = $_POST['name'];
        $email = $_SESSION['email'] = $_POST['email'];
        $issue = $_SESSION['issue'] = $_POST['issue'];
        $description = $_SESSION['description'] = $_POST['description'];
    }
?>
<div class="container">
    <div class="card-header my-5 bg-success text-light">
        <h3>Your information: </h3>
    </div>
    <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td><?php echo $name?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <th>Issue</th>
                    <td><?php echo $issue ?></td>
                </tr>
                <tr>
                    <th>Descripiton</th>
                    <td><?php echo $description ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-end mr-4">
    <a class="btn btn-primary px-4 mx-3" href="changes.php" role="button">Edit</a>
    <a class="btn btn-primary px-4" href="insert.php" role="button">Confirm</a>
    </div>
</div>



</body>
</html>