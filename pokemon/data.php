<?php

/* Database in mixed array associative format
Total 52 sets of array elements to generate 49 randomized qestions - with 3 randomized choices and with answers positions randomized - No repeat of similar questions in the question cycle set
Actual game play will be 807 elements as in year 2020 */

// Start - Database
$db = array(array("name" => "Bulbasaur", "pic" => "001.png"), array("name" => "Ivysaur", "pic" => "002.png"), array("name" => "Venusaur", "pic" => "003.png"), array("name" => "Charmander", "pic" => "004.png"), array("name" => "Charmeleon", "pic" => "005.png"), array("name" => "Charizard", "pic" => "006.png"), array("name" => "Squirtle", "pic" => "007.png"), array("name" => "Wartortle", "pic" => "008.png"), array("name" => "Blastoise", "pic" => "009.png"), array("name" => "Caterpie", "pic" => "010.png"), array("name" => "Metapod", "pic" => "011.png"), array("name" => "Butterfree", "pic" => "012.png"), array("name" => "Weedle", "pic" => "013.png"), array("name" => "Kakuna", "pic" => "014.png"), array("name" => "Beedrill", "pic" => "015.png"), array("name" => "Pidgey", "pic" => "016.png"), array("name" => "Pidgeotto", "pic" => "017.png"), array("name" => "Pidgeot", "pic" => "018.png"), array("name" => "Rattata", "pic" => "019.png"), array("name" => "Raticate", "pic" => "020.png"), array("name" => "Spearow", "pic" => "021.png"), array("name" => "Fearow", "pic" => "022.png"), array("name" => "Ekans", "pic" => "023.png"), array("name" => "Arbok", "pic" => "024.png"), array("name" => "Pikachu", "pic" => "025.png"), array("name" => "Raichu", "pic" => "026.png"), array("name" => "Sandshrew", "pic" => "027.png"), array("name" => "Sandslash", "pic" => "028.png"), array("name" => "Nidoran - Male", "pic" => "029.png"), array("name" => "Nidorina", "pic" => "030.png"), array("name" => "Nidoqueen", "pic" => "031.png"), array("name" => "Nidoran - Female", "pic" => "032.png"), array("name" => "Nidorino", "pic" => "033.png"), array("name" => "Nidoking", "pic" => "034.png"), array("name" => "Clefairy", "pic" => "035.png"), array("name" => "Clefable", "pic" => "036.png"), array("name" => "Vulpix", "pic" => "037.png"), array("name" => "Ninetales", "pic" => "038.png"), array("name" => "Jigglypuff", "pic" => "039.png"), array("name" => "Wifflytuff", "pic" => "040.png"), array("name" => "Zubat", "pic" => "041.png"), array("name" => "Golbat", "pic" => "042.png"), array("name" => "Oddish", "pic" => "043.png"), array("name" => "Gloom", "pic" => "044.png"), array("name" => "Vileplume", "pic" => "045.png"), array("name" => "Paras", "pic" => "046.png"), array("name" => "Parasect", "pic" => "047.png"), array("name" => "Venonat", "pic" => "048.png"), array("name" => "Venomoth", "pic" => "049.png"), array("name" => "Diglett", "pic" => "050.png"), array("name" => "Dugtrio", "pic" => "051.png"), array("name" => "Meowth", "pic" => "052.png"));
// End - Database

/* Variables Descriptions
$playerName - Player Name
$playerEmail - PLayer Email
$numQues - Player selection number of questions to attempt
$numMC - Set number of multiple choices
$quesloop - Counter for number of questions
$ansChosen - Set the randomized correct answer position
$correct - Count number of correct answers
$db - Array multi-mixed (Data of Pokemon names and picture reference number)
*/

/* For REFERENCE ONLY - Original set of database in associative format only 
$db = array("Bulbasaur"=>"001.png", "Ivysaur"=>"002.png", "Venusaur"=>"003.png", "Charmander"=>"004.png", "Charmeleon"=>"005.png", "Charizard"=>"006.png", "Squirtle"=>"007.png", "Wartortle"=>"008.png", "Blastoise"=>"009.png", "Caterpie"=>"010.png", "Metapod"=>"011.png", "Butterfree"=>"012.png", "Weedle"=>"013.png", "Kakuna"=>"014.png", "Beedrill"=>"015.png", "Pidgey"=>"016.png", "Pidgeotto"=>"017.png", "Pidgeot"=>"018.png", "Rattata"=>"019.png", "Raticate"=>"020.png", "Spearow"=>"021.png", "Fearow"=>"022.png", "Ekans"=>"023.png", "Arbok"=>"024.png", "Pikachu"=>"025.png", "Raichu"=>"026.png", "Sandshrew"=>"027.png", "Sandslash"=>"028.png",);
*/