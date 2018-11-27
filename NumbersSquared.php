<?php
header('Content-Type: text/html; charset=utf-8');

class NumbersSquared implements Iterator{
	private $start;
	private $end;
	private $current;
	
	public function __construct($start, $end) {
		$this->start = $start;
		$this->end = $end;		
	}
	
	public function rewind(){
		$this->current = $this->start;		
	}
	
	public function valid(){
		return ($this->current < $this->end);		
	}
	
	public function next(){
		$this->current++;
	}
	
	public function key(){
		return $this->current;
	}
	
	public function current(){
		return pow($this->current, 2);
	}
}

$it = new NumbersSquared(3, 7);
foreach ($it as $num => $square){
	echo "Квадрат числа $num = $square<br>";
}