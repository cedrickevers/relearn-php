<?php $error = null;
$email = null;
$succes = null;
require_once "header.php";

    if (!empty($_POST["email"])){
        $email = $_POST["email"];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $file = __DIR__. DIRECTORY_SEPARATOR . "email" . DIRECTORY_SEPARATOR . date("y-m-d");
           file_put_contents($file, $email, FILE_APPEND);
           $succes ="email gg";      
        } else {
            $error = "email invalidate";
        }
    }

?>

<h1>  S'inscrire à la newletter</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum earum iste quo consequatur, commodi nostrum harum perspiciatis maxime sit autem, officia voluptate assumenda. Eius asperiores facilis, repellendus impedit ea nostrum?</p>


<?php if ($error): ?>
    <div class="alert alert-danger">
    test
    </div>
    <?php endif ?>



    <?php if ($succes): ?>
    <div class="alert alert-succes">
        <?= $succes ?>
    </div>
    <?php endif ?>



<form action="/newsletter.php" class="form-inline" method="post">

<div class="form-group">

<input type="text" name ="email" placeholder=" entre votre email" require class="form-control" value="<?php htmlentities($email) ?>">
</div>
    <button type="submit" class="btn btn-primary"> S'inscrire</button>
</form>


<style>

form, .alert {
    margin-top: 20rem;

}