<!DOCTYPE html>
<html>

<head>
    <title> lab7 Q3 </title>
</head>

<body>
    <?php
        $code= "BCS";
        $programName;

        if($code == "BCS"){
            $programName = "Software Engineering";
        }
        
        else if ($code == "BCN"){
               $programName = "Computer Systems and Networking";
        }
        else if ($code == "BCG"){
            $programName = "Graphic and Multimedia";
        }

        else if ($code == "DCS"){
            $programName = "Diploma";
        }

        else{
            $programName = "Not FK undergraduate student";
        }

        echo "You are " . $programName . " student";
    ?>

</html>