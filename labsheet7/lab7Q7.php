<!DOCTYPE html>
<html>

<head>
    <title> lab7 Q6 </title>
</head>

<body>
    <?php
    function print_number($max)
    {
        echo '<table border ="1px">';
        for ($i = 1; $i <= $max; $i++) {
            echo '<td>' . $i . '</td>';
            if ($i % 5 == 0) {
                print '<tr>';
            }
        }
        echo '</table>';
    }
    print_number(52);
    ?>
</body>

</html>