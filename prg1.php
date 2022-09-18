<?php
    // $i = 66;
    // $s = "Afzal";
    // $b = true;
    // $d = 10.000;
    // echo "$i is ",gettype($i), "<br>";
    // echo "$s is ", gettype($s), "<br>";
    // echo "$b is ",gettype($b), "<br>";
    // echo "$d is ", gettype($d), "<br>";

    // echo "Hello world";
    // echo "<br>";
    // $a = 10.111111111;
    // echo gettype($a);
    // echo $a;

    // type conversion
    // $x = 10; // integer
    //convert into bool
    // $b = (bool)$x;
    // echo gettype($b);

    // $x = 130; // integer
    // //convert into bool
    // $a = (bool)$x; // Boolean 0 or 1
    // echo $a; //O/p = 1

    // $x = 10;

    // $a = (bool) $x;
    // echo $a, "<br>";
    // $b = (double)$x;
    // echo $b, "<br>";
    // $c = (string)$x;
    // echo $c, "<br>";
    // $d = (array)$x;
    // print_r($d);

    //integer
    $x = 10;
    $a = (bool) $x;
    $b = (double)$x;
    $c = (string)$x;
    $d = (array)$x;

    //boolean
    $b1 = true;
    $i1 = (int)$b1;
    $d1 = (double)$b1;
    $s1 = (string)$b1;
    $a1 = (array)$b1;

    //double
    $d2 = 50.11232;
    $i2 = (int)$d2;
    $b2 = (boolean)$d2;
    $s2 = (string)$d2;
    $a2 = (array)$d2;

    //String
    $s3 = "Afzal Sorathiya";
    $i3 = (int)$s3;
    $b3 = (bool)$s3;
    $d3 = (double)$s3;
    $a3 = (array)$s3;

    // Array
    $a4 = array("afzal",15,62.33, true);
    $i4 = (int)$a4;
    $b4 = (bool)$a4;
    $d4 = (double)$a4;
    $s4 = (string)$a4;
    
?>

<html>
    <body>
        <center>
            <table border = "1">
                <tr>
                    <th>Variable Name</th>
                    <th>Variable Value</th>
                    <th>Variable Type</th>
                    <th>Converted Type</th>
                    <th>Converted Value</th>
                </tr>
                <tr>
                    <td rowspan = "4">x</td>
                    <td rowspan = "4"><?php echo $x ?></td>
                    <td rowspan = "4"><?php echo gettype($x); ?></td>
                    <td><?php echo gettype($a);?></td>
                    <td><?php echo $a ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($b);?></td>
                    <td><?php echo $b ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($c);?></td>
                    <td><?php echo $c ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($d);?></td>
                    <td><?php print_r ($d) ?></td>
                </tr>
                <!-- boolean -->
                <tr>
                    <td rowspan = "4">b1</td>
                    <td rowspan = "4"><?php echo $b1 ?></td>
                    <td rowspan = "4"><?php echo gettype($b1); ?></td>
                    <td><?php echo gettype($i1);?></td>
                    <td><?php echo $i1 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($d1);?></td>
                    <td><?php echo $d1 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($s1);?></td>
                    <td><?php echo $s1 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($a1);?></td>
                    <td><?php print_r ($a1) ?></td>
                </tr>
                <!-- Double -->
                <tr>
                    <td rowspan = "4">d2</td>
                    <td rowspan = "4"><?php echo $d2 ?></td>
                    <td rowspan = "4"><?php echo gettype($d2); ?></td>
                    <td><?php echo gettype($i2);?></td>
                    <td><?php echo $i2 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($b2);?></td>
                    <td><?php echo $b2 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($s2);?></td>
                    <td><?php echo $s2 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($a2);?></td>
                    <td><?php print_r ($a2) ?></td>
                </tr>

                 <!-- String -->
                 <tr>
                    <td rowspan = "4">s3</td>
                    <td rowspan = "4"><?php echo $s3 ?></td>
                    <td rowspan = "4"><?php echo gettype($s3); ?></td>
                    <td><?php echo gettype($i3);?></td>
                    <td><?php echo $i3 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($b3);?></td>
                    <td><?php echo $b3 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($d3);?></td>
                    <td><?php echo $d3 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($a3);?></td>
                    <td><?php print_r ($a3) ?></td>
                </tr>

                 <!-- Array -->
                 <tr>
                    <td rowspan = "4">a4</td>
                    <td rowspan = "4"><?php print_r($a4) ?></td>
                    <td rowspan = "4"><?php echo gettype($a4); ?></td>
                    <td><?php echo gettype($i4);?></td>
                    <td><?php echo $i4 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($b4);?></td>
                    <td><?php echo $b4 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($d4);?></td>
                    <td><?php echo $d4 ?></td>
                </tr>
                <tr>
                   <td><?php echo gettype($s4);?></td>
                    <td><?php echo $s4 ?></td>
                </tr>
                
            </table>
            <hr>
        </center>
    </body>
</html>