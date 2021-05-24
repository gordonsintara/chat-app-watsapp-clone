<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chat app</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </head>
    <body>

        <div class="wrapper">
            <section class = "form signup">
                <header>Chat App</header>
                <form action = "#">
                    <div class="error-txt">This is an error</div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="first name" required>
                        </div>
                        <div class="field input">
                            <label>Surname</label>
                            <input type="text" name="surname" placeholder="surname" required>
                        </div>
                    </div>
                        <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="email" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="password" required>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Submit">
                        </div>
                    
                </form> 
                <div class="link">Already signed up?<a href="#">Login</a></a></div>
            </section>

        </div>    


        <script src="js/password-display.js" async defer></script>
        <script src="js/signup.js" async defer></script>
    </body>
</html>