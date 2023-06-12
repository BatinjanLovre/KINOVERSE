<?php

    $span1 = false;
    $span2 = false;
    $spanErr = false;
    $inputCorrect = false;

    if (isset($_POST['register'])) {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $email = $_POST['email'];

        if ($name == '' || $surname == '' || $username == '' || $password == '' || $passwordConf == '' || $email == '') {
            $spanErr = true;
            $span1 = true;
        } elseif ($password != $passwordConf) {
            $spanErr = true;
            $span2 = true;
        } else {
            $inputCorrect = true;
        }
        

        if($inputCorrect == true) {

            // Load the XML file
            $xml = new DOMDocument();
            $xml->preserveWhiteSpace = false;
            $xml->formatOutput = true;
            $xml->load('users.xml');

            // Create the new user element
            $userList = $xml->getElementsByTagName('user_list')->item(0);
            $user = $xml->createElement('user');

            // Create and append the child elements
            $nameNode = $xml->createElement('name', $name);
            $user->appendChild($nameNode);

            $surnameNode = $xml->createElement('surname', $surname);
            $user->appendChild($surnameNode);

            $usernameNode = $xml->createElement('username', $username);
            $user->appendChild($usernameNode);

            $passwordNode = $xml->createElement('password', $password);
            $user->appendChild($passwordNode);

            $emailNode = $xml->createElement('email', $email);
            $user->appendChild($emailNode);

            // Append the new user to the user list
            $userList->appendChild($user);

            // Save the updated XML file
            $xml->save('users.xml');
            
        }        
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINOVERSE - register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body style="background-image: url('images/movie.jpg');">

    <div class="container text-center mt-5">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">

                <h2>Welcome to KINOVERSE, please fill out the form below to register an account!</h2>
                <h3>Already have an account? Log in <a href="index.php">here!</a></h3>
                <br>

                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <label for="password">Name</label>
                        
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
                        <label for="password">Surname</label>
                        
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <label for="username">Username</label>
                        
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                        
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passwordConf" name="passwordConf" placeholder="Confirm Password">
                        <label for="passwordConf">Confirm password</label>
                        
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <label for="email">Email address</label>
                        <span style="<?php echo ($spanErr) ? 'color: red;' : 'color: #0d6efd;'; ?>">
                            <?php 
                            
                                if($inputCorrect){
                                    echo "<strong>Registration successful!</strong>";
                                    echo "</br>";
                                    echo "<strong>You can log in now!</strong> <div class='spinner-border spinner-border-sm text-primary' role='status'>
                                    <span class='visually-hidden'>Loading...</span>
                                    </div>";
                                    header("Refresh:2; url=index.php");
                                }elseif($span1){
                                    echo "<strong>Please fill out the empty fields!</strong>";
                                }elseif($span2){
                                    echo "<strong>Passwords must match!</strong>";
                                }
                            
                            ?>
                        </span>
                    </div>

                    
                    <div class="form-floating">
                        <button type="submit" class="btn btn-primary" name="register">Sign up</button>
                    </div>
                </form>
                
            </div>
            <div class="col">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
</body>
</html>