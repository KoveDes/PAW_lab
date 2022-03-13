<?php require_once dirname(__FILE__) . '/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator raty kredytu</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">

</head>
<body>
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT);?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

	<div style="margin: 0px 20px">
<h1>Kalkulator kredytowy</h1><br>
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class='pure-form pure-form-aligned'>
   <div class="pure-control-group">
		<label for="amount">Kwota</label>
   	<input type="text" name="amount" id="amount" value="<?php check($amount);?>" size="4" class="pure-input-rounded">
	</div>
	<div class="pure-control-group">
  		<label for="time">Czas(w latach):</label>
		<input type="text" name="time" id="time" value="<?php check($time)?>" size="3" class="pure-input-rounded">
	</div>
	<div class="pure-control-group">
 		<label for="rate">Oprocentowanie:</label>
		<input type="text" name="rate" id="rate" value="<?php check($rate)?>" placeholder="%" size="3" class="pure-input-rounded">  <br>
	</div>

 		<input type="submit" value="Oblicz ratę miesięczną" class="pure-button pure-button-primary" style="margin: 10px 0 0 10px; width:30%; font-size: 19px" >

	</form>
</div>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
    if (count($messages) > 0) {
        echo '<ul style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #12a3f4; width:300px;">';
        foreach ($messages as $key => $msg) {
            echo '<li>' . $msg . '</li>';
        }
        echo '</ul>';
    }
}
?>

<?php if (isset($result) && empty($messages)) {?>
<div style="margin-top: 20px; padding: 10px; border-radius: 5px; background-color: #31db0f; width:300px;">
<?php echo 'Miesięczna rata równa: ' . $result . "zł"; ?>
</div>
<?php }?>

</body>

</html>