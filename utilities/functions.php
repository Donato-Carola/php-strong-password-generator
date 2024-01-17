<?php 
function rand_string($length, $repeat, $letter, $number, $simbol)
{
    $characters = '';



    if ($letter) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }

    if ($number) {
        $characters .= '0123456789';
    }

    if ($simbol) {
        $characters .= '!@#$%^&*()-_+=<>?';
    }

    $password = '';
    $charactersLength = strlen($characters);


    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }

    if (!$repeat) {
        $password = implode('', array_unique(str_split($password)));
    }
    return $password;

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Controlla se il parametro "password" è presente nella query string
        if (isset($_GET['password'])) {
            // Ottieni la lunghezza della password dalla query string
            $passwordLength = $_GET['password'];

            // Altre opzioni del form
            $allowRepeat = isset($_GET['repeat']);
            $allowLetters = isset($_GET['letter']);
            $allowNumbers = isset($_GET['number']);
            $allowSymbols = isset($_GET['simbol']);

            // Genera la password casuale
            $generatedPassword = rand_string($passwordLength, $allowRepeat, $allowLetters, $allowNumbers, $allowSymbols);
        }
    }
}

?>