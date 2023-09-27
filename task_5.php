<?php
function generatePassword($length) {
    
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    
    $charCount = strlen($characters);

   
    for ($i = 0; $i < $length; $i++) {
       
        $randomIndex = rand(0, $charCount - 1);
  
        $password .= $characters[$randomIndex];
    }

    return $password;
}


$password = generatePassword(12);

echo "Generated Password: $password\n";
?>
