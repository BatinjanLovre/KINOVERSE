<?php 

    $xml=simplexml_load_file("users.xml");

    session_start();

    $span1 = false;
    $span2 = false;
    $span3 = false;

    if (isset($_POST['username']) && $_POST['password']) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $foundUser = false;
        foreach ($xml->user as $user) {
            $userN = (string) $user->username;
            $userP = (string) $user->password;

            if ($userN === $username) {
                $foundUser = true;
                if ($userP === $password) {
                    $_SESSION["user"] = $username;
                    $_SESSION["name"] = (string) $user->name;
                    $_SESSION["surname"] = (string) $user->surname;
                    $span1 = true;
                } else {
                    $span2 = true;
                }
            }
        }

        if (!$foundUser) {
            $span3 = true;
        }
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KINOVERSE - login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body style="background-image: url('images/movie.jpg');">
    <div class="container text-center mt-5">
    
        <div class="row">
            <div class="col">
            </div>
            <div class="col">

                <h2>Welcome to KINOVERSE, please log in to continue!</h2>
                <h3>Or register if you don't have an account <a href="register.php">here!</a></h3>
                <br>

                <form action="" method="POST">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="userexample">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                        <span style="<?php echo ($span1) ? 'color: #0d6efd;' : 'color: red;'; ?>">
                            <?php 

                                if($span1){
                                    echo "<strong>Login successful!</strong>";
                                    echo "</br>";
                                    echo "<strong>Enjoy your stay!</strong> <div class='spinner-border spinner-border-sm text-primary' role='status'>
                                    <span class='visually-hidden'>Loading...</span>
                                    </div>";
                                    header("Refresh:2; url=pocetna.php");
                                }elseif($span2){
                                    echo "<strong>Password incorrect.</strong>";
                                }elseif($span3){
                                    echo "<strong>Username doesn't exist.</strong>";
                                }

                            ?>
                        </span>
                    </div>
                    
                    <div class="form-floating">
                        <button type="submit" class="btn btn-primary">Log In</button>
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

