<?php
$doc = new DOMDocument();
$doc->load("employees.xml");
$doc->save("employees_bak.xml");
echo "<br>-- Done --";
?>
