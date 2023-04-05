<html>

<body>
    <?php
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
    echo $hobby."<br>";
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td>' . "Comment";
    echo '<td>' . $_REQUEST["comment"];
    echo '</tr>';

    echo '</table>';
    ?>

</body>

</html>