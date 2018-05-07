<?php

$animalsContinent = [
	'Asia' => ['Carcharocles megalodon', 'Elephas maximus', 'Bos javanicus'],
	'Africa' => ['Syncerus caffer', 'Hippopotamus amphibius', 'Tragelaphus eurycerus'],
	'North America' => ['Nasua narica', 'Antilocapra americana', 'Canis latrans'],
	'South America' => ['Lama guanicoe', 'Hydrochoerus hydrochaeris', 'Panthera onca'],
	'Antarctica' => ['Aptenodytes patagonicus', 'Leptonychotes weddellii', 'Physeter macrocephalus'],
	'Europe' => ['Rangifer tarandus', 'Ursus arctos', 'Ovibos moschatus '],
	'Australia' => ['Sarcophilus harrisii ', 'Phascolarctos cinereus ', 'Galeocerdo cuvier'],
];

foreach ($animalsContinent as $continent => $animals) {
	echo '<h2>' $continent '</h2> <br>';
	foreach ($animals as $animal) {
		echo $animal, '<br>';
	}
}

?>