<!DOCTYPE html>
    <html>
<head>
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
           </head>



<?php

?>
    <body>
        <div class="container">
            <div class="login">

                <div class="login-heading">

                    Dashboard Maintenance. <br>
                    <div class="Please-login">Please login.</div>

                </div>
                <form action="" method="post">
                        
                    <input type="text" name="_username" placeholder="Username" required="required" class="input-txt" />
                    <input type="password" name="_password" placeholder="Password" required class="input-txt" />
                    <div class="login-footer">
                        <a href="#" class="lnk"></a>
                    <div class="form-group">
                        <button type="submit" class="btn btn--right">Sign in  </button>
                    </div>
                
                </form>
            </div>
        </div>
    </body>
</html>