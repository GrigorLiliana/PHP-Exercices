<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Root Exercices Folder</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php 
    echo "<h1>This is my parent exercices folder</h1>";
    echo "<p> Exercice 1:<p>";
    $fruit = [
        "Apple", 
        "Strawberry", 
        "Pineapple", 
        "Lemon"
    ];
    echo $fruit[1] . "<br>";
    echo "<p> Exercice 2:<p>";
    $stock = [
        "T-Shirts" => 20,
        "Caps" => 10,
        "Shoes" => 5
    ];
    echo $stock['Caps'];

    echo "<p> Exercice 3:<p>";
$stock['Caps'] += 5;
$stock['Shoes'] += 10;

echo $stock['Shoes'];

echo "<p> Exercice 4:<p>";
$contact = [
    "Ricardo" => [
        "tel" => "0677777777",
        "email" => "ricardo@gmail.com"
        ],
    "Michael" =>[ 
        "Tel" => 0606060606,
         "Email" => "mj@gmail.com"
        ],
        "Emmanuel" => [
            "Tel" => 0610101010, 
            "Email" => "manu@gmail.com"
        ] 
        ];
echo var_dump($contact);

echo "<p> Exercice 5:<p>";
$game = [
    "image" => "https://dumielauxepices.net/sites/default/files/mario-clipart-animation-676285-9175947.gif",
    "lastName" => "Super",
    "firstName" => " Mario",
    "caracteristics" => [
        "lives" => 5,
        "goal" => "catch the flag",
        "interests" => ["kill turtles", "eat cacti"] 
        ]
    ];

echo "<div class='firstdiv'><img src=" . $game['image'] . " alt=''></div>";
echo "<h3>" . $game["lastName"] . $game["firstName"] . "</h3>";
var_dump($game["caracteristics"]);
/*
- Part 1 :
	Based on the 'character' exercise, make sure that, if its characteristic "Attak" or "Defense" are greater than 9, an additional message is displayed:

	<div class="alert">
    	<strong>Congratulations !</strong> Your character is ready to fight.</strong>
	</div>
*/
if(strlen($game["caracteristics"]["lives"])>9 OR 
    strlen($game["caracteristics"]["goal"])>9) 
echo "<div class='alert'>
    <strong>Congratulations !</strong> 
    Your character is ready to fight.</strong> </div>";

else if(strlen($game["caracteristics"]["lives"])<5 OR 
        strlen($game["caracteristics"]["goal"])<5) 
echo "<div class='alert'> 
    <strong>Wait !</strong> 
    Your charachter is too weeeakk!</div>";
// the end of the php   
echo "<ul>";
foreach($game as $characteres => $values){

if (is_array($characteres)){
    foreach($characteres as $name => $val){
    echo "<li>" . $name . ": " . $val . "</li>";
    }
};
echo "<li>" . $characteres . ": " . $values . "</li>";
}
echo"</ul>";
    ?>
    
</body>
</html>