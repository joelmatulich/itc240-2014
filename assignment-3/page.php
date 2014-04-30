<!doctype html>
<html>
<style>
body{background-color: #0099CC;
}
</style>
<body>
<h1>CEO's</h1>

<ul>
<?php
foreach ($ceos as $ceo) {
?>
<pre>
<?php
echo $ceo['company'] . ' ' . $ceo['name'] . ' ' . $ceo['cell_phone'];
?>
</pre>
<?php
}
?>
</ul>
</body>
</html>