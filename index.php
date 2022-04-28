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

        <form action="#">
            <div class="field">
                <label class="label">Name</label>
                <div class="control has-icons-left has-icons-right">
                <input class="input is-success" type="text" placeholder="Enter your name">
                <span class="icon is-small is-left">
                    <i class="fas fa-user"><img src="assets/img/user.png" alt="user"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"><img src="assets/img/checkmark.png" alt="check"></i>
                </span>
            </div>
            </div>

            <div class="field">
            <label class="label">Username</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" placeholder="Enter your UserName" >
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
                        <select>
                            <option>Man</option>
                            <option>Woman</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="email" placeholder="Enter your email">
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
                    <input class="input is-success" type="country" placeholder="Enter your country">
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
                        <select>
                            <option>Reclamation</option>
                            <option>Repayement</option>
                            <option>Others..</option>
                        </select>
                    </div>
                </div>
            </div>



            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Write your message"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-link" style = " background-color :#0D8187">Submit</button>
                </div>
            </div>
        </form>    
        <footer class="footer" style='background-color: #0D8187'>

            <div class="content has-text-centered" >
                <div class="logo-github"><img src="assets/img/github.png" alt="logo github"></div>
                <p class="pfoot">
                    Formulaire créer par Anaïs Bossouw
                </p>
            </div>
        </footer>
    </body>

</html>