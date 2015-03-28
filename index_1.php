<?php
require_once ('lib/codebird.php');
\Codebird\Codebird::setConsumerKey('kyPWcav2wP1l3QG8aostdOSeH', 'jkMzkIScIWmvA6XgERy7XkwNEH73HyoUPymRwr0sWELzEtFY5o'); // static, see 'Using multiple Codebird instances'

$cb = \Codebird\Codebird::getInstance();

//$reply = $cb->oauth2_token();
//$bearer_token = $reply->access_token;
$bearer_token = 'AAAAAAAAAAAAAAAAAAAAAG5VdwAAAAAA42c3hBR2vxeRozaEWMBb4rYXKeQ%3DfRG7zZ9WdUSrv3xvVrqb9Thlo5GGMcJKtoxccWFL2KoiRZUAT4';
\Codebird\Codebird::setBearerToken($bearer_token);

//$cb->setToken($_SESSION['oauth_token'], $_SESSION['oauth_token_secret']); // see above
$cb->setToken('138427770-hqMgXu7LsgxYxtocmjZBJRF8Q34H4hV3JhtgkvSw', 'eyF4iL9tVpnsmqmcVn3MwWcet6x4AfP60GqzE3sjFBJIw');

//get all tweets
//$reply = (array) $cb->statuses_homeTimeline();
//print_r($reply);

//status update
//$cb->statuses_update('status=Whohoo, I just tweeted!');

//followers list
//$reply = (array) $cb->followers_list();
//print_r($reply);

//get users latest tweets
//$reply = (array) $cb->statuses_userTimeline();
//$i = 0;
//$myTweets = array();
//if(!empty($reply)) {
//    foreach($reply as $tweet) {
//        if(is_object($tweet) && $i < 10) {
//            $myTweets[] = $tweet->text;
//        }
//        $i++;
//    }
//}

$myFollowers = array();
$followers = (array) $cb->followers_list();
//$i = 0;
//if(isset($followers['users']) && !empty($followers['users'])) {
//    foreach($followers['users'] as $follower) {
//        if(is_object($follower) && $i < 10) {
//            $myFollowers[$i]['id']          = $follower->id;
//            $myFollowers[$i]['name']        = $follower->name;
//            $myFollowers[$i]['screen_name'] = $follower->screen_name;
//            $myFollowers[$i]['description'] = $follower->description;
//        }
//        $i++;
//    }
//}

//pr($followers['users'][0]->screen_name);
//$followersTweet = $cb->statuses_userTimeline($followers['users'][0]->id);
//pr($followersTweet);

function pr($data) {
    return '<pre>'.print_r($data).'<pre>';
}
?>