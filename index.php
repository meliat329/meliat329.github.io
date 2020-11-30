<!doctype html>
<html>

<head>
    <title>Melia Tomlinson</title>
    <link rel="stylesheet" type="text/css" href="resume.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <?php
    $errors = ”;
    $myemail = "meliatomlinson2022@u.northwestern.edu";
    
    empty($_POST["email"]) ||
    
    empty($_POST["message"])
    
    {
    
    $errors .= "\n Error: all fields are required";
    
    }
    
    $name = $_POST["name"];
    
    $email_address = $_POST["email"];
    
    $message = $_POST["message"];
    
    if (!preg_match(
    
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))
    
    {
    
    $errors .= "\n Error: Invalid email address";
    
    }
    
    if( empty($errors))
    
    {
    
    $to = $myemail;
    
    $email_subject = "Contact form submission: $name";
    
    $email_body = "You have received a new message. ".
    
    "Here are the details:\n Name: $name \n ".
    
    "Email: $email_address\n Message \n $message";
    
    $headers = "From: $myemail\n";
    
    $headers .= "Reply-To: $email_address";
    
    mail($to,$email_subject,$email_body,$headers);
    
    }
    ?>

</head>

<body>
    <div class="loadup">
        <p class="dLeft">Designer</p>
        <div class="compWrapper">
            <img class="comp" src="https://cdn.onlinewebfonts.com/svg/img_573752.png" alt="Coding Icon">
        </div>
        <p class="cRight">Coder</p>
    </div>
    <div class="menuBar" id="myMenuBar">
        <div class="buttonWrapper">
            <button class="menuButton" onclick="scrollAbout()">ABOUT</button>
            <button class="menuButton" onclick="scrollAcademics()">ACADEMICS</button>
            <button class="menuButton" onclick="scrollExperience()">EXPERIENCE</button>
            <button class="menuButton" onclick="scrollContact()">CONTACT</button>
        </div>
        <p class="name">Melia Tomlinson</p>
    </div>
    <div class="content">
        <div class="infoPage" id="about">
            <div class="spacer"></div>
            <p class="aboutTitle">About</p>
        </div>
        <div class="infoPage" id="academics">
            <p class="academicsTitle">Academics</p>
        </div>
        <div class="infoPage" id="experience">
            <p class="experienceTitle">Experience</p>
        </div>
        <div class="infoPage" id="contact">
            <p class="contactTitle">Contact</p>
            <form method=”post” name=”contact_form” action=index.php”>

                Your Name:
                <input type=”text” name=”name”>

                Email Address:
                <input type=”text” name=”email”>

                Message:
                <textarea name=”message”></textarea>

                <input type=submit value=Send>
            </form>
        </div>
    </div>
    <script src="resume.js"></script>
</body>

</html>
