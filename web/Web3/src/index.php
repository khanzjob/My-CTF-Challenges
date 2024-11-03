<?php
$FLAG = "GoH{Wh47_Typ3_w45_th3_1nPu7_Ag41n?}";
$PASS = "SECRETPASSWORD";

$responseMessage = ""; 

if (isset($_GET['input']) && is_array($_GET['input'])) {
    $userInput = $_GET['input'][0]; 

    if (empty($userInput)) {
        $responseMessage = "Please give me input!";
    } else if (strcmp($userInput, $PASS) == 0) {
        $responseMessage = $FLAG;
    } else if (strcmp($userInput, "a") == 0) {
        $responseMessage = $FLAG;
    } else {
        $responseMessage = "You chose Violence?!!!!!";
    }
} else {
    $responseMessage = "Please give me painful input!";
}
?>

<html>
  <head>
    <title>Game of Hacks</title>
    <style>
      body {
        font-family: 'Arial', sans-serif;
        background-color: #2c3e50; /* Dark background */
        color: #ecf0f1; /* Light text color */
        margin: 0;
        padding: 20px;
      }
      h2 {
        color: #e67e22; /* Orange color for the header */
      }
      .container {
        background-color: #34495e; /* Darker container */
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        margin: auto; /* Center the container */
      }
      .response {
        margin-top: 20px;
        font-weight: bold;
        color: #e74c3c; /* Red for error messages */
      }
      .success {
        color: #2ecc71; /* Green for success messages */
      }
      input[type="text"] {
        padding: 10px;
        width: calc(100% - 22px);
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px; /* Add some space below the input */
      }
      input[type="submit"] {
        padding: 10px 15px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%; /* Full width for the button */
      }
      input[type="submit"]:hover {
        background-color: #2980b9;
      }
      /* Hint style */
      .hint {
        color: #f39c12; /* Hint color */
        font-style: italic;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Curious why Game of Hacks juggles all violence alone</h2>
      <form method="GET">
        <input type="text" name="input[]" placeholder="Enter password..." required />
        <input type="submit" value="Submit" />
      </form>

      <p class="response">
      <?php
        echo $responseMessage;
      ?>
      </p>
    </div>
    
    <!-- 

	20 20 20 20 24 46 4c 41 47 20 3d 20 22 47 6f 48 7b 74 72 79 5f 68 61 72 64 65 72 7d 22 3b 0a 20 20 20 20 24 50 41 53 53 20 3d 20 22 56 41 57 55 4c 45 4e 43 45 22 3b 0a 09 24 72 65 73 70 6f 6e 73 65 4d 65 73 73 61 67 65 20 3d 20 22 22 3b 20 0a 0a 69 66 20 28 69 73 73 65 74 28 24 5f 47 45 54 5b 27 69 6e 70 75 74 27 5d 29 20 26 26 20 69 73 5f 61 72 72 61 79 28 24 5f 47 45 54 5b 27 69 6e 70 75 74 27 5d 29 29 20 7b 0a 20 20 20 20 24 75 73 65 72 49 6e 70 75 74 20 3d 20 24 5f 47 45 54 5b 27 69 6e 70 75 74 27 5d 5b 30 5d 3b 20 0a 0a 20 20 20 20 69 66 20 28 65 6d 70 74 79 28 24 75 73 65 72 49 6e 70 75 74 29 29 20 7b 0a 20 20 20 20 20 20 20 20 24 72 65 73 70 6f 6e 73 65 4d 65 73 73 61 67 65 20 3d 20 22 50 6c 65 61 73 65 20 67 69 76 65 20 6d 65 20 69 6e 70 75 74 21 22 3b 0a 20 20 20 20 7d 20 65 6c 73 65 20 69 66 20 28 73 74 72 63 6d 70 28 24 75 73 65 72 49 6e 70 75 74 2c 20 24 50 41 53 53 29 20 3d 3d 20 30 29 20 7b 0a 20 20 20 20 20 20 20 20 24 72 65 73 70 6f 6e 73 65 4d 65 73 73 61 67 65 20 3d 20 24 46 4c 41 47 3b 0a 20 20 20 20 7d 20 65 6c 73 65 20 69 66 20 28 73 74 72 63 6d 70 28 24 75 73 65 72 49 6e 70 75 74 2c 20 22 61 22 29 20 3d 3d 20 30 29 20 7b 0a 20 20 20 20 20 20 20 20 24 72 65 73 70 6f 6e 73 65 4d 65 73 73 61 67 65 20 3d 20 24 46 4c 41 47 3b 0a 20 20 20 20 7d 20 65 6c 73 65 20 7b 0a 20 20 20 20 20 20 20 20 24 72 65 73 70 6f 6e 73 65 4d 65 73 73 61 67 65 20 3d 20 22 49 6e 63 6f 72 72 65 63 74 20 70 61 73 73 77 6f 72 64 21 22 3b 0a 20 20 20 20 7d 0a 7d 20 65 6c 73 65 20 7b 0a 20 20 20 20 24 72 65 73 70 6f 6e 73 65 4d 65 73 73 61 67 65 20 3d 20 22 50 6c 65 61 73 65 20 67 69 76 65 20 6d 65 20 69 6e 70 75 74 21 22 3b 0a 7d 0a 3f 3e
    -->
  </body>
</html>
