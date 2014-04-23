<!doctype html>
<html>
<head>
</head>

<body>
<?php 
$method = $_SERVER["REQUEST_METHOD"];
echo $method;
if ($method =="GET"){
?>
	<form method="post">
	<input name="first_number"placeholder="Number between 1 and 5">
	<input name="verb_1"placeholder="Verb">
	<input name="adjective_1" placeholder="Adjective">
	<input name="plural_noun" placeholder="Plural Noun">
	<input name="second_number" placeholder="Number">
	<input name="adjective_2" placeholder="Adjective">	
	<button>Click To Read</button> 
	</form>
<?php
} else {
?>
<br>
Here are <?= $_REQUEST["first_number"] ?> takeaways from the Clippers’ 138-98 <?= $_REQUEST["verb_1"] ?> over the <?= $_REQUEST["adjective_1"] ?> State Warriors on Monday night at <?= $_REQUEST["plural_noun"] ?> Center in Game <?= $_REQUEST["second_number"] ?> of their first-round <?= $_REQUEST["adjective_2"] ?> playoff series that evened the series at one game apiece heading into Game 3 on Thursday at Oracle Arena in Oakland:
<br>
<?php
$first_number = $_REQUEST["first_number"];
if ($first_number == 1) {
?>
<br>
1. If Blake Griffin keeps playing like this, the series is over.
<?php
} elseif($first_number == 2) {
?>
<br>
1. If Blake Griffin keeps playing like this, the series is over.<br>
2. The Warriors cannot win without Stephen Curry’s splish to Klay Thompson’s splash.

<?php
} elseif($first_number == 3) {
?>
<br>
1. If Blake Griffin keeps playing like this, the series is over.<br>
2. The Warriors cannot win without Stephen Curry’s splish to Klay Thompson’s splash<br>
3. The Clippers’ bench lives!

<?php
} elseif($first_number == 4) {
?>
<br>
1. If Blake Griffin keeps playing like this, the series is over.<br>
2. The Warriors cannot win without Stephen Curry’s splish to Klay Thompson’s splash<br>
3. The Clippers’ bench lives!<br>
4. DeAndre Jordan figured something out with his free throws.

<?php
} elseif($first_number == 5) {
?>
<br>
1. If Blake Griffin keeps playing like this, the series is over.<br>
2. The Warriors cannot win without Stephen Curry’s splish to Klay Thompson’s splash<br>
3. The Clippers’ bench lives!<br>
4. DeAndre Jordan figured something out with his free throws.<br>
5. Rivers’ sideline presence instills confidence in the Clippers.

<?php
}}
?>
<br>
<a href="index.php">Reset</a>
</body>
</html>