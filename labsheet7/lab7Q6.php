<!DOCTYPE html>
<html>

<head>
    <title> lab7 Q6 </title>
</head>

<body>
    <?php
    function print_number()
    {
        for ($i = 1; $i <= 100; $i++) {
            echo $i . "\t" ;
            if ($i % 5 == 0) {
                echo "<br>";
            }
        }
    }
    print_number();
    ?>
</body>

</html>