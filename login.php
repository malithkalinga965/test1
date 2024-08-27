
<?php 

$conn = mysqli_connect('localhost', 'root', '', 'mydb');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve name and password from the form
    $name = $_POST["input_name"];
    $password = $_POST["input_pswd"];

    // Insert name and password into the database
    $sql = "INSERT INTO login (name, password) VALUES ('$name', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);



?>



<!DOCTYPE html>

<html>
    <head>
        <title>Login Page</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body><center>
        <br/>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 border p-4">

        <form method="post">
            <h2 style="text-align: center;">Login</h2>
            <div class="form-group">
                <label for="name">UserName</label>
                <input type="text" class="form-control" id="input_name" name="input_name" aria-describedby="emailHelp" placeholder="Enter User Name">
            </div>

                <br/>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="input_pswd" name="input_pswd" placeholder="Password">
            </div>

                 <br/>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        </div>
    </div>
</div>
        </center>


    </body>
</html>