<html>

<body>
    <?php
    $nama = $_POST["name"];
    $umur = $_POST["age"];
    $emel = $_POST["email"];

    // to make a connection with database
    $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

    //Select the database.
    mysqli_select_db($link, "lab9") or die(mysqli_error());

    // to create a query to be executed in sql
    $query = "insert into person values('','$nama','$umur','$emel')"
        or die(mysqli_connect_error());

    // to run sql query in database
    $result = mysqli_query($link, $query);

    //Check whether the insert was successful or not
    if ($result) {

        echo ("Data insert");
    } else {

        die("Insert failed");
    }
    //print
    echo "<br>". "Welcome " . $nama . "<br>";
    echo "You are " . $umur . "<br>";
    echo "Your email address " . $emel;

    //close connection
    mysqli_close($link);
    ?>

</body>

</html>