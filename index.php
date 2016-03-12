<!DOCTYPE html>

<html>
  <head>
    <title>SHA1 generator</title>
  </head>
  <body>
    <h1>
      SHA1 Generator
    </h1>
    <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Enter a word/key/etc: <input type="text" name = "word">
      <input type = "submit" class = "btn btn-default" value = "Submit"/>
    </form>
  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $password = $_POST["word"];
      $hash = sha1($password);


    }
    function sha1($string) {
      h0 = 0x67452301;
      h1 = 0xEFCDAB89;
      h2 = 0x98BADCFE;
      h3 = 0x10325476;
      h4 = 0xC3D2E1F0;
    }
  ?>
  </body>



</html>
