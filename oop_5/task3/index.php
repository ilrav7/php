<?php

class BadValueException extends \InvalidArgumentException {}
class ErrorIdException extends BadValueException {}
class ErrorAgeException extends BadValueException {}
class ErrorNameException extends BadValueException {}
class ErrorEmailException extends BadValueException {}
class InfoUserException extends BadValueException {}

$msg = '';

class User 
{
	public function load($id)
	{
		$arr_id = [1, 2, 3, 4];
		
		if (!in_array($id, $arr_id)) {
	        throw new ErrorIdException("Id в базе не существует");
		}
	}

	public function save($data)
	{
		return rand(0,1);
	}
}

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
    	$user = new User;
    	$user->load($_POST["id"]);
        $success = (new UserFormValidator())->validate($_POST);

        if($user->save($_POST['name'])) {
        	$msg = 'пользователь сохранен';
        } else {
        	throw new InfoUserException('пользователь не сохранен');
		}
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

	<?= $msg?>
	<form action="<? $_SERVER['DOCUMENT_ROOT']?>" method="POST" >
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
                <label for="id">ID:</label>
                <input id="id" size="10" name="id" value = '<?= $_POST['id']?>'>
            </td>
		</tr>
		<tr>
			<td>
                <label for="name_id">Ваше имя:</label>
                <input id="name_id" size="30" name="name" value = '<?= $_POST['name']?>'>
            </td>
		</tr>
		<tr>
			<td>
                <label for="age_id">Ваш возраст:</label>
                <input id="age_id" size="30" name="age" value = '<?= $_POST['age']?>'>
            </td>
		</tr>
		<tr>
			<td>
                <label for="email_id">Ваш email:</label>
                <input id="email_id" size="30" name="email" value = '<?= $_POST['email']?>'>
            </td>
		</tr>
		<tr>
			<td><input type="submit" value="Отправить" name="Button"></td>
		</tr>
	</table>
 </form>
