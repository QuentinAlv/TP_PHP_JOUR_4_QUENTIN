<?php

class InvalidEmailException extends Exception {
    public function __construct($message) {
        parent::__construct($message);
    }
}

function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidEmailException("Veuillez entrer un email valide.");
    }
    return true;
}

try {
    validateEmail("qfafazfazrgkjgjf");
} catch (InvalidEmailException $error) {
    echo $error->getMessage();
}




