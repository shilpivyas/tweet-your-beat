<?php
session_start();
require_once 'codebird.php';
$cb->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
$allTweets = array();
$myTweets = $cb->statuses_homeTimeline();
?>
<?php
//$allTweets[0] = array('No.','Tweets');
if(!empty($myTweets)) {
    foreach($myTweets as $tweet) {
        if(is_object($tweet)) {
            $allTweets[] = array('tweet' => $tweet->text);
        }
    }
}

header('Content-disposition: attachment; filename=file.json');
header('Content-type: application/json');
print json_encode($allTweets);

?>
