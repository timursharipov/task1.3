<?php

$animalsContinent = [
	'Asia' => ['Rhinocerotidae', 'Elephas maximus', 'Bos javanicus'],
	'Africa' => ['Syncerus caffer', 'Hippopotamus amphibius', 'Hippotigris'],
	'North America' => ['Bison', 'Antilocapra americana', 'Gulo'],
	'South America' => ['Lutra', 'Hydrochoerus hydrochaeris', 'Panthera onca'],
	'Antarctica' => ['Aptenodytes patagonicus', 'Leptonychotes weddellii', 'Physeter macrocephalus'],
	'Europe' => ['Rangifer tarandus', 'Leporidae', 'Erinaceidae'],
	'Australia' => ['Macropus', 'Phascolarctos cinereus', 'Galeocerdo cuvier'],
];

foreach ($animalsContinent as $continent => $animals) {
	echo '<h2>', $continent, '</h2> <br>';
	foreach ($animals as $animal) {
		echo $animal, '<br>';
	}
}

echo '<font color="red"> <h1> Новый массив: </h1> </font>';

foreach ($animalsContinent as $continent => $animals) {
	foreach ($animals as $animal) {
		$result = str_word_count ($animal);
		if ($result == 2) {
		$new_array[]=$animal;
		}
	}
}

echo '<pre>';
print_r($new_array);
echo '<pre/>'; 

echo '<font color="red"> <h1> Перемешиваем слова: </h1> </font>';

foreach ($new_array as $animal) {
	$newAnimal = explode (" ", $animal);
	shuffle($newAnimal);
	$newAnimal2 = implode (" ", $newAnimal);
	
	echo '<pre>';
	print_r($newAnimal2);
	echo '<pre/>'; 

}

?>