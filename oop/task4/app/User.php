<?php

namespace App;

class User 
{
	public $fio;
	public $email;
	public $gender = '';
	public $age = '';
	public $phone = '';

	public function __construct($fio, $email, $gender = '', $age = '', $phone = '') 
	{
		$this->fio = $fio;
		$this->email = $email;
		$this->gender = $gender;
		$this->age = $age;
		$this->phone = $phone;
	}

	public function notifyOnEmail($message) 
	{
		$this->send($this->email, $message);
	}

	public function notifyOnPhone($message) 
	{
		$this->send($this->phone, $message);
	}

	public function notify($message) 
	{
		if ($this->age < 18) {
			$message = $this->censor($message);
		} elseif ($this->age == '') {
			$message = 'Возраст не указан';
		}

		if ($this->phone != '') {
			$this->notifyOnPhone($message);
		}
		$this->notifyOnEmail($message);
	}

	public function censor($message) 
	{
		return "Нет 18 лет";
	}

	public function send($device, $message) 
	{
		if ($device == $this->phone) {
			echo "Уведомление клиенту $this->fio на телефон ($device) : $message ".'<br>';
		} elseif ($device == $this->email) {
		    echo "Уведомление клиенту $this->fio на email ($device) : $message ".'<br>';
        }
	}
}