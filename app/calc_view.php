<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator raty kredytu</title>
<style>
	input {
		margin-bottom: 0.75rem;
		
	}
	label {
		font-weight: bold;
	}
</style>
</head>
<body>
<h1>Kalkulator kredytowy</h1><br>
<!--Dorobienie kalkulatora kredytowego (podać kwotę, ile lat i oprocentowanie, liczyć miesięczną ratę) -->
<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
<label for="amount">Kwota:</label>
<input type="text" name="amount" id="amount" value="<?php if(isset($amount)) print($amount); ?>" size="4"> <br>
<label for="time">Czas(w latach):</label>
<input type="text" name="time" id="time" value="<?php if(isset($time)) print($time); ?>" size="3"><br>
<label for="rate">Oprocentowanie:</label>
<input type="text" name="rate" id="rate" value="<?php if(isset($rate)) print($rate) ?>" placeholder="%" size="3"><br>
<input type="submit" value="Oblicz ratę miesięczną">
</form>

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ul style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #12a3f4; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ul>';
	}
}
?>

<?php if (isset($result) && empty( $messages )){ ?>
<div style="margin-top: 20px; padding: 10px; border-radius: 5px; background-color: #31db0f; width:300px;">
<?php echo 'Miesięczna rata równa: '. $result ."zł"; ?>
</div>
<?php } ?>

</body>

</html>