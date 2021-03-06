<?php

if($_POST["submit"]) {
    $recipient="jthrice774@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="kbcss.css" type="text/css">
<link rel="stylesheet" href="contactphp.css" text="text/css">
<title>Contact &mdash; Kate Butchino</title>
</head>
<body>

<nav class="navbar">
<a href="home.html">Home</a>
<a href="about.html">About</a>
<a href="services.html">Services</a>
<a href="portfolio.html">Portfolio</a>
<a href="contact.html" class="active">Contact</a>
</nav>

<section class="main2">
<h1>Contact</h1>
</section>

<div class="container"><div style="text-align:center"><br>
<h2>If you're interested in moving forward, you can contact me here!</h2>
</div>
<div class="row">
<div class="column">
<img src="images/20201021_130705 (2).jpg" style="width:50%">
</div>
<div class="column">
<?=$thankYou ?>
<form method="post" action="contact.php">
<label for "fname">First Name *</label>
<input type="text" id="fname" name="fname" x-autocompletetype="given-name" maxlength="30" spellcheck="false" required><br>
<label for "lname">Last Name *</label><br>
<input type="text" id="lname" name="lname" x-autocompletetype="surname" maxlength="30" spellcheck="false" required><br>
<label for "email">Email *</label><br>
<input type="email" id="email" name="email" placeholder="email@email.com" autocomplete="email" spellcheck="false" required><br>
<label for "website">Website (If you have one)</label></br>
<input type="text" id="website" name="website" placeholder="www.yoursite.com" spellcheck="false"><br>
<label for "moreinfo">Tell me more about your project</label><br>
<textarea id="moreinfo" name="moreinfo" spellcheck="true" style="height:170px"></textarea><br>
<button type="submit">Submit</button>
</form>
</div>
</div>
</div>

<hr>

<footer class="footer">
<span class="connect"><b>Connect With Me:</b></span><br> <a href="https://www.linkedin.com/in/katebutchino/"><img src="images/linkedin.png" height="52" width="52"></a>  <a href="https://www.instagram.com/accelerate.with.kate/?hl=en"><img src="images/instagram.png" height="52" width="52"></a>
<span class="freepik">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></span>
</footer>

</body>
</html>
