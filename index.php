<?php
  try
  {
      // On se connecte à MySQL
      $bdd = new PDO('mysql:host=localhost;dbname=contact_form;charset=utf8', 'root', 'root');
  }
  catch(Exception $e)
  {
      // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
            <link rel="stylesheet" href="assets\css\style.css">
            <!--<link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bellota&display=swap" rel="stylesheet">-->
            
            <title>Contact Form</title>
        </head>
    <body class= "has-background-primary-light" >
        <header>
        <div class="content has-text-centered">
            <p class="contact">
                Contact form 
            </p>
        </div>
        </header>

        <div class="logo-hp"><img src="assets/img/hackers-poulette-logo.png" alt="logo github"></div>

        <form method = "post" action="#">
            <div class="field">
                <label class="label">Firstname</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" name= "Firstname" placeholder="Enter your Firstname" required aria-required=true aria-label="Enter your firstname">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"><img src="assets/img/user.png" alt="user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"><img src="assets/img/checkmark.png" alt="check"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Lastname</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" name="Lastname" placeholder="Enter your LastName" required aria-required=true aria-label="Enter your name">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"><img src="assets/img/user.png" alt=""></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"><img src="assets/img/checkmark.png" alt=""></i>
                    </span>
                </div>
                <!--<p class="help is-success">This username is available</p>-->
            </div>

            <div class="field">
                <label class="label">Gender</label>
                <div class="control">
                    <div class="select">
                        <select name="Gender" aria-require=true aria-label="Select your gender">
                            <option aria-require=true aria-label="Man">Man</option>
                            <option aria-require=true aria-label="Woman">Woman</option>
                            <option aria-require=true aria-label="Other">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="email" name="Email" placeholder="Enter your email" required aria-required=true aria-label="Enter your email">
                    <!--<input class="input is-success" type="text" placeholder="Enter your email" >-->
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"><img src="assets/img/email.png" alt=""></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="warning"><img src="assets/img/warning.png" alt=""></i>
                    </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
                <!--<p class="help is-success">This username is available</p>-->
            </div>

            <div class="field">
                <label class="label">Country</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="country" name="Country" placeholder="Enter your country" required aria-required=true aria-label="Enter your Country">
                    <span class="icon is-small is-left">
                        <i class="country"><img src="assets/img/country.png" alt=""></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"><img src="assets/img/checkmark.png" alt=""></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Subject</label>
                <div class="control">
                    <div class="select">
                        <select name="Subject" aria-required=true aria-label="Enter your subject">
                            <option aria-required=true aria-label="Others">Others</option>
                            <option aria-required=true aria-label="Reclamation">Reclamation</option>
                            <option aria-required=true aria-label="Repayement">Repayement</option>                            
                        </select>
                    </div>
                </div>
            </div>



            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" name="Message" placeholder="Write your message" required aria-required=true aria-label="Enter your message"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link" style = " background-color :#0D8187" aria-required=true aria-label="Submit">Submit</button>
                </div>
            </div>
        </form>
        
        <?php
            $Firstname = isset($_POST['Firstname']) ? $_POST['Firstname'] : NULL;
            $Lastname = isset($_POST['Lastname']) ? $_POST['Lastname'] : NULL;
            $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : NULL;
            $Email = isset($_POST['Email']) ? $_POST['Email'] : NULL;
            $Country = isset($_POST['Country']) ? $_POST['Country'] : NULL;
            $Subject = isset($_POST['Subject']) ? $_POST['Subject'] : NULL;
            $Message = isset($_POST['Message']) ? $_POST['Message'] : NULL;


            $Data = $bdd -> prepare("INSERT INTO data_form(Firstname, Lastname, Gender, Email, Country, Subject, Message) VALUES (:Firstname, :Lastname, :Gender, :Email, :Country, :Subject, :Message)");
        
            $Data -> execute([
                'Firstname' => $Firstname,
                'Lastname' => $Lastname,
                'Gender' => $Gender,
                'Email' => $Email,
                'Country' => $Country,
                'Subject' => $Subject,
                'Message' => $Message,
            ]) or die(print_r($bdd->errorInfo()));

            header('Location : /hackers-poulette/index.php');
        ?>

        <footer class="footer" style='background-color: #0D8187'>

            <div class="content has-text-centered" >
                <div class="logo-github">
                    <a href="https://github.com/Nymphadorart/Hackers-Poulette" target="_blank">
                        <img src="assets/img/github.png" alt="logo github" aria-required=true aria-label="Github page">
                    </a>
                </div>
                <p class="pfoot">
                    Formulaire créer par Anaïs Bossouw
                </p>
            </div>
        </footer>
    </body>

</html>