



<?php
    require_once 'elements/header.php';

    require_once 'functions/auth.php';
    $erreur = null;
    if (!empty($_POST['_username']) && !empty($_POST['_password'])) {
            // on connecte
            if (!ldap_con($_POST['_username'], $_POST['_password'])) {
                $erreur = "Invalid credentials";
            }
}

if (est_connecte()) {
    header('Location : /dashboard.php');
    exit();
}
?>
    <body>
    
        <div class="container">
            <div class="login">

                <div class="login-heading">

                    Dashboard Maintenance. <br>
                    <div class="Please-login">Please login.</div>
                    <?php if ($erreur): ?>
        <div class="alert alert-danger">
            <?= $erreur ?>
        </div>
    <?php endif; ?>

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
     <?php   require_once 'elements/footer.php'; ?>