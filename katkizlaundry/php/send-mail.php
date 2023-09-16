<?php 
if(isset($_POST['submit'])){
    $to = "info@katkizlaundry.com, nwobachineduedward@gmail.com"; // this is your Email address
    $from = $_POST['UserEmail']; // this is the sender's Email address
    $name = $_POST['UserName'];
    $title = $_POST['subject'];
    $subject = "Form submission";
    $message1 = "Name: ".$name . "\n\n " . "Email: ".$from . "\n\n " ." Message Title:".$title . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message1,$headers);
   
    echo "Message Received. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>