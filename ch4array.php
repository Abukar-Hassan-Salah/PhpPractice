<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 4 Arrays in PHP</title>
</head>
<body>
    <H1>Chapter 4 Arrays in PHP</H1>
    <?php
        $a = array ("Cabdiqaadir Maxamed Xasan", 22, "Hodan, Zone K", "0716798500", "JUST", false);
        // echo ("<pre>");
        // print_r ($a);
        // var_dump ($a);
        // echo ("</pre>");
        echo ("<br>Array elements are:<br>");
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] == false)
                echo ("false, ");
            else
                echo ("$a[$i], ");
        }
        // manipulating array elements 
        $numbers = array (26, 11, 13, -4, 14, -17, 5 , 52, 7, -9,  21,  32, 2, 4, 5);
        echo ("<br>Array elements are:<br>");
        $total = 0;
        foreach ($numbers as $n) {
            // if ($n % 2 != 0)
            echo ("$n, ");
            $total += $n;
        }
        echo ("<br>Total of all elements = $total");
        // associative arrays 
        $assoc = array (
            'id' => "C120050",
            'name' => "Cabdiqaadir Maxamed Xasan",
            'age' => 21,
            'address' => "Zone K, Hodan, Mogadisho, Somalia",
            'sex' => "Male"
        );
        /* echo ("<pre>");
        var_dump ($assoc);
        echo ("</pre>"); */
        echo ("<br>Associative array elements are:<br>");
        foreach ($assoc as $v)
            echo ("$v, ");
        // print associative array elements with indexes 
        echo ("<br>Associative array elements with key/values are:<br>");
        foreach ($assoc as $i => $v) //i = index, v = value
            echo ("[$i]: $v<br>");
    ?>
</body>
</html>