<!DOCTYPE html>
<html lang="nl">
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Toets herkansing PHP</title>
</head>
<body>
    <?php
        $person = $_GET['person'];
        $day = $_GET['day'];
        $month = $_GET['month'];
        $year = $_GET['year'];
        $id = $_GET['id'];
    ?>
    <div id="container">
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-list"></i></a></li>
                <li><a href="create.php"><i class="fas fa-calendar-plus"></i></a></li>
            </ul>
        </nav>
        
        <h1>VERWIJDER EEN VERJAARDAG</h1>
        <h2><?php echo $person; ?></h2><br/><i class="fas fa-calendar-day"></i><?php echo' '.$day.'-'.$month.'-'.$year; ?><br/><br/>
        <a href='delete.php?id=<?php echo $id ?>&delete=true'><button class="btn btn-primary">Verwijderen</button></a>
    </div>
    <?php
          function delete() {       
                $servername = "localhost";
                $username = "root";
                $password = "mysql";
                $dbname = 'calendar';
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $id = $_GET['id'];
                    $sql = "DELETE FROM birthdays WHERE id = $id;";
                    $conn->exec($sql);
                    echo '<script>console.log("verjaardag succesvol verwijderd");</script>';
                    echo '<script>alert("verjaardag succesvol verwijderd");</script>';
                    echo "<script>window.open('index.php','_self')</script>";
                    
                    }
                catch(PDOException $e)
                    {
                    echo '<script>console.log("Connection failed: ' . $e->getMessage() . '");</script>';
                    }
                $conn = null;
            echo '<script>console.log("succesvol")</script>';
        }
        if (isset($_GET['delete'])) {
            delete();
        }
    ?>
    <footer>&copy;<?php echo date('Y') ?> Pieterjan van Dijk</footer>
</body>
</html>