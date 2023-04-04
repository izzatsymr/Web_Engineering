<!DOCTYPE html>
<html>

<body>
    <p>The result is : </p>
    <?php $x = 5;
    $y = 6;
    function test()
    {
        static $z = 1;
        global $y;
        $z = $z + $GLOBALS['x'];
        echo "The value of z is $z <br>";
        $z = $z + $y;
        echo "The value of z is $z <br>";
    }
    test();
    test(); ?>

    <p> Try to access them in another php section </p>

    <?php $x = $x + $y;
    echo "The value of x $y = $x+$y; is $x <br>";
    echo "The value of y is $y <br>";
    test();
    test(); ?>
</body>

</html>