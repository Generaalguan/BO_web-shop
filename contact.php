<?php
    require 'functions.php';
    $connection = dbconnect();

    $voornaam = '';
    $achternaam = '';
    $email = '';
    $bericht = '';
//opslag variabele voor errors
$errors=[];

if($_SERVER['REQUEST_METHOD']=="POST"){
    //gegevens opslaan
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];
    $tijd = date('Y-m-d H:i:s' );

    //fouten controlleren/ valideren
    if( isEmpty($voornaam) ){
        $errors['voornaam'] = 'Please fill in your first name!';
    }
    if( isEmpty($achternaam) ){
        $errors['achternaam'] = 'Please fill in your last name!';
    }
    if(!isValidEmail($email) ){
        $errors['email'] = 'This is not a valid e-mail!';
    }
    if(!hasMinLength($bericht, 7) ){
        $errors['bericht'] = 'Has to be more than 7 characters';
    }

    print_r($errors);

    if(count ($errors) == 0 ){

        $sql = "INSERT INTO `berichten` (`voornaam`, `achternaam`, `email`, `bericht`, `tijd`) VALUES (:voornaam, :achternaam, :email, :bericht, :tijd);";
        $statement = $connection->prepare($sql);
        $params = [
            'voornaam' => $voornaam, 
            'achternaam' => $achternaam,
            'email' => $email,
            'bericht' => $bericht,
            'tijd' => $tijd
        ];

        //stuur bezoeker door
        $statement->execute($params);
        header('location: bedankt.html');
        exit;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time()?>">
    <title>contact us</title>
</head>
<body>
    <h1>contact us</h1>

    <section class="form-container">
        <form action="contact.php" method="POST" novalidate>
            <div class="form-field">
                <label class="form-label" for="voornaam">first name</label>
                <input class="form-input" type="text"  value="<?php echo $voornaam; ?>" id="voornaam" name="voornaam" placeholder="Your first name" required/>

                <?php  if(!empty($errors['voornaam'])):?>
                <p class="form-error"><?php echo $errors['voornaam'] ?></p>
                <?php endif; ?>

            </div>
            
            <div class="form-field">
                <label class="form-label" for="achternaam">last name</label>
                <input class="form-input" type="text" value="<?php echo $achternaam; ?>" id="achternaam" name="achternaam" placeholder="Your last name" required/>

                <?php  if(!empty($errors['achternaam'])):?>
                <p class="form-error"><?php echo $errors['achternaam'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-field">
                <label class="form-label" for="email">E-mail</label>
                <input class="form-input" type="text"  value="<?php echo $email; ?>" id=email name="email" placeholder="Your email" required/>

                <?php  if(!empty($errors['email'])):?>
                <p class="form-error"><?php echo $errors['email'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-field">
                <label class="form-label" for="bericht">mesage</label>
                <textarea class="form-input" type="text"  id="bericht" name="bericht" placeholder="Your mesage" required> <?php echo $bericht; ?></textarea>

                <?php  if(!empty($errors['bericht'])):?>
                <p class="form-error"><?php echo $errors['bericht'] ?></p>
                <?php endif; ?>
            </div>
            <button class="btn" type="submit" >Send</button>
        </form>
    </section>
</body>
</html>