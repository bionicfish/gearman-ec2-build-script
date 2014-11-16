<?php
$client= new GearmanClient();
$client->addServer();
print "\nRunning test...";
print "\nReversing \"Hello World\" using reverse_worker .....   ";
print $client->do("reverse", "Hello World!");
print "\nComplete!\n\n";
?>
