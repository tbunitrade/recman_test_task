<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" href="./app/dist/css/vendor.css" type="text/css">
<link rel="stylesheet" href="./app/dist/css/style.css" type="text/css">

<?php
echo '<div class="container"><h1>Start get data</h1>';
//
$key	= "180413023455kb1d5c1223d347c115f78c6daaa9bd426252042511";
$scope	= "jobPost";
$fields	= "name,ingress,startDate,endDate";
$page	= 1;
$url	= "https://api.recman.no/v2/get/";
$url   .= "?key=$key&scope=$scope&fields=$fields";

//$response = file_get_contents($url); (quick access but cannot make POST)

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);


$data = json_decode($response, true);

//var_dump($response);
//var_dump($data);

include_once ('templates/view.php');
echo '<h2>test sample </h2>';

if($data["success"]){

    echo ' <h2>Below is my answer from API </h2>';
    foreach ($data["data"] as $jobPost){
//        foreach ($jobPost as $key => $value){
//            echo "Key: " . $key . ". Value: " . $value . "<br>";
//        }
        //echo '<br>';

        //echo 'one data test ! jobPostId = ' . $jobPost["jobPostId"] . '. Name = ' . $jobPost["name"] . '<br>';

       // echo '<br>';

       echo '
        
       <div class="row ">
            <ul class="inner list-group ">
                <li class="col-xs-2 col-sm-2 col-lg-1 list-group-item list-group-item-success">
                   ' . $jobPost["jobPostId"] . '
                </li>
                <li class="col-xs-2 col-sm-2 col-lg-2 list-group-item list-group-item-success">
                   ' . $jobPost["name"] .' 
                </li>
                <li class="col-xs-2 col-sm-2 col-lg-3 list-group-item list-group-item-success">
                   ' . $jobPost["ingress"] .'
                </li>
                <li class="col-xs-1 col-sm-1 col-lg-2 list-group-item list-group-item-success">
                   ' . $jobPost["startDate"] .'
                </li>
                <li class="col-xs-1 col-sm-1 col-lg-2 list-group-item list-group-item-success">
                   ' . $jobPost["endDate"] .'
                </li>
                <li class="col-xs-4 col-sm-4 col-lg-2 list-group-item list-group-item-success">
                   <a class="myHref" href="' . $jobPost["applyUrl"] .'">Follow - Me</a>
                </li>
            </ul><!-- end of inner -->
        </div><!-- end of row -->

        '; // end of echo VIEW template

    }
    echo '</div>';
} else {
    echo 'Error';
}



    ?>


<!-- Latest compiled and minified JavaScript -->

<!-- <script src="./app/dist/js/vendor.js"></script> -->
<script src="./app/dist/js/dist.js"></script>
