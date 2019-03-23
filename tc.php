<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Easy Transit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/tc.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </head>
  <body>
    <div class="container" align-items="center" style="width:800px;">
      <h3>STARTING POINT:</h3>
      <div class="range">
        <input type="range" min="1" max="7" steps="1" value="1">
      </div>
      
      <ul class="range-labels">
        <li class="active selected">1 </li>
        <li>2 </li>
        <li>3 </li>
        <li>4 </li>
        <li>5 </li>
        <li>6 </li>
        <li>7 </li>
      </ul>
    </div>
    <div class="container" align-items="center" style="width:800px;">
      <h3>ENDING POINT:</h3>
      <div class="range1">
        <input type="range" min="1" max="7" steps="1" value="1">
      </div>
      
      <ul class="range-labels1">
        <li class="active selected">1 </li>
        <li>2 </li>
        <li>3 </li>
        <li>4 </li>
        <li>5 </li>
        <li>6 </li>
        <li>7 </li>
      </ul>
    </div>
    <div class="container" align-items="center" style="width:800px;">
      <h3>NUMBER OF PASSENGERS:</h3>
      <div class="range2">
        <input type="range" min="1" max="10" steps="1" value="1">
      </div>
      <div data-role="page">
        

        <div data-role="main" class="ui-content">
          <!--<form method="post" action="/action_page_post.php">
            
            <input type="range" name="points" id="points" value="1" min="1" max="10" data-show-value="true">
            <input type="submit" data-inline="true" value="Submit">-->
           <!-- </form> -->
        </div>
      </div>
 
      <ul class="range-labels2">         

        <li class="active selected">1 </li>
        <li>2 </li>
        <li>3 </li>
        <li>4 </li>
        <li>5 </li>
        <li>6 </li>
        <li>7 </li>
        <li>8 </li>
        <li>9 </li>
        <li>10 </li>
      </ul>
    </div>
    <script  src="js/tc.js"></script>
  </body>
</html>