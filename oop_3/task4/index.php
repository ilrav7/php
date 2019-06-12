<?php

interface Reader
{
	public function read():array;
}

interface Writter
{
	public function write(array $data);
}

interface Converter
{
	public function convert($item);
}

class Import
{
	private $reader;
	private $writter;
	private $converters = [];

	public function from(Reader $reader)
	{
		$this->reader = $reader;
		return $this;
	}

	public function to(Writter $writter)
	{
		$this->writter = $writter;
		return $this;
	}

	public function with(Converter $converter)
	{
		$this->converters = $converter;
		return $this;
	}

	public function execute()
	{	
		$array = [];
		foreach ($this->reader->read() as $str) {
			foreach ($this->converters as $convert) {
				$str = $convert;
			}
			$array[] = $str;
		}
		$this->writter->write($array);
		echo 'Запись в файл2 из файл1';
	}
}

class ArrayReader implements Reader
{
	public function read():array
	{
		return explode("\n", file_get_contents(__DIR__ .'/file1'));
	}
}

class ArrayWritter implements Writter
{
	public function write(array $data)
	{
		return file_put_contents(__DIR__ .'/file2', $data, FILE_APPEND);
	}
}

class ArrayConverter implements Converter
{
	public function convert($item)
	{
		return str_split(implode(" ", $item));
	}
}


(new Import())
->from(new ArrayReader())
->to(new ArrayWritter())
->with(new ArrayConverter())
->with(new ArrayConverter())

->execute();





// $t = new ArrayReader;
// $ff = $t->read();
// $c = new ArrayConverter;
// $c->convert($ff);
// $p = new ArrayWritter;

// $p = new ArrayWritter;
// var_dump($p->write($c->convert($ff)));

