<?php
$name = 68074;
$ingress = 'Snekkere';
$startDate = '2018-10-16';
$endDate  = '2018-10-18';
$applyUrl = 'https://apply.recman.no/job_post.php?id=68074';
;?>
<div class="container">
    <div class="row">
        <div class="inner">

            <div class="col-lg-2">
                <img class="img-responsive" src="./app/dist/img/deloitte.png">
            </div>

            <div class="col-lg-2">
                 <?php echo $jobPost ?>

            </div>

            <div class="col-lg-2  ">
                <?php echo $ingress ?>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-1"><?php echo $startDate ?>
                <span class="customSpan">
                    <?php
                    $now = time(); // current time
                    $your_date = strtotime($startDate ); // my date
                    $datediff = $now - $your_date; // this is seconds (в секундах)
                    $sDate =  floor($datediff / (60 * 60 * 24)) . ' day(s)'; // calc of days OPENED

                    function showDaysOpen() {
                        if ($sDate == 0) {
                            echo 'Open 1 day';
                        }
                        else {
                            echo 'Opened' . $sDate . 'days';
                        }
                    }
                    showDaysOpen();

                    ?>
                </span>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-1"><?php echo $endDate ?>
                <span class="customSpan">
                    <?php
                    $now = time(); // current time
                    $your_date = strtotime($endDate ); // my date
                    $datediff = $your_date - $now; // this is seconds (в секундах)
                    $exDate =  floor($datediff / (60 * 60 * 24)) . ' day(s)'; // calc of left days to CLOSE
                    function showDaysClose() {
                        if ($sDate == 0) {
                            echo 'Left one day.';
                        }
                        else {
                            echo 'Left' . $sDate . 'days';
                        }
                    }
                    showDaysClose();
                    ?>
                </span>
            </div>

            <div class="col-xs-12 col-sm-6 col-lg-2 middle"><a target="_blank" href="<?php echo $applyUrl ?>">FOLLOW ME</a></div>

        </div><!-- end of inner -->
    </div><!-- end of row -->
    <!-- next object -->
</div><!-- end of container -->
