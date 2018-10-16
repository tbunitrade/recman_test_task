<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" href="./app/dist/css/vendor.css" type="text/css">
<link rel="stylesheet" href="./app/dist/css/style.css" type="text/css">



<?php
// start get data
//include_once ('templates/view.php');

$key	= "180413023455kb1d5c1223d347c115f78c6daaa9bd426252042511";
$scope	= "jobPost";
$fields	= "name,ingress,startDate,endDate";
$page	= 1;
$url	= "https://api.recman.no/v2/get/";
$url   .= "?key=$key&scope=$scope&fields=$fields";

$response = file_get_contents($url);
$data = json_decode($response, true);

//var_dump($response);
//var_dump($characters);


echo'Here my answer ';

foreach ($data as $key => $arrays) {
    var_dump($arrays);
    echo $key . '<br>';
    echo $arrays;

    //print_r($arrays);
    echo 'что получили  далее - из масива выводим по масиву ';

    foreach( $arrays as $array) {
        ?>
        <!-- Start data of arrays -->
        <ul class="row list-group">
        <?php
        foreach ($array as $value) { ?>
            <!-- values -->
            <li class="col-md-2 list-group-item list-group-item-success">
                <?php  echo $value;?>
            </li>

            <?php
        }
        ?> <!-- end of data --></ul><?php
    }
}
echo'end ';


    ?>


<!-- Latest compiled and minified JavaScript -->

<!-- <script src="./app/dist/js/vendor.js"></script> -->
<script src="./app/dist/js/dist.js"></script>
