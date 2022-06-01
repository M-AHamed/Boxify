<?php
    
$message_sent = false;
    if(isset($_POST['email'])&& $_POST['email'] != ''){
        
        if(filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL)){
            
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];


            $to = "gozde.nuurr@gmail.com";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            //mail( $to,$messageSubject,$body);        
            
            $message_sent = true;

        } 
     else{
        $invalid_class_name = "form-invalid";
     }   
    }    
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggest Us!</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css?version=51">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="scripts/main.js"></script>
</head>

<body>
    <?php
    if($message_sent):
    ?>
   
    <h3>THANKS! </h3>
    
    <?php
    else:
    ?>
    
    <div class="container">
        <h1>Suggest Us! </h1>
        <form action="suggestUs.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input<?=$invalid_class_name ?? "" ?> type="email" class="form-control" id="email" name="email" placeholder="x@example.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Your Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">SEND</button>
            </div>
        </form>
    </div>
    <?php
    endif;
    ?>
</body>

</html>