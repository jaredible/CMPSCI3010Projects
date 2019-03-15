<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CMPSCI3010 Project3">
        <meta name="author" content="Jared Diehl">
        
        <title>Animations</title>
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/animations.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>
    <body>
        <?php 
        include 'validate.php';
        ?>

        <header id="header">
            <div class="container-fluid">
                <span>Animations</span>
            </div>
        </header>

        <div id="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div id="menu" class="col-sm-4 col-md-3">
                        <div id="v-pills-tab" class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" href="index.html" role="tab">Home</a>
                            <a class="nav-link" href="registration.php" role="tab">Registration</a>
                            <a class="nav-link active" href="animations.php" role="tab">Animations</a>
                        </div>
                    </div>
                    <div id="content" class="col-sm-8 col-md-9">
                        <form name="registration" method="post" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="row">
                                <div class="col-md-6 animated fadeIn">
                                    <img class="img-fluid img-center col-md-12" src="images/image1.jpg" alt="default">
                                    <p class="text-center"><span class="error">* required field</span></p>
                                    <div class="form-group row animated pulse delay-1ms">
                                    <label for="inputUsername" class="col-md-3 col-form-label">Username</label>
                                        <div class="col-md-<?php echo (empty($usernameError) ? ($usernameValid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputUsername" class="form-control" name="inputUsername" value="<?php echo $username; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($usernameError) ? ($usernameValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($usernameValid ? "" : "* "); echo $usernameError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-2ms">
                                    <label for="inputPassword" class="col-md-3 col-form-label">Password</label>
                                        <div class="col-md-<?php echo (empty($passwordError) ? ($passwordValid ? 9 : 8) : 6); ?>">
                                            <input type="password" id="inputPassword" class="form-control" name="inputPassword" value="<?php echo $password; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($passwordError) ? ($passwordValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($passwordValid ? "" : "* "); echo $passwordError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-3ms">
                                    <label for="inputConfirm" class="col-md-3 col-form-label">Confirm Password</label>
                                        <div class="col-md-<?php echo (empty($confirmError) ? ($confirmValid ? 9 : 8) : 6); ?>">
                                            <input type="password" id="inputConfirm" class="form-control" name="inputConfirm" value="<?php echo $confirm; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($confirmError) ? ($confirmValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($confirmValid ? "" : "* "); echo $confirmError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-4ms">
                                    <label for="inputNameFirst" class="col-md-3 col-form-label">First Name</label>
                                        <div class="col-md-<?php echo (empty($nameFirstError) ? ($nameFirstValid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputNameFirst" class="form-control" name="inputNameFirst" value="<?php echo $nameFirst; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($nameFirstError) ? ($nameFirstValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($nameFirstValid ? "" : "* "); echo $nameFirstError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-5ms">
                                    <label for="inputNameLast" class="col-md-3 col-form-label">Last Name</label>
                                        <div class="col-md-<?php echo (empty($nameLastError) ? ($nameLastValid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputNameLast" class="form-control" name="inputNameLast" value="<?php echo $nameLast; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($nameLastError) ? ($nameLastValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($nameLastValid ? "" : "* "); echo $nameLastError; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 animated fadeIn">
                                    <div class="form-group row animated pulse delay-6ms">
                                    <label for="inputAddress1" class="col-md-3 col-form-label">Address Line 1</label>
                                        <div class="col-md-<?php echo (empty($address1Error) ? ($address1Valid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputAddress1" class="form-control" name="inputAddress1" value="<?php echo $address1; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($address1Error) ? ($address1Valid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($address1Valid ? "" : "* "); echo $address1Error; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-7ms">
                                    <label for="inputAddress2" class="col-md-3 col-form-label">Address Line 2</label>
                                        <div class="col-md-9">
                                            <input type="text" id="inputAddress2" class="form-control" name="inputAddress2" value="<?php echo $address2; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($address2Error) ? ($address2Valid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($address2Valid ? "" : "* " . $address2Error); ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-8ms">
                                    <label for="inputCity" class="col-md-3 col-form-label">City</label>
                                        <div class="col-md-<?php echo (empty($cityError) ? ($cityValid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputCity" class="form-control" name="inputCity" value="<?php echo $city; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($cityError) ? ($cityValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($cityValid ? "" : "* "); echo $cityError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-9ms">
                                    <label for="inputState" class="col-md-3 col-form-label">State</label>
                                        <div class="col-md-<?php echo (empty($stateError) ? ($stateValid ? 9 : 8) : 6); ?>">
                                            <select class="form-control" id="inputState" name="inputState">
                                                <?php 
                                                $states = array(
                                                    array("", " -- "), 
                                                    array("AK", "Alaska"), 
                                                    array("AL", "Alabama"), 
                                                    array("AR", "Arkansas"), 
                                                    array("AZ", "Arizona"), 
                                                    array("CA", "California"), 
                                                    array("CO", "Colorado"), 
                                                    array("CT", "Connecticut"), 
                                                    array("DC", "District of Columbia"), 
                                                    array("DE", "Delaware"), 
                                                    array("FL", "Florida"), 
                                                    array("GA", "Georgia"), 
                                                    array("HI", "Hawaii"), 
                                                    array("IA", "Iowa"), 
                                                    array("ID", "Idaho"), 
                                                    array("IL", "Illinois"), 
                                                    array("IN", "Indiana"), 
                                                    array("KS", "Kansas"), 
                                                    array("KY", "Kentucky"), 
                                                    array("LA", "Louisiana"), 
                                                    array("MA", "Massachusetts"), 
                                                    array("MD", "Maryland"), 
                                                    array("ME", "Maine"), 
                                                    array("MI", "Michigan"), 
                                                    array("MN", "Minnesota"), 
                                                    array("MO", "Missouri"), 
                                                    array("MS", "Mississippi"), 
                                                    array("MT", "Montana"), 
                                                    array("NC", "North Carolina"), 
                                                    array("ND", "North Dakota"), 
                                                    array("NE", "Nebraska"), 
                                                    array("NH", "New Hampshire"), 
                                                    array("NJ", "New Jersey"), 
                                                    array("NM", "New Mexico"), 
                                                    array("NV", "Nevada"), 
                                                    array("NY", "New York"), 
                                                    array("OH", "Ohio"), 
                                                    array("OK", "Oklahoma"), 
                                                    array("OR", "Oregon"), 
                                                    array("PA", "Pennsylvania"), 
                                                    array("PR", "Puerto Rico"), 
                                                    array("RI", "Rhode Island"), 
                                                    array("SC", "South Carolina"), 
                                                    array("SD", "South Dakota"), 
                                                    array("TN", "Tennessee"), 
                                                    array("TX", "Texas"), 
                                                    array("UT", "Utah"), 
                                                    array("VA", "Virginia"), 
                                                    array("VT", "Vermont"), 
                                                    array("WA", "Washington"), 
                                                    array("WI", "Wisconsin"), 
                                                    array("WV", "West Virginia"), 
                                                    array("WY", "Wyoming")
                                                );
                                                for ($i = 0; $i < count($states); $i++) {
                                                ?>
                                                <option value="<?php echo $states[$i][0]; ?>" <?php if ($state == $states[$i][0]) { echo "selected"; } ?>><?php echo $states[$i][1]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-<?php echo (empty($stateError) ? ($stateValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($stateValid ? "" : "* "); echo $stateError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-10ms">
                                    <label for="inputZipcode" class="col-md-3 col-form-label">Zipcode</label>
                                        <div class="col-md-<?php echo (empty($zipcodeError) ? ($zipcodeValid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputZipcode" class="form-control" name="inputZipcode" value="<?php echo $zipcode; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($zipcodeError) ? ($zipcodeValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($zipcodeValid ? "" : "* "); echo $zipcodeError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-11ms">
                                    <label for="inputPhone" class="col-md-3 col-form-label">Phone</label>
                                        <div class="col-md-<?php echo (empty($phoneError) ? ($phoneValid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputPhone" class="form-control" name="inputPhone" value="<?php echo $phone; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($phoneError) ? ($phoneValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($phoneValid ? "" : "* "); echo $phoneError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-12ms">
                                    <label for="inputEmail" class="col-md-3 col-form-label">Email</label>
                                        <div class="col-md-<?php echo (empty($emailError) ? ($emailValid ? 9 : 8) : 6); ?>">
                                            <input type="text" id="inputEmail" class="form-control" name="inputEmail" value="<?php echo $email; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($emailError) ? ($emailValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($emailValid ? "" : "* "); echo $emailError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-13ms">
                                    <label for="inputGender" class="col-md-3 col-form-label pt-0">Gender</label>
                                        <div class="col-md-<?php echo (empty($genderError) ? ($genderValid ? 9 : 8) : 6); ?> text-center">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inputGenderMale" name="inputGender" class="custom-control-input" value="male" <?php if ($gender == "male") { echo "checked"; } ?>>
                                                <label class="custom-control-label" for="inputGenderMale"> Male </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inputGenderFemale" name="inputGender" class="custom-control-input" value="female" <?php if ($gender == "female") { echo "checked"; } ?>>
                                                <label class="custom-control-label" for="inputGenderFemale"> Female </label>
                                            </div>
                                        </div>
                                        <div class="col-md-<?php echo (empty($genderError) ? ($genderValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($genderValid ? "" : "* "); echo $genderError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-14ms">
                                    <label for="inputMaritalStatus" class="col-md-3 col-form-label pt-0">Marital Status</label>
                                        <div class="col-md-<?php echo (empty($maritalStatusError) ? ($maritalStatusValid ? 9 : 8) : 6); ?> text-center">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inputMaritalStatusSingle" name="inputMaritalStatus" class="custom-control-input" value="single" <?php if ($maritalStatus == "single") { echo "checked"; } ?>>
                                                <label class="custom-control-label" for="inputMaritalStatusSingle"> Single </label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="inputMaritalStatusMarried" name="inputMaritalStatus" class="custom-control-input" value="married" <?php if ($maritalStatus == "married") { echo "checked"; } ?>>
                                                <label class="custom-control-label" for="inputMaritalStatusMarried"> Married </label>
                                            </div>
                                        </div>
                                        <div class="col-md-<?php echo (empty($maritalStatusError) ? ($maritalStatusValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($maritalStatusValid ? "" : "* "); echo $maritalStatusError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row animated pulse delay-15ms">
                                    <label for="inputBirthDate" class="col-md-3 col-form-label">Date of Birth</label>
                                        <div class="col-md-<?php echo (empty($birthDateError) ? ($birthDateValid ? 9 : 8) : 6); ?>">
                                            <input type='text' id="inputBirthDate" class="form-control" name="inputBirthDate" value="<?php echo $birthDate; ?>">
                                        </div>
                                        <div class="col-md-<?php echo (empty($birthDateError) ? ($birthDateValid ? 0 : 1) : 3); ?>">
                                            <span class="error"><?php echo ($birthDateValid ? "" : "* "); echo $birthDateError; ?></span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-md btn-primary btn-block animated pulse delay-16ms" value="Submit">
                                        <input type="reset" class="btn btn-md btn-secondary btn-block animated pulse delay-17ms" value="Reset">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer" class="page-footer font-small indigo">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Social Media</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://www.linkedin.com/" target="_blank">LinkedIn</a></li>
                            <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
                            <li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
                            <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-4 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Musk Companies</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://www.tesla.com/" target="_blank">Tesla</a></li>
                            <li><a href="https://www.spacex.com/" target="_blank">SpaceX</a></li>
                            <li><a href="https://www.boringcompany.com/" target="_blank">The Boring Company</a></li>
                            <li><a href="https://www.neuralink.com/" target="_blank">Neuralink</a></li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-4 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">My Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="http://www.jaredible.net" target="_blank">Main Portfolio</a></li>
                            <li><a href="https://jaredible.github.io/" target="_blank">Github Page</a></li>
                            <li><a href="https://github.com/jaredible" target="_blank">Github Profile</a></li>
                            <li><a href="http://pong.jaredible.net" target="_blank">Pong</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="copyright" class="footer-copyright text-center py-3">&copy; 2018 Copyright:
                <a href="#"> jaredible.net</a>
            </div>
        </footer>

        <?php if ($isValid) { ?>
            <form id="hiddenForm" name="hiddenForm" method="POST" action="confirmation.php">
                <?php foreach ($_POST as $key => $value) { ?>
                    <input name="<?php echo $key; ?>" value="<?php echo $value ?>" type="hidden" />
                <?php } ?>
            </form>
            <script>
                document.createElement('form').submit.call(document.getElementById('hiddenForm'))
            </script>
        <?php } ?>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>