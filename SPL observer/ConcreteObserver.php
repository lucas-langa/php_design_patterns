<?php
	class ConcreteObserver implements SplObserver {
		public function update(SplSubject $subject) {
				echo $subject->getData() .PHP_EOL;
		}
	}
?>