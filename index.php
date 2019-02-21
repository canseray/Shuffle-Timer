<!DOCTYPE html>
<?php
$persons = [
       0=> 'padme',
       1=> 'anakin',
       2=> 'obivan',
       3=> 'r2d2'
    ];

shuffle($persons);  //index sort mixer

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sorting List</title>
    </head>
    <body>
        <?php
        echo 'sorting list<br>' ;
        foreach ($persons as $no => $name){
            $month = $no+1;
            
            $sortListTimestamp = strtotime('+'.$month.'month');
            $sortListDate = date('d.m.Y', $sortListTimestamp);
            
            echo $month .'.Month , ' .$sortListDate.' : ' . $name . '<br/>';
            
        }
        
        
        ?>
    </body>
</html>
