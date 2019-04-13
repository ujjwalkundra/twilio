<?php
// handle the customer response
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<Response><Say>You have said " . $_REQUEST['Speech'] . "</Say></Response>";
?>