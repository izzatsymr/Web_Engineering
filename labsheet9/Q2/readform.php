<html>

<body>
    <?php

    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $gender = $_REQUEST["gender"];
    $title = $_REQUEST["title"];
    $comment = $_REQUEST["comment"];
    $hobby = $_REQUEST['hobby'];

    //use implode() method for hobby array
    $hoby = implode(' , ', $hobby);

    // to make a connection with database
    $link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

    // to select the targeted database
    mysqli_select_db($link, "mydb") or die(mysqli_error());

    $query = "insert into user values('','$name','$age','$gender','$title','$hoby','$comment')"
        or die(mysqli_connect_error());

    // to run sql query in database
    $result = mysqli_query($link, $query);

    //Check whether the insert was successful or not
    if ($result) {

        echo ("Data insert");
    } else {

        die("Insert failed");
    }

    echo '<table border ="1px">';
    echo '<tr>';
    echo '<td>' . "Name";
    echo '<td>' . $_REQUEST["name"];
    echo '</tr>';

    echo '<tr>';
    echo '<td>' . "Age";
    echo '<td>' . $_REQUEST["age"];
    echo '</tr>';

    echo '<tr>';
    echo '<td>' . "Gender";
    echo '<td>' . $_REQUEST["gender"];
    echo '</tr>';

    echo '<tr>';
    echo '<td>' . "Title";
    echo '<td>' . $_REQUEST["title"];
    echo '</tr>';

    echo '<tr>';
    echo '<td>' . "Hobby";
    echo '<td>';
    foreach ($_POST['hobby'] as $hobby)
        echo $hobby . "<br>";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>' . "Comment";
    echo '<td>' . $_REQUEST["comment"];
    echo '</tr>';

    echo '</table>';

    mysqli_close($link);
    ?>

</body>

</html>