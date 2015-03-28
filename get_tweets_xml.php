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

header('Content-Disposition: attachment;filename=Tweets.xml');
header('Content-Type: text/xml');

// initializing or creating array
$student_info = $allTweets;

// creating object of SimpleXMLElement
$xml_student_info = new SimpleXMLElement("<?xml version=\"1.0\"?><tweets_info></tweets_info>");

// function call to convert array to xml
array_to_xml($student_info,$xml_student_info);


// function defination to convert array to xml
function array_to_xml($student_info, &$xml_student_info) {
    foreach($student_info as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
                $subnode = $xml_student_info->addChild("$key");
                array_to_xml($value, $subnode);
            }
            else{
                $subnode = $xml_student_info->addChild("tweets");
                array_to_xml($value, $subnode);
            }
        }
        else {
            $xml_student_info->addChild("$key",htmlspecialchars("$value"));
        }
    }
}

print $xml_student_info->asXML();
$xml_student_info->saveXML('Tweets');
?>
