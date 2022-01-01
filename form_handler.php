<?php
if(isset($_POST["register"])){

    if(passwordValidation()){
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        echo "Your Email is : " . $email . "<br>";
        echo "Your Gender is : " . $gender . "<br>";

        if(isset($_POST["colors"])){
            $colors = $_POST["colors"];
            echo "Selected Colors :<br>";

            foreach ($colors as $color){
                echo $color . "<br>";
            }

        }else{
            echo "No favorite color!<br>";
        }
        echo "Registered successfully!";

    }else{
        echo "“Password should be between 8 to 16 characters!";
    }

}else{
    header("Location: form.html");
}

function passwordValidation(): bool
{

    $password = $_POST["password"];
    if(strlen($password)>=8 and strlen($password)<=16){
        return true;
    }else{
        return false;
    }
}
?>