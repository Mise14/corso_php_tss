<h1> Sono la risposta (RESPONSE)</h1>
<?php
echo "<pre>";
print_r($_GET);
echo "<pre>";

echo "<pre>";
print_r($_POST);
echo "<pre>";


echo "La tua email è <br>";
echo "<strong>".$_POST['email']."</strong>";
?>