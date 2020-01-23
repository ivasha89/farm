<?php
	class Animal {
		public $animalMetrics = []; 

		protected function randomizer ($var, $var1) {
			$randomizer = rand($var, $var1);
			return $randomizer;
		}

		protected function initSettings(){
			$followingText = [
				0 => "Укажите название животного на ферме дядюшки Боба:\nВ родительном падеже множественном числе, например 'куриц':",
				1 => 'Посчитайте число животных:',
				2 => "Какой продукт дает животное? Например, шт. яиц:",
				3 => "Минимум продукта, число:",
				4 => "Максимум, число:"
			];
			return $followingText;
		}

		protected function initializeAnimal() {
			$setAnimal = [];
			foreach ($this->initSettings() as $key => $metric) {
				$setAnimal[$key] = false;
				while(!$setAnimal[$key]) {
					echo $metric;
					$setAnimal[$key] = trim(fgets(STDIN));
				}
				$this->animalMetrics[$key] = $setAnimal[$key];
			}
		}

		protected function getAnimalProducts() {
			$animal = [];
			for ($i = 0; $i < $this->animalMetrics[1]; $i++) {
				$animal[$i] = $this->randomizer($this->animalMetrics[3], $this->animalMetrics[4]);
			}
			$this->animalMetrics[5] = array_sum($animal);
		}
		
		public function start() {
			$this->initializeAnimal();
			$this->getAnimalProducts();
		}
		
		public function finish() {
			echo "Сегодня на ферме дядюшки Боба есть " . $this->animalMetrics[1] . " " . $this->animalMetrics[0] . "\n";
			echo "У них мы собрали " . $this->animalMetrics[5] . " " . $this->animalMetrics[2] . "\n";
		}
	}
	
	class Farm {
		private $nameAdd;
		private $answer;
		private $animals = [];
		private function helloFarm() {
			echo "Есть ли животные сегодня на ферме дядюшки Боба?\nВарианты ответа: д или н:";
			$this->answer = trim(fgets(STDIN));
		}
		
		private function moreAnimal() {
			if (!isset($this->nameAdd)) {
				$k = 0;
				$this->nameAdd = $k;
			}
			else {
				$this->nameAdd++;
				$k = $this->nameAdd;
			}
			$animalName = "Animal".$k;
			$animalName = new Class() extends Animal {};
			$this->animals[$k] = new $animalName;

			$this->animals[$k]->start();
		}
		
		private function finalResult() {
			if($this->animals === Array()) echo "Сегодня ферма закрыта\n";
			else {
				echo "Вот и все на сегодня. Подведём итоги рабочего дня\n";
				foreach($this->animals as $animal) {
					$animal->finish();
				}
				echo "Приходите еще\n";
			}
		}
		
		public function start() {
			$this->helloFarm();
			if ($this->answer === 'д') {
				$this->moreAnimal();
				$this->start();
			}
			elseif($this->answer === 'н') {
				$this->finalResult();
			}
			else {
				echo "Ответ неверный. Попробуйте снова\n";
				$this->start();
			}
		}
	}

	$myFarm = new Farm;
	$myFarm->start();
?>
