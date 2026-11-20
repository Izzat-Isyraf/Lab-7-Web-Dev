<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Lab 7a Q1</title>
        </head>
    <body>
        <?php
            $name = "Muhammad Izzat Isyraf Bin Esa";
            $matric = "CI250098";
            $course = "Web Developement";
            $yearOfStudy = 2;
            $address = "No 9, Jalan Anggerik Kampung Cahaya Baru, 81750,  Masai, Johor" 
        ?>
        <table>
            <tr>
                <td>Name:</td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric</td>
                <td><?php echo "$matric"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?> </td>
            </tr>
            <tr>
                <td>Year of Study: </td>
                <td><?php echo $yearOfStudy ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>

    </body>
</html>