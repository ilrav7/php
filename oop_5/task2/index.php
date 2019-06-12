<?php

class BadValueException extends \InvalidArgumentException {}
class ErrorAgeException extends BadValueException {}
class ErrorNameException extends BadValueException {}
class ErrorEmailException extends BadValueException {}

class UserFormValidator
{
	 public function validate($post)
	 {
		if ($post["age"] < 18) {
	 	    throw new ErrorAgeException("Возраст не менее 18 лет");
		}
		
		if ($post["name"] == '') {
			throw new ErrorNameException("Имя должно быть заполнено");
		}

		if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL) || $post['email'] == '') {
			throw new ErrorEmailException('Email указан некорректно');
		}
	 }
}

$success = false;
if (!empty($_POST)) {
    try {
        $success = (new UserFormValidator())->validate($_POST);
        echo "Валидация прошла успешно";
    } catch (\Exception $e) {
        echo $error = $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Task2 </title>
</head>

<body>

	<form action="<? $_SERVER['DOCUMENT_ROOT']?>" method="POST" >
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
                <label for="name_id">Ваше имя:</label>
                <input id="name_id" size="30" name="name">
            </td>
		</tr>
		<tr>
			<td>
                <label for="age_id">Ваш возраст:</label>
                <input id="age_id" size="30" name="age" >
            </td>
		</tr>
		<tr>
			<td>
                <label for="email_id">Ваш email:</label>
                <input id="email_id" size="30" name="email" >
            </td>
		</tr>
		<tr>
			<td><input type="submit" value="Отправить" name="Button"></td>
		</tr>
	</table>
 </form>
