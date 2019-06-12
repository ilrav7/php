<?php

class BlackBox 
{
	private $data;

	public function addLog($message)
	{
		$this->data .= $message;
	}

	public function getDataForEngineer(Engineer $engineer)
	{
		return $this->data;
	}
}

class Plane
{
	private $blackBox;

	public function __construct(BlackBox $blackBox)
	{
		$this->blackBox = $blackBox;
	}

	public function flyAndCrush()
	{
		$this->flyProcess();
		$this->crushProcess();
	}

	public function flyProcess()
	{
		$this->addLog('Самолёт летит');
	}

	public function crushProcess()
	{
		$this->addLog('Самолет упал');
	}

	protected function addLog($message)
	{
		$this->blackBox->addLog($message);
	}

	public function getBoxForEngineer(Engineer $engineer)
	{
		$engineer->setBox($this->blackBox);
	}
}

class Engineer
{	
	private $box;

	public function setBox(BlackBox $blackBox)
	{	 
		 $this->box = $blackBox;
	}

	public function takeBox(Plane $plane)
	{	
		$plane->getBoxForEngineer($this);
	}

	public function decodeBox()
	{
		echo $this->box->getDataForEngineer($this);
	}
}

class NewPlane extends Plane
{
	public function flyProcess()
	{
		$this->addLog('Самолёт2 летит');
	}
}