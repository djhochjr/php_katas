<!DOCTYPE html>
<html>
    <head>
		<title>Rand Dice Roll</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
    //dice roll count till hits a six
    $index = 0;
    do {
    $roll = rand(1,6);
    $index++;
    }
    while($roll != 6);
    
    echo $index;
    ?>

    </body>
</html>
