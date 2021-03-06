<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
   <!-- <style type="text/css">
    body{font: 14px sans-serif; text-align: center;}
  </style> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TS Incident Tracker</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <!-- Latest compiled and minified CSS and Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
<div w3-include-html="nav_bar_2.html">

</div>

<body>
  <div class="text-center">
  <div class="page-header">
    <h1>Hi <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>, welcome to Tradeshift</h1>
  </div>
</div>
  <div class="text-center">
    <p>
    <a href="logout.php" class="btn btn-danger">Sign Out Session</a>
    </p>
  </div>
  <div class="page-header">
  <body onload="fetchIssues()">
    <div class="container">
      <h1>Incident Logs <small>by AJX</small></h1>
      <div class="jumbotron">
        <h3>Add New Issue:</h3>
        <form id="issueInputForm">
          <div class="form-group">
            <label for="issueDescInput">Title</label>
            <input type="text" class="form-control" id="issueDescInput" placeholder="Insert title ...">
          </div>
          <div class="form-group">
            <label for="issueSeverityInput">Severity</label>
            <select id="issueSeverityInput" class="form-control">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
          </div>
          <div class="form-group">
            <label for="issueAssignedToInput">Assigned To</label>
            <input type="text" class="form-control" id="issueAssignedToInput" placeholder="Enter engineer responsible ..">
          </div>
          <div class="form-group">
            <label for="issueDetailsInput">Description</label>
            <input type="text" class="form-control" id="issueDetailsInput" placeholder="Describe the issue...">
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
      <div class="col-lg-12">
        <div id="issuesList">
        </div>
      </div>
      <div class="footer">
        <p>&copy arief.jalil@tradeshift.com v1.081018</p>
      </div>
    </div>

    <script src="http://chancejs.com/chance.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
       <!-- ORIGINAL Strap <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <script src="main.js"></script>
    <script>
      w3IncludeHTML();
    </script>
  </body>
</html>
