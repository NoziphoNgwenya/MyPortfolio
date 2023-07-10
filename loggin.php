<?php
include'connection.php'; 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nozipho Ngwenya Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
  
</head>
<body>
<?php
include 'adminloginPHP.php';

if(!isset($_SESSION['email']) AND !isset($_SESSION['passwords']))
{
?>
  <!-- form that will be displayed while the user hasnt loged in -->

  <header id="header" class="fixed-top" style="background-color:black;">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li class="dropdown"><a href="#"><span>Dont have an Admin accout yet?</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="register.php">Register</a></li>
              
            </ul>
          </li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
      
     

<div class="container mt-5" style="padding-top:80px;">
  <div class="row">
    <div class="col-sm-12">
        <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
        <form class="" action="loggin.php" method="post" >
    <label>Email<br>
      <input type="text" name="email" placeholder="eg me@gmail.com">
    </label><br>
    <label>Password<br>
      <input type="password" name="password">
    </label><br>
     <button type="submit" name="login" class="button">Login</button>
  
  </div>
        </div>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>&copy created by Nozipho Ngwenya</p>
</div>

</form>
<?php
}
else{
?>
<header id="header" class="fixed-top" style="background-color:black;">
<div class="container d-flex align-items-center justify-content-between">

  <h1 class="logo"><a href="index.html"></a></h1>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <nav id="navbar" class="navbar" >
    <ul>
      <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
      <li class="dropdown"><a href="#"><span>Logout</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="register.php"><form action="loggin.php" method="post" name="logout">
        <button type="submit" name="logout" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">logout</button>
        <?php
        if(isset($_POST['logout']))
        {
          session_destroy();
          header('Location:loggin.php');
        }?>  
      </form></a></li>
          
        </ul>
      </li>
     
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

</div>
</header>

<div class="container mt-5" style="padding-top:80px;">
  <div class="row" >
    <div class="col-sm-12>
<?php
    $password=$_SESSION['passwords'];
$displayA="SELECT * FROM adminlog WHERE passwords='$password'";
$querylogin=mysqli_query($connection,$displayA);
$verI=mysqli_fetch_all($querylogin,MYSQLI_ASSOC);

foreach ($verI as $arry) {
	// code...


echo"<br>";
echo "<center><h5><b>".$arry['namez']." ".$arry['surname']."</b></h5></center>";
echo"<center><h6>You have successfully logged in as an admin</h6></center>";
?>
        <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
        <h3 style="text-align: center;">These are</h3>
        <h2 style="text-align: center;">USERS THAT HAVE LOGGED IN</h2>
    <br />
    <div id="dvData">
        <table class="table" id="simple_table" style="width:100%">
  <tr>
    <th>Name</th>
    <th>surname</th>
    <th>Username</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Password</th>
  </tr>
  <?php
  // Checking for connections
$displays="SELECT * FROM regtable";
$querylogin=mysqli_query($connection,$displays);
$va=mysqli_fetch_all($querylogin,MYSQLI_ASSOC);
 
foreach ($va as $rows) {
	// code...
  ?>           
  <tr>
  <td><?php echo $rows['names'];?></td>
  <td><?php echo $rows['surname'];?></td>
  <td><?php echo $rows['username'];?></td>
  <td><?php echo $rows['email'];?></td>
  <td><?php echo $rows['contact'];?></td>
  <td><?php echo $rows['passwords'];?></td>
  </tr>
<?php
                }
            ?>
            
             <center><div class='button'>
                <a href="#" id ="export" role='button'>Click On This Link To Export The Table Data into a CSV File
                </a>
            </div></center>
            </div>

             
</table>
<?php
$mycounter= "SELECT count(id) AS total FROM logins"; 
    $sum= mysqli_query($connection,$mycounter);
    $values=mysqli_fetch_assoc($sum);
    $num_rows= $values['total'];
    echo'This is the total number of users that have logged in:'. $num_rows ;
    ?>
</div> 
</div>

    </div>
  </div>
</div>
<div>

</div>
<div class="mt-5 p-4 bg-dark text-white text-center">
<input type="button" class="btn btn-primary py-2 " onclick="generate()" value="Export To PDF"  />
  <p>&copy created by Nozipho Ngwenya</p>
</div>
<?php
}}?>
<!-- Scripts ----------------------------------------------------------- -->
<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
        <!-- If you want to use jquery 2+: https://code.jquery.com/jquery-2.1.0.min.js -->
        <script type='text/javascript'>
        $(document).ready(function () {

            console.log("HELLO")
            function exportTableToCSV($table, filename) {
                var $headers = $table.find('tr:has(th)')
                    ,$rows = $table.find('tr:has(td)')

                    // Temporary delimiter characters unlikely to be typed by keyboard
                    // This is to avoid accidentally splitting the actual contents
                    ,tmpColDelim = String.fromCharCode(11) // vertical tab character
                    ,tmpRowDelim = String.fromCharCode(0) // null character

                    // actual delimiter characters for CSV format
                    ,colDelim = '","'
                    ,rowDelim = '"\r\n"';

                    // Grab text from table into CSV formatted string
                    var csv = '"';
                    csv += formatRows($headers.map(grabRow));
                    csv += rowDelim;
                    csv += formatRows($rows.map(grabRow)) + '"';

                    // Data URI
                    var csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

                $(this)
                    .attr({
                    'download': filename
                        ,'href': csvData
                        //,'target' : '_blank' //if you want it to open in a new window
                });

                //------------------------------------------------------------
                // Helper Functions 
                //------------------------------------------------------------
                // Format the output so it has the appropriate delimiters
                function formatRows(rows){
                    return rows.get().join(tmpRowDelim)
                        .split(tmpRowDelim).join(rowDelim)
                        .split(tmpColDelim).join(colDelim);
                }
                // Grab and format a row from the table
                function grabRow(i,row){
                     
                    var $row = $(row);
                    //for some reason $cols = $row.find('td') || $row.find('th') won't work...
                    var $cols = $row.find('td'); 
                    if(!$cols.length) $cols = $row.find('th');  

                    return $cols.map(grabCol)
                                .get().join(tmpColDelim);
                }
                // Grab and format a column from the table 
                function grabCol(j,col){
                    var $col = $(col),
                        $text = $col.text();

                    return $text.replace('"', '""'); // escape double quotes

                }
            }


            // This must be a hyperlink
            $("#export").click(function (event) {
                // var outputFile = 'export'
                var outputFile = window.prompt("What do you want to name your output file (Note: This won't have any effect on Safari)") || 'export';
                outputFile = outputFile.replace('.csv','') + '.csv'
                 
                // CSV
                exportTableToCSV.apply(this, [$('#dvData>table'), outputFile]);
                
                // IF CSV, don't do event.preventDefault() or return false
                // We actually need this to be a typical hyperlink
            });
        });
    </script>
  <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script
</body>
</html>
