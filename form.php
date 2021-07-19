<?php 

$message_sent = false;

if (isset ($_POST['email']) && $_POST['email'] != '') {

    if(filter_var ($_POST ['email'], FILTER_VALIDATE_EMAIL) ) {

    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $mailFrom = $_POST['email-confirm'];
    $message = $_POST['message'];
    $newsletter = $_POST ['newsletter'];

    $mailTo = "wesleykwa@hotmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$firstName. ". \n\n". $message;

    mail($mailTo, $subject, $txt, $headers);

    $message_sent = true; 

} 

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <?php 
    if ($message_sent):
    ?>
        <h3>Thank you <?php echo $firstName;?>, your registration has been received</h3>

     <?php   
        else:
    ?>
    <div class="container">
        <form action="form.php" method="POST" class="form" name="f">
            <div class="form-group">
                <label for="first-name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="name" name="first-name" placeholder="John" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="last-name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="name" name="last-name" placeholder="Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="john@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="email-confirm" class="form-label">Confirm Email</label>
                <input type="email" class="form-control" ontoggle="checkEmail()" id="email-confirm" name="email-confirm" placeholder="Confirm Email" tabindex="3" required>
            </div>
            <p id="error"></p>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <p class="newsletter-info">Subscribe to our newsletter!</p>
                <input type="radio" name="newsletter" value="Yes" onclick="alert ('Thank you for subscribing to our newsletter!')"> Yes
                <input type="radio" name="newsletter" value="No" onclick="alert ('Sorry to hear you will not be joining our regular newsletter! If you change your mind, you can change this preference in your user panel at anytime') "> No
            </div>
            <div>
                <button type="submit" class="btn" >Send Message!</button>
            </div>
        </form>
    </div>
    <?php 
    endif;
    ?>
</body>

</html>