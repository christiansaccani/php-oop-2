<?php

// PremiumUser è figlio di User
class User extends Guest {

    protected $username;
    protected $email;

    
    // anche con la classe figlia mi serve il costruttore per istanziare l'oggetto
    function __construct($ip, $username, $email) {
        
        // usa il costruttore del genitore
        parent::__construct($ip);

        // poi vado a compilare le variabili d'istanza in più
        $this->username = $username;
        $this->email = $email;
    }
}