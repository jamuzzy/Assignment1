
<html>
<head>
    <link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<?php include 'menu.inc'; ?>
<main>
     <h1>Student's Marks Average</h1>
      <form action="task2.php" method="get">
                <label>Name:</label>
                <input type="text" name="Name"><br><br>
                <label>Surname:</label>
                <input type="text" name="Surname"><br><br>
				<label>mark1:</label>
                <input type="text" name="mark1"><br><br>
				
				<label>mark2:</label>
                <input type="text" name="mark2"><br><br>
				
				<label>mark3:</label>
                <input type="text" name="mark3"><br><br>
				
				<label>mark4:</label>
                <input type="text" name="mark4"><br><br>
				
                <label>Average score:</label>
                <input type="text" name="Average_score"><br>
                     
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit"z value="Calculate"><br>
           </div>
         </form>
         </main>
        </body>
  <iframe src="task2.txt" height="400" width="1200">   Your browser does not support iframes. </iframe>
</html