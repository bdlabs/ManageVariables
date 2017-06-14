<?

include 'ManageVariables.php';

memSet("test","1");
memSet("testmore","100");

echo memGet("test"),"\n";
echo memGet("testmore"),"\n";;