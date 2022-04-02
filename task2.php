<!Doctype>
<html>
    <head>
     <link rel="stylesheet" type="text/css" href="main2.css">
    </head>
<?php
    $Name = $_GET['Name'];
    $Surname = $_GET['Surname']; 
   
    $mark1 = $_GET['mark1'];
    $mark2 = $_GET['mark2'];
	$mark3 = $_GET['mark3'];
	$mark4 = $_GET['mark4'];
	  
      
   $Totalmark = $mark1 + $mark2 + $mark3 + $mark4;
   $Average_score =  $Totalmark  / 4 ;
     ?>
<body>
 <?php  include 'menu.inc'; ?>   
  <main>
      <h1> Student's Marks Average.</h1>
      <label>name:</label>
    <span><?php echo $Name;?></span><br>
      
      <label>Surname:</label>
      <span><?php echo  $Surname;?></span><br>
          
      <label>Average_score :</label>  
      <span><?php echo $Average_score;?></span><br>
	  
	  <label>Grade :</label>
		  <span><?php if ($Average_score <= 100 && $Average_score >= 80){
		echo "A";
		}elseif ($Average_score >=70 && $Average_score <=79.9){
	      echo "B";
	    }elseif ($Average_score <=69.9 && $Average_score >=60){
	      echo "C";
	    }elseif ($Average_score <59.9 && $Average_score >=50.9){
	      echo "D";
	    }elseif ($Average_score <=49.9 ){
	      echo "E";
	    }elseif ($Average_score > 0 && $Average_score <= 39.9){
	      echo "F";
	    }
		?></span>
      
      <br>
    </main>
    </body>
</html>