<?php 
    function generatePassword($psswLength){
        $charactersList = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_.@*+!?';
        $password = '';
        $result = '';
        if(empty($psswLength)){
            $result = 'Nessun parametro valido inserito';
        } else if ($psswLength < 8 || $psswLength > 32){
            $result = 'La lunghezza della password deve essere compresa fra gli 8 e i 32 caratteri';
        }else{
            while (strlen($password) < $psswLength){
                $index = rand(0, strlen($charactersList));
                $char = $charactersList[$index];
    
                if (!str_contains($password, $char)){
                    $password .= $char;
                }
            }
            // $result = $password;

            session_start();
            $_SESSION['password'] = $password;
            header('Location: ./success.php');
        }
        return $result;
    }
    
?>