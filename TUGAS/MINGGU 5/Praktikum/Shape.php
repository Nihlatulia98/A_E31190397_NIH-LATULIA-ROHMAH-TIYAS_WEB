<?php
		class Circle implements Shape {
			private $radius;
			
			public function __construct($radius)
			{
				$this -> radius = $radius;
		    }
				
			// calArea calculates the area of circles
			public function calArea()
			{
				return $this -> radius * $this -> radius * pi();
			}
		}
?>
		