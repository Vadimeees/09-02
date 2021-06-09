<title>Один из возможных вариантов HTML формы</title>
</head>
<body bgcolor="turquoise">
<form name="f1" method="POST" action="glavnaya.php">
<input name="link" type="hidden" value="index.php" />
Логин: <br/>
<input name="login" type="text" size="25" maxlength="30" value="Введите логин" /> <br />
Пароль: <br />
<input name="pd" type="password" size="25" maxlength="30" value="" /> <br />
<input name="remember" type="checkbox" value="yes" /> Запомнить <br/>
<input type="submit" name="enter" value="Вход" />
</form>
</body>
</html> 
