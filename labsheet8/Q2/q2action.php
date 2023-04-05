<html>

<body>
    <?php
    $code = substr($_POST["stdId"], 0, 2);

    echo "Your ID is start with " . $code . "<br>";
    ?>

    <?php
    $programName;

    if ($code == "CB") {
        $programName = "Software Engineering";
    } else if ($code == "CA") {
        $programName = "Computer Systems and Networking";
    } else if ($code == "CD") {
        $programName = "Graphic and Multimedia";
    } else if ($code == "Diploma") {
        $programName = "Diploma";
    } else {
        $programName = "Not FK undergraduate ";
    }

    echo "You are " . $programName . " student";
    ?>

</body>

</html>