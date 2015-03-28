<?php
session_start();
require_once 'codebird.php';
$cb->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
$searchFollower = $cb->statuses_userTimeline(array('screen_name' => $_REQUEST['followerName']));
?>
<?php
$i = 0;
if(!empty($searchFollower)) {
    foreach($searchFollower as $tweet) {
        if(is_object($tweet) && $i < 10) {
            echo '<div>'.$tweet->text.'</div>';
        }
        $i++;
    }
}
?>
