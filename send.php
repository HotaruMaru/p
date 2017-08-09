<html>
<body>
<table border="1">
	<tr>
		<td>名前</td>
		<td><?php echo htmlspecialchars($_POST["myName"]) ?></td>
	</tr>
	<tr>
		<td>メールアドレス</td>
		<td>
			<?php echo htmlspecialchars($_POST["mail"]) ?>
		</td>
	</tr>
</table>
</body>
</html>
