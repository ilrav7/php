<?php

class View implements Renderable
{
	function() { return new View\View('index', ['title' => 'Index Page']); };
}