<!DOCTYPE html>
<html lang="nl">
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Toets herkansing PHP</title>
</head>
<body>
    <div id="container">
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-list"></i></a></li>
                <li><a href="create.php"><i class="fas fa-calendar-plus"></i></a></li>
            </ul>
        </nav>
        
        <h1>Verjaardagen</h1>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "mysql";
            $dbname = 'calendar';
            try {
                $conn = new PDO("mysql:host=$servername;dbname=calendar", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
            $sql = "SELECT id, person, day, month, year FROM birthdays ORDER BY month, day asc";        //ORDER BY time
            $stmt = $conn->prepare($sql);
            $stmt->execute();
                $months = array(
                    'ERROR',
                    'januari',
                    'februari',
                    'maart',
                    'april',
                    'mei',
                    'juni',
                    'juli',
                    'augustus',
                    'september',
                    'oktober',
                    'november',
                    'december',
                    );

            while ($data = $stmt->fetch())
                for($i=1;$i<=12;$i++){
                if($data['month']==$i){
                    echo '<div>'
                        .'<div id="monthdiv"><h4>'.$months[$data['month']].'</h4></div>'
                        .'<h2>'.$data['day'].'-'.$data['month'].'-'.$data['year'].' : '.$data['person'].'</h2>
                        <h3><a href="update.php?id='.$data['id'].'&person='.$data['person'].'&day='.$data['day'].'&month='.$data['month'].'&year='.$data['year'].'"><i class="fas fa-pen"></i></a><a href="delete.php?id='.$data['id'].'&person='.$data['person'].'&day='.$data['day'].'&month='.$data['month'].'&year='.$data['year'].'"><i class="fas fa-trash-alt"></i></a></h3>
                    </div>';
                    $months[$data['month']]='';
                }
            }
        ?>
    </div>
    <footer>&copy;<?php echo date('Y') ?> Pieterjan van Dijk</footer>
</body>
</html>