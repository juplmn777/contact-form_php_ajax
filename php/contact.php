<?php
    $array = array(
        "name" => "",
        "firstname" => "",
        "email" => "",
        "message" => "",
        "nameError" => "",
        "firstnameError" => "",
        "mailError" => "",
        "messageError" => "",
        "isSuccess" => false
    );

    $emailTo = "test@test.com";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $array["name"] = checkInput($_POST['name']);
        $array["firstname"] = checkInput($_POST['firstname']);
        $array["email"] = checkInput($_POST['email']);
        $array["message"] = checkInput($_POST['message']);
        $array["isSuccess"] = true;
        $emailText = "";

        if(empty($array["name"]))
        {
            $array["nameError"] = '<i class="fas fa-exclamation-triangle"></i> Veuillez saisir votre nom...';
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Name: {$array['name']}\n";
            $array["nameError"] = "<i class='fas fa-check'></i>";
        }
        if(empty($array["firstname"]))
        {
            $array["firstnameError"] = '<i class="fas fa-exclamation-triangle"></i> Veuillez saisir votre prénom...';
            $array["isSuccess"] = false;
        }
        else{
            $emailText .= "FirstName: {$array['firstname']}\n";
            $array["nameError"] = "<i class='fas fa-check'></i>";
        }
        if(!isEmail($array["email"])){
            $array["emailError"] = '<i class="fas fa-exclamation-triangle"></i> Veuillez renseigner une adresse mail valide...';
            $array["isSuccess"] = false;
        }
        else{
            $emailText .= "Email: {$array['email']}\n";
        }
        if(empty($array["message"]))
        {
            $array["messageError"] = '<i class="fas fa-exclamation-triangle"></i> Veuillez renseigner votre message...';
            $array["isSuccess"] = false;
        }
        else
        {
            $emailText .= "Message: {$array['message']}";
            $array["messageError"] = "<i class='fas fa-check'></i>";
        }
        if($array["isSuccess"])
        {
            $headers = "From: {$array['name']} {$array['firstname']} <{$array['email']}>\r\nReply-To:{$array['email']}";
            mail($emailTo, "message depuis cv en ligne", $emailText, $headers);
        }
        echo json_encode($array);
    }

    function checkInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
?>