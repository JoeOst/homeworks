<!-- Спросите у пользователя телефон с помощью формы. Затем сделайте так, чтобы при повторном открытии страницы, в форме (поля: имя, фамилия, телефон) поле телефон, телефон были автоматически заполнены. -->
<?php 
$username = (isset($_COOKIE['user']['name'])) ? $_COOKIE['user']['name'] : null;

$userSurname = (isset($_COOKIE['user']['surname'])) ? $_COOKIE['user']['surname'] : null;

$userPhone = (isset($_COOKIE['user']['phonenumber'])) ? $_COOKIE['user']['phonenumber'] : null;
?>

 <form action="action.php" method="post">
	Name:<input type="text" name="name" value="<?= $username; ?>">
	Surname:<input type="text" name="surname" value="<?= $userSurname; ?>">
	Phone number:<input type="tel" name="phonenumber" value="<?= $userPhone; ?>">
	<input type="submit" name="submit" value="Send">
</form>

