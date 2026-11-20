<!DOCTYPE html>

<html>
    <head>
        <title>Lab Q2</title>
    </head>
    <body>
            <?php 
                 $students = [
                        [
                            'name' => "Alice",
                            'program' => "BIP",
                            'age' => 21
                        ],
                        [
                            'name' => "Bob",
                            'program' => "BIS",
                            'age' => 20
                        ],
                        [
                            'name' => "Raju",
                            'program' => "BIT",
                            'age' => 22
                        ]
                    ];
            ?>

            <table border="1">
                <thead>
                    <td>Name</td>
                    <td>Program</td>
                    <td>Age</td>
                </thead>
                <?php foreach($students as $row): ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["program"]; ?></td>
                        <td><?php echo $row["age"]; ?> </td>
                    </tr>
                <?php endforeach; ?>
                
            </table>
    </body>
</html>