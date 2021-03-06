<html>
  <head>
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/user.css">
  </head>

<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800);
body {
  font-family: 'Open Sans', sans-serif;
}

.chart {
  clear: both;
  padding: 0;
  width: 100%;
}
@media (min-width: 700px) {
  .chart {
    /*background: url("https://cl.ly/QSpc/bg-chart.png") right bottom repeat-x;*/
    height: 750px;
   /* margin: 0 auto emCalc(-32px);*/
  }
}
.chart li {
  display: block;
  height: 125px;
  padding: emCalc(25px) 0;
  position: relative;
  text-align: center;
  /*vertical-align: bottom;*/
  -moz-border-radius: 4px 4px 0 0;
  -webkit-border-radius: 4px;
  border-radius: 4px 4px 0 0;
  -moz-box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
  -webkit-box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
  box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
}
@media (min-width: 700px) {
  .chart li {
    display: inline-block;
    height: 425px;
    margin: 0 1.8% 0 0;
    width: 15%;
  }
}
.chart .axis {
  display: none;
  top: emCalc(-45px);
  width: 8%;
}
@media (min-width: 700px) {
  .chart .axis {
    display: inline-block;
  }
}
.chart .label {
  background: #cccccc;
  margin: -9px 0 71px 0;
}
.chart .percent {
  letter-spacing: -3px;
  opacity: .4;
  width: 100%;
  font-size: 30px;
  font-size: 1.875rem;
}
@media (min-width: 700px) {
  .chart .percent {
    position: absolute;
    font-size: 62px;
    font-size: 3.875rem;
  }
}
.chart .percent span {
  font-size: 30px;
  font-size: 1.875rem;
}
.chart .skill {
  font-weight: 800;
  opacity: .5;
  overflow: hidden;
  text-transform: uppercase;
  width: 100%;
  font-size: 14px;
  font-size: 0.875rem;
}
@media (min-width: 700px) {
  .chart .skill {
    bottom: 20px;
    position: absolute;
    font-size: 16px;
    font-size: 1rem;
  }
}
.chart .teal {
  background: #4ecdc4;
  border: 1px solid #4ecdc4;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzc2ZDhkMSIvPjxzdG9wIG9mZnNldD0iNzAlIiBzdG9wLWNvbG9yPSIjNGVjZGM0Ii8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #76d8d1), color-stop(70%, #4ecdc4));
  background-image: -moz-linear-gradient(#76d8d1, #4ecdc4 70%);
  background-image: -webkit-linear-gradient(#76d8d1, #4ecdc4 70%);
  background-image: linear-gradient(#76d8d1, #4ecdc4 70%);
}
.chart .salmon {
  background: #ff6b6b;
  border: 1px solid #ff6b6b;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmOWU5ZSIvPjxzdG9wIG9mZnNldD0iNzAlIiBzdG9wLWNvbG9yPSIjZmY2YjZiIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ff9e9e), color-stop(70%, #ff6b6b));
  background-image: -moz-linear-gradient(#ff9e9e, #ff6b6b 70%);
  background-image: -webkit-linear-gradient(#ff9e9e, #ff6b6b 70%);
  background-image: linear-gradient(#ff9e9e, #ff6b6b 70%);
}
.chart .lime {
  background: #97f464;
  border: 1px solid #97f464;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2I3Zjc5NCIvPjxzdG9wIG9mZnNldD0iNzAlIiBzdG9wLWNvbG9yPSIjOTdmNDY0Ii8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #b7f794), color-stop(70%, #97f464));
  background-image: -moz-linear-gradient(#b7f794, #97f464 70%);
  background-image: -webkit-linear-gradient(#b7f794, #97f464 70%);
  background-image: linear-gradient(#b7f794, #97f464 70%);
}
.chart .peach {
  background: #ffcd92;
  border: 1px solid #ffcd92;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZTRjNSIvPjxzdG9wIG9mZnNldD0iNzAlIiBzdG9wLWNvbG9yPSIjZmZjZDkyIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffe4c5), color-stop(70%, #ffcd92));
  background-image: -moz-linear-gradient(#ffe4c5, #ffcd92 70%);
  background-image: -webkit-linear-gradient(#ffe4c5, #ffcd92 70%);
  background-image: linear-gradient(#ffe4c5, #ffcd92 70%);
}
/*.chart .grape {
  background: #ab64f4;
  border: 1px solid #ab64f4;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2M1OTRmNyIvPjxzdG9wIG9mZnNldD0iNzAlIiBzdG9wLWNvbG9yPSIjYWI2NGY0Ii8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmFkKSIgLz48L3N2Zz4g');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #c594f7), color-stop(70%, #ab64f4));
  background-image: -moz-linear-gradient(#c594f7, #ab64f4 70%);
  background-image: -webkit-linear-gradient(#c594f7, #ab64f4 70%);
  background-image: linear-gradient(#c594f7, #ab64f4 70%);
}*/

</style>

  <body>
    <ul class="chart">
	    <li class="axis">
        
      <?php
        include ('database/db.php');
        if(!$_GET) {
            echo "
            <div class='container'>
            <div class='cardcontain' style='height: 200px;'>
                    <div class='card'>
                        <div class='front'><h4>Welcome to Easy-Transit</br><hr>Enter your Bus Credentials to Login</h4></div>
                        <div class='back'>
                            <form action='functions/login.php'>   
                                Enter Bus Number:</br>
                                <input name='busno' type='number'></br>
                                Enter your password:</br>
                                <input name='password' typ  e='password' ></br>
                                <input name='submit' type='submit'>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            ";
        } else {
          $busID = $_GET['busno'];
          $sql3 = "SELECT * from bus where busid = '$busID'";
                $result3 = $con->query($sql3);
                while($row =$result3->fetch_assoc()) {
                  $maxst = $row['sittingcap'];
                }
                $ct = $maxst;
                while($ct >= 0) {
                  echo "
                    <div class='label'>$ct</div>
                  ";
                  $ct = $ct-5;
                }
                echo "</li>";
                $sql3 = "SELECT * FROM routes WHERE busid = '$busID'";
                $result3 = $con->query($sql3);  
                while($row =$result3->fetch_assoc()) {
                  $totalsit = $row['sitting'];
                  $name = $row['routname'];
                  $perc = ($totalsit/$maxst)*100;
                  echo "
                  <li class='bar teal' style='height:".$perc."% ;' title='90'>
                    <div class='percent'>".$totalsit."</div>
                    <div class='skill'>".$name."</div>
                  </li>
                  ";
                  }
            }
      ?>
    </ul>
        <script src="js/user.js"></script>
  </body>
</html>