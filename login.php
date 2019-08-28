



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


?>


<!-- partial:index.partial.html -->
<div class="modal is-open">
    <div class="modal-container">
        <div class="modal-left">
            <h1 class="modal-title">Dashboard Maintenance</h1>
            <p class="modal-desc">Welcome to Dashboard Online.</BR>
                Product Support Retail.</p>
                
            <form action="" method="post">
                <div class="input-block">
                    <label for="email" class="input-label">Email</label>
                    <input type="email" name="_username" id="email" placeholder="Email">
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Password</label>
                    <input type="password" name="_password" id="password" placeholder="Password">
                </div>
                <div class="modal-buttons">
                    <button type="submit" class="input-button">Login</button>
                    <img class="sraiimg" src="./images/SRAI.PNG" />
                </div>
            </form>
        </div>
        <div class="modal-right">
            <img  src="./images/mountains.jpg" alt="">
        </div>
	</div>
</div>
     <?php   require_once 'elements/footer.php'; ?>