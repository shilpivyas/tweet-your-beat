<?php
session_start();
require_once 'codebird.php';
$cb->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
$allTweets = array();
print_r($_GET['type']);
$myTweets = $cb->statuses_homeTimeline();
?>
<?php
//$allTweets[0] = array('No.','Tweets');
if(!empty($myTweets)) {
    foreach($myTweets as $tweet) {
        if(is_object($tweet)) {
            $allTweets[] = $tweet->text;
        }
    }
}

$i = 1;
foreach($allTweets as $tweet) {
    $allTweets[$i] = array($i,$tweet);
    $i++;
}
$allTweets[0] = array('No.','Tweets');
if($_GET['type'] == 'csv') {
    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename="Tweets.csv"');
} else if($_GET['type'] == 'xls') {
    header('Content-type: application/xls');
    header('Content-Disposition: attachment; filename="Tweets.xls"');
}

$csv_file = fopen('php://output', 'w');
foreach($allTweets as $tweet) {
    fputcsv($csv_file,$tweet,',','"');
}

fclose($csv_file);
?>
