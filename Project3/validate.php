<?php
$username = $password = $confirm = $nameFirst = $nameLast = $address1 = $address2 = $city = $state = $zipcode = $phone = $email = $gender = $maritalStatus = $birthDate = "";
$usernameError = $passwordError = $confirmError = $nameFirstError = $nameLastError = $address1Error = $address2Error = $cityError = $stateError = $zipcodeError = $phoneError = $emailError = $genderError = $maritalStatusError = $birthDateError = "";
$usernameValid = $passwordValid = $confirmValid = $nameFirstValid = $nameLastValid = $address1Valid = $cityValid = $stateValid = $zipcodeValid = $phoneValid = $emailValid = $genderValid = $maritalStatusValid = $birthDateValid = false;
$address2Valid = true;
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    $username = test_input($_POST["inputUsername"]);
    if (empty($username)) {
        $usernameError = "Required";
        $isValid = false;
    } else {
        if (strlen($username) < 6) {
            $usernameError = "Minimum length is 6";
            $isValid = false;
        } else if (strlen($username) > 50) {
            $usernameError = "Maximum length is 50";
            $isValid = false;
        } else {
            $usernameValid = true;
        }
    }

    $password = test_input($_POST["inputPassword"]);
    if (empty($password)) {
        $passwordError = "Required";
        $isValid = false;
    } else {
        if (strlen($password) < 8) {
            $passwordError = "Minimum length is 8";
            $isValid = false;
        } else if (strlen($password) > 50) {
            $passwordError = "Maximum length is 50";
            $isValid = false;
        } else if (!preg_match("(.*[A-Z].*)", $password)) {
            $passwordError = "At least one uppercase letter";
            $isValid = false;
        } else if (!preg_match("(.*[a-z].*)", $password)) {
            $passwordError = "At least one lowercase letter";
            $isValid = false;
        } else if (!preg_match("(.*[0-9].*)", $password)) {
            $passwordError = "At least one number";
            $isValid = false;
        } else if (!preg_match("(.*[#?!@$%^&*-].*)", $password)) {
            $passwordError = "At least one special character";
            $isValid = false;
        } else {
            $passwordValid = true;
        }
    }

    $confirm = test_input($_POST["inputConfirm"]);
    if (empty($confirm)) {
        $confirmError = "Required";
        $isValid = false;
    } else {
        if (strlen($confirm) < 8) {
            $confirmError = "Minimum length is 8";
            $isValid = false;
        } else if (strlen($confirm) > 50) {
            $confirmError = "Maximum length is 50";
            $isValid = false;
        } else if (!preg_match("(.*[A-Z].*)", $confirm)) {
            $confirmError = "At least one uppercase letter";
            $isValid = false;
        } else if (!preg_match("(.*[a-z].*)", $confirm)) {
            $confirmError = "At least one lowercase letter";
            $isValid = false;
        } else if (!preg_match("(.*[0-9].*)", $confirm)) {
            $confirmError = "At least one number";
            $isValid = false;
        } else if (!preg_match("(.*[#?!@$%^&*-].*)", $confirm)) {
            $confirmError = "At least one special character";
            $isValid = false;
        } else if (strcmp($confirm, $password)) {
            $confirmError = "Doesn't match password";
            $isValid = false;
        } else {
            $confirmValid = true;
        }
    }

    $nameFirst = test_input($_POST["inputNameFirst"]);
    if (empty($nameFirst)) {
        $nameFirstError = "Required";
        $isValid = false;
    } else {
        if (strlen($nameFirst) > 50) {
            $nameFirstError = "Maximum length is 50";
            $isValid = false;
        } else {
            $nameFirstValid = true;
        }
    }

    $nameLast = test_input($_POST["inputNameLast"]);
    if (empty($nameLast)) {
        $nameLastError = "Required";
        $isValid = false;
    } else {
        if (strlen($nameLast) > 50) {
            $nameLastError = "Maximum length is 50";
            $isValid = false;
        } else {
            $nameLastValid = true;
        }
    }

    $address1 = test_input($_POST["inputAddress1"]);
    if (empty($address1)) {
        $address1Error = "Required";
        $isValid = false;
    } else {
        if (strlen($address1) > 100) {
            $address1Error = "Maximum length is 100";
            $isValid = false;
        } else {
            $address1Valid = true;
        }
    }

    $address2 = test_input($_POST["inputAddress2"]);
    if (!empty($address2)) {
        if (strlen($address2) > 100) {
            $address2Error = "Maximum length is 100";
            $address2Valid = false;
            $isValid = false;
        }
    }

    $city = test_input($_POST["inputCity"]);
    if (empty($city)) {
        $cityError = "Required";
        $isValid = false;
    } else {
        if (strlen($city) > 50) {
            $cityError = "Maximum length is 50";
            $isValid = false;
        } else {
            $cityValid = true;
        }
    }

    $state = test_input($_POST["inputState"]);
    if (empty($state)) {
        $stateError = "Required";
        $isValid = false;
    } else {
        if (strlen($state) > 2) {
            $stateError = "Max length is 2";
            $isValid = false;
        } else {
            $stateValid = true;
        }
    }

    $zipcode = test_input($_POST["inputZipcode"]);
    if ($zipcode == "" or $zipcode == null) {
        $zipcodeError = "Required";
        $isValid = false;
    } else {
        if (strlen($zipcode) < 5) {
            $zipcodeError = "Minimum length is 5";
            $isValid = false;
        } else if (strlen($zipcode) > 10) {
            $zipcodeError = "Maximum length is 10";
            $isValid = false;
        } else if (!preg_match("/^[0-9]{5}$/", $zipcode) and !preg_match("/^[0-9]{5}-[0-9]{4}$/", $zipcode)) {
            $zipcodeError = "Format is xxxxx or xxxxx-xxxx";
            $isValid = false;
        } else {
            $zipcodeValid = true;
        }
    }

    $phone = test_input($_POST["inputPhone"]);
    if ($phone == "" or $phone == null) {
        $phoneError = "Required";
        $isValid = false;
    } else {
        if (strlen($phone) > 12) {
            $phoneError = "Maximum length is 12";
            $isValid = false;
        } else if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
            $phoneError = "Format is xxx-xxx-xxxx";
            $isValid = false;
        } else {
            $phoneValid = true;
        }
    }

    $email = test_input($_POST["inputEmail"]);
    if (empty($email)) {
        $emailError = "Required";
        $isValid = false;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Format is x@x.x";
            $isValid = false;
        } else {
            $emailValid = true;
        }
    }

    if (isset($_POST["inputGender"])) {
        $gender = test_input($_REQUEST["inputGender"]);
        $genderValid = true;
    } else {
        $genderError = "Required";
        $isValid = false;
    }

    if (isset($_POST["inputMaritalStatus"])) {
        $maritalStatus = test_input($_REQUEST["inputMaritalStatus"]);
        $maritalStatusValid = true;
    } else {
        $maritalStatusError = "Required";
        $isValid = false;
    }

    $birthDate = test_input($_POST["inputBirthDate"]);
    if ($birthDate == "" or $birthDate == null) {
        $birthDateError = "Required";
        $isValid = false;
    } else {
        if (!preg_match("~(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d~", $birthDate)) {
            $birthDateError = "Format is MM/dd/yyyy";
            $isValid = false;
        } else {
            $birthDateValid = true;
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>