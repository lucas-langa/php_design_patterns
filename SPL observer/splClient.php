<?php
	function __autoload( $class_name ) {
		include $class_name.'.php';
	}
	class Client {
		public function __construct() {
			echo "<p>Create three new observers, a new concrete subject:</p>".PHP_EOL;
			$ob1 = new ConcreteObserver();
			$ob2 = new ConcreteObserver();
			$ob3 = new ConcreteObserver();

			$subject = new ConcreteSubject();
			$subject->setObservers();
			$subject->setData("Here's your data!");
			$subject->attach($ob1);
			$subject->attach($ob2);
			$subject->attach($ob3);
			
			$subject->notify();
			echo "<p>Detach observer ob3. Now only ob1 and ob2 are notified:</p>".PHP_EOL;
			$subject->detach($ob3);
			$subject->setData("More data that only ob1 and ob2 need.");
			$subject->attach($ob3);
			$subject->attach($ob2);
			$subject->notify();
		}
	}
	$worker = new Client();
?>