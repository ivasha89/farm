<?php
$k=0;
$animalName = 'Animal'.$k;
echo $animalName;
/*	class Farm {
	
		public $cows;
		public $chickens;
		
		public function cowsCount() {
			$cowsNumber = false;
			while(!$cowsNumber) {
				echo "Сегодня на ферме у дядюшки Боба коров: ";
				$cowsNumber = trim(fgets(STDIN));
			}
			$this->cows = $cowsNumber;
		}
		
		public function chickensCount() {
			$chickensNumber = false;
			while(!$chickensNumber) {
				echo "А еще мы насчитали куриц: ";
				$chickensNumber = trim(fgets(STDIN));
			}
			$this->chickens = $chickensNumber;
		}
		
		public function start() {
			$this->cowsCount();
			$this->chickensCount();
		}
		
		public function milkCows() {
			$cows = [];
			for ($i = 0; $i < $this->cows; $i++) {
				$cows[$i] = rand(8,12);
			}

			$milkLitres = array_sum($cows);
			return $milkLitres;
		}
		
		public function pickUpEggs() {
			$chickens = [];
			for ($i = 0; $i < $this->chickens; $i++) {
				$chickens[$i] = rand(0,1);
			}
			$allEggs = array_sum($chickens);
			return $allEggs;
		}

	}

	$myFarm = new Farm;
	$myFarm->start();

	echo "Сегодня на ферме дядюшка Боба мы собрали: \n";
	echo $myFarm->milkCows() . " литров молока у ". $myFarm->cows ." коров;\n";		
	echo "И " . $myFarm->pickUpEggs() . " шт. яиц у " . $myFarm->chickens . " куриц;\n";*/
?>
