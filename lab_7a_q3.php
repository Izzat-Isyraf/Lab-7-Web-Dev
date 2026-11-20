<!DOCTYPE html>

<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php 

            $w1 = 4;
            $w2 = 2;

            function calculateAreaOfRectangle ($width, $length) {
                return $width*$length;
            }

            $result = calculateAreaOfRectangle($w1,$w2);
            echo "The area of rectangle with a width of " , $w1,  " and " , $w2,  " is ",  $result;
        ?>

    </body>
</html>