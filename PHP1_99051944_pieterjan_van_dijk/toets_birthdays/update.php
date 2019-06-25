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
        $naam = $_GET['person'];
        $dag = $_GET['day'];
        $maand = $_GET['month'];
        $jaar = $_GET['year'];
        $id = $_GET['id'];
    ?>
    <div id="container">
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-list"></i></a></li>
                <li><a href="create.php"><i class="fas fa-calendar-plus"></i></a></li>
            </ul>
        </nav>

        <h1>Wijzig een verjaardag</h1>
        <form class="was-validated" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Naam</span>
                </div>
                <input required type="text" class="form-control" placeholder="Naam" name='naam' value='<?php echo $naam; ?>'>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Datum</span>
                </div>
                <input name='dag' required type="number" min="1" max="31" class="form-control" placeholder="Dag" value='<?php echo $dag; ?>'>
                <input name='maand' required type="number" min="1" max="12"  class="form-control" placeholder="Maand" value='<?php echo $maand; ?>'>
                <input name='jaar' required type="number" min="1900" max="2019"  class="form-control" placeholder="Jaar" value='<?php echo $jaar; ?>'>
            </div>
            
            <button name='submit' type="submit" class="btn btn-primary">Updaten</button>
        </form>
    </div>
    <footer>&copy;<?php echo date('Y') ?> Pieterjan van Dijk</footer>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $naam = strip_tags($_POST['naam']);
            $dag = strip_tags($_POST['dag']);
            $maand = strip_tags($_POST['maand']);
            $jaar = strip_tags($_POST['jaar']);
            if(empty($naam)||empty($naam)||empty($naam)||empty($naam)){
               echo "<script type='text/javascript'>alert('please fill al requiered fields');</script>";
            }else{
                $servername = "localhost";
                $username = "root";
                $password = "mysql";
                $dbname = 'calendar';

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE birthdays SET `person` = '$naam', `day` = '$dag', `month`= '$maand', `year` = '$jaar' WHERE `id` = $id";
                    // use exec() because no results are returned
                    $conn->exec($sql);
                    echo '<script>console.log("update succesvol");</script>';
                    echo "<script>window.open('index.php','_self')</script>";

                    }
                catch(PDOException $e)
                    {
                    echo '<script>console.log("connectie mislukt: ' . $e->getMessage() . '");</script>';
                    }

                $conn = null;
            }
        }
    ?>
</body>
</html>