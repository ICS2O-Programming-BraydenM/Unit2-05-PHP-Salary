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
    <script src="./js/script.js"></script>
    <!-- php echo to print the html to the page -->
      <h1>Salary Program, with PHP</h1>
    <p>
    <h3>Please enter your employment information:</h3>
      <form action="javascript:payClicked()">
        <label for="Hours">Number of Hours Worked:</label>
        <input type="number" step="any" id="hours" placeholder="Hours"><br><br>
        <label for="hourly-rate">Hourly Rate: $</label>
        <input type="number" step="any" id="rate" placeholder="Rate"><br><br>
        <input type="submit" value="Pay">
      </form>
    </p>
		<!-- Create a space where the user information will be displayed -->
		<div id="display-results">
    	<div id="total-earned"></div>
			<div id="tax"></div>
		</div>
    <center><img src="./images/taxes.jpg" alt="taxes" width="400" length="500"></center>
  </body>
</html>
