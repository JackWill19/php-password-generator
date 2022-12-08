<?php
  // if the input-length field in the $_POST (the post method in the form) has been set
if(isset($_POST['length-input'])){
    // Generate a password
    $passwordLength = (int) $_POST['length-input']; // setting the input length to an interger and setting it to a variable
    $password = ''; //Creating an empty string for the password variable so the generated password can be stored in

    for ($i = 0; $i < $passwordLength; $i++) { // Loops through the same amount of times as the input length
        $char = chr(rand(33, 126)); // selecting random ASCII characters between 33 to 126 (these are printable)
        $password .= $char; // Concatenates random character to password
    }
    echo "<p>Generated Password: $password</p> <br>"; // Print the password
  }
  ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form method="post" action=""> <!-- CREATING FORM-->
        <label for="password-length">Enter Password Length:</label> <br> <!-- LABELLING FORM-->
        <input type="number" name="length-input" id="length-input"> <br> <!-- INPUT FOR PASSWORD LENGTH -->
        <input type="submit" class="submit-btn" value="Generate Password"> <br> <!-- INPUT FOR PASSWORD LENGTH -->

    </form>
</body>
</html>