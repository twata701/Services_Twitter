--TEST--
direct-messages-sent
--FILE--
<?php

require_once dirname(__FILE__) . '/setup.php';

try {
    $twitter  = Services_Twitter_factory('direct_messages/sent');
    $messages = $twitter->direct_messages->sent();
    var_dump(is_array($messages));
} catch (Services_Twitter_Exception $exc) {
    echo $exc . "\n";
}

?>
--EXPECT--
bool(true)
