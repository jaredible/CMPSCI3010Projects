<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CMPSCI3010 Project4">
        <meta name="author" content="Jared Diehl">
        
        <title>Confirmation</title>
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/animations.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>
    <body>
        <header id="header">
            <div class="container-fluid">
                <span>Confirmation</span>
            </div>
        </header>

        <div id="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div id="menu" class="col-sm-4 col-md-3">
                        <div id="v-pills-tab" class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" href="index.html" role="tab">Home</a>
                            <a class="nav-link" href="registration.php" role="tab">Registration</a>
                            <a class="nav-link" href="animations.php" role="tab">Animations</a>
                        </div>
                    </div>
                    <div id="content" class="col-sm-8 col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row img-responsive img-center">
                                    <img class="col-md-12" src="images/image1.jpg" alt="default">
                                </div>
                                <?php 
                                $primarykey = htmlspecialchars($_POST["primarykey"]);

                                $conn = null;
                                $row = null;

                                try {
                                    $conn = new mysqli("localhost", "root", "", "project");

                                    if ($conn != null) {
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $sql = "SELECT * FROM registration WHERE id = '$primarykey'";
                                        $result = $conn->query($sql);

                                        if ($result != null) {
                                            $row = $result->fetch_assoc();
                                        } else {
                                            echo "Error: Result null!\n";
                                        }
                                    } else {
                                        echo "Error: Connection null!\n";
                                    }
                                } catch (Exception $e) {
                                    echo "Caught exception: ",  $e->getMessage(), "\n";
                                } finally {
                                    if ($conn != null) {
                                        $conn->close();
                                    }
                                }

                                if ($row == null) {
                                    echo "Error: Row null!\n";
                                }
                                
                                if ($row != null) {
                                    if (isset($row['userName'])) {
                                        echo "<br/> Username: " . $row["userName"] . "<br/>";
                                    }
                                    if (isset($row['password'])) {
                                        echo "<br/> Password: " . $row["password"] . "<br/>";
                                    }
                                    if (isset($row['firstName'])) {
                                        echo "<br/> First Name: " . $row["firstName"] . "<br/>";
                                    }
                                    if (isset($row['lastName'])) {
                                        echo "<br/> Last Name: " . $row["lastName"] . "<br/>";
                                    }
                                    if (isset($row['address1'])) {
                                        echo "<br/> Address Line 1: " . $row["address1"] . "<br/>";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php 
                                if ($row != null) {
                                    if (isset($row['address2'])) {
                                        echo "<br/> Address Line 2: " . $row["address2"] . "<br/>";
                                    }
                                    if (isset($row['city'])) {
                                        echo "<br/> City: " . $row["city"] . "<br/>";
                                    }
                                    if (isset($row['state'])) {
                                        echo "<br/> State: " . $row["state"] . "<br/>";
                                    }
                                    if (isset($row['zipCode'])) {
                                        echo "<br/> Zipcode: " . $row["zipCode"] . "<br/>";
                                    }
                                    if (isset($row['phone'])) {
                                        echo "<br/> Phone: " . $row["phone"] . "<br/>";
                                    }
                                    if (isset($row['email'])) {
                                        echo "<br/> Email: " . $row["email"] . "<br/>";
                                    }
                                    if (isset($row['gender'])) {
                                        echo "<br/> Gender: " . $row["gender"] . "<br/>";
                                    }
                                    if (isset($row['maritalStatus'])) {
                                        echo "<br/> Marital Status: " . $row["maritalStatus"] . "<br/>";
                                    }
                                    if (isset($row['dateOfBirth'])) {
                                        echo "<br/> Date of Birth: " . $row["dateOfBirth"] . "<br/>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
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

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>