<title>Главная</title>
</head>
<body>
<?php
error_reporting( 0 );
?>
<p> Сводка </p>
Ваш кошелек:
 <?php echo htmlspecialchars($_POST['money']);?><br>
 Ваши доходы:
 <?php echo htmlspecialchars($_POST['SymmaDohoda']);?><br>
 Ваши расходы:
 <?php echo htmlspecialchars($_POST['rash']);?><br>
 Ваши долги:
 <?php echo htmlspecialchars($_POST['dolg']);?><br>
 Долги вам:
 <?php echo htmlspecialchars($_POST['dolgmne']);?>
<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
if (isset($_POST['SymmaDohoda'])) $SymmaDohoda = $_POST['SymmaDohoda'];
if (isset($_POST['password'])) $password = $_POST['password'];
if (isset($_POST['otchectvo'])) $otchectvo = $_POST['otchectvo'];
if (isset($_POST['mecto'])) $mecto = $_POST['mecto'];
if (isset($_POST['tel'])) $tel = $_POST['tel'];
if (isset($_POST['mail'])) $mail = $_POST['mail'];
echo "Имя: $SymmaDohoda ";
?>
<form name="f1" method="POST" action=".php">
<input type="submit" name="sv" value="Сводка">
</form>
<form name="f1" method="POST" action=".php">
<input type="submit" name="dh" value="Доходы">
</form>
<form name="f1" method="POST" action=".php">
<input type="submit" name="rsh" value="Расходы">
</form>
<form name="f1" method="POST" action=".php">
<input type="submit" name="nstr" value="Настройки">
</form>
</body>
</html> 
