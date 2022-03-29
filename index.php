<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Brayden MacMillan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Salary, with PHP</title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
      <?php echo "<h1>Salary Program, with PHP</h1>" ?>
    <p>
    <?php echo "<h3>Please enter your employment information:</h3>" ?>
      <form action="./salary.php" method="post" target="results">
        <label for="Hours">Number of Hours Worked:</label>
        <input type="number" step="any" name="hours" id="hours" placeholder="Hours"><br><br>
        <label for="hourly-rate">Hourly Rate: $</label>
        <input type="number" step="any" name="rate" id="rate" placeholder="Rate"><br><br>
        <input type="submit" value="Pay">
      </form>
    </p>
		<!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">		
    	<div id="total-earned"></div>
			<div id="tax"></div>
		</iframe>
    <img src="./images/salary.png" alt"salary" >
    </center>
  </body>
</html>
