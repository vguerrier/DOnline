<?php
use \Adldap\Adldap;
function est_connecte (): bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connect']);
}

function forcer_utilisateur_connecte (): void {
    if(!est_connecte()) {
       header('Location: /login.php');
        exit(); 
    }

}

function logOut() {
    session_start();
    unset($_SESSION['connect']);
    hearder('Location: /');
}

function LDAP_con($username, $password): bool {
    

    // Construct new Adldap instance.
    # LDAP #
    $BASE_DN = "dc=EYC,dc=com";
    $SEARCH_DN = "EYC\guerrier";
    $SEARCH_PASSWORD = "Bafmax9999*";
    # SEARCH_DN="EYC\messika"
    # SEARCH_PASSWORD="Gm2016*-"
    # $DEFAULT_ROLES = ROLE_USER;
    # $UID_KEY = samaccountname;
    $HOST = "10.118.0.6";

    require_once __DIR__ . '/../vendor/autoload.php';
    


    $ad = new Adldap();

    // Create a configuration array.
    $config = [  
    // An array of your LDAP hosts. You can use either
    // the host name or the IP address of your host.
    'hosts'    => [$HOST],

    // The base distinguished name of your domain to perform searches upon.
    'base_dn'  => $BASE_DN,

    // The account to use for querying / modifying LDAP records. This
    // does not need to be an admin account. This can also
    // be a full distinguished name of the user account.
    'username' => $SEARCH_DN,
    'password' => $SEARCH_PASSWORD,
    ];

    // Add a connection provider to Adldap.
    $ad->addProvider($config);

    try {
        // If a successful connection is made to your server, the provider will be returned.
        $provider = $ad->connect();

        // Performing a query.
        //$username = "EYC\\" . $username;
        //$results = $provider->search()->where('cn', '=', 'John Doe')->get();

        
        //$user = $provider->search()->find("messika");
        if ($provider->auth()->attempt($username, $password)) {
            
             echo "Connected";
             session_start();
             $_SESSION['connect'] = 1;
             header('Location: /dashboard.php');
             exit();
        }
        else {
            return false;
        }
        
        // Finding a record.
        //$user = $provider->search()->find('kemler');
        // Authenticating against your LDAP server.
     //   if ($provider->auth()->attempt("EYC\Guerrier", "Bafmax88")) {
     //       echo "Connected"; }
     //   else
     //       echo "not Connected";
        
        
        
    } catch (\Adldap\Auth\BindException $e) {
        
        // There was an issue binding / connecting to the server.

    }
}
?>