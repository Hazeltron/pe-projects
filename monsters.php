

<style>
	.monster-cards{
		display: flex;
		flex-direction: row;
		justify-content: center;
		flex-wrap: wrap;
		gap: 10px;
	}

	.monster-card{
		display: flex;

		flex-direction: column;
		justify-content: flex-start;
		align-items: center;
		background-color: black;
		padding: 40px;
		border: solid indianred 4px;
		border-radius: 20px;
		filter: drop-shadow(8px 10px 4px grey);

	}

	.monster-content{
		display: flex;
		flex-direction: column;
		justify-items: flex-start;
		align-items: center;

	}

	picture{
		display: block;
		max-width: 200px;
	}

	img{
		display: block;
		max-width: 100%;
		height: auto;
	}

	.title{
		font-size: 30px;
		color: white;
		font-family: helvetica, sans-serif;
		font-weight: bold;
		margin-top: 0;
		margin-bottom: 20px;

	}

	p{
		max-width: 75ch;
		font-family: helvetica, sans-serif;
		color: white;
		font-size: 16px;	
	}
	
	.button{
		background-color: indianred;
		min-width: 150px;
		
		border-radius: 30px;
		text-align: center;
		font-weight: bold;
	}

	.button a {
		text-decoration: none;
		color: white;
		padding: 15px;
	}

</style>


<?php
include "header.php";
include "nav.php";


$freddy =[
	"picture" => "<img src= 'https://peprojects.dev/images/portrait.jpg'",
	"id" => "freddy",
	"name" => "Freddy",
	"age" => 45,
	"favoriteFood" => "dreams", 
	"adopted" => true,
	
];

$dracula =[
	"picture" => "<img src= 'https://peprojects.dev/images/portrait.jpg'",
	"id" => "drak",
	"name" => "Dracula",
	"age" => 4000,
	"favoriteFood" => "blood", 
	"adopted" => false,
	
];

$jason =[
	"picture" => "<img src= 'https://peprojects.dev/images/portrait.jpg'",
	"id" => "jason",
	"name" => "Jason",
	"age" => 27,
	"favoriteFood" => "hard candy", 
	"adopted" => false,
	
];

$leather =[
	"picture" => "<img src= 'https://peprojects.dev/images/portrait.jpg'",
	"id" => "leather",
	"name" => "Leather Face",
	"age" => 30,
	"favoriteFood" => "soup", 
	"adopted" => true,
	
];

$chucky =[
	"picture" => "<img src= 'https://peprojects.dev/images/portrait.jpg'",
	"id" => "chucky",
	"name" => "Chucky",
	"age" => 100,
	"favoriteFood" => "plastic", 
	"adopted" => true,
	
];



$monsters = [$freddy, $dracula, $jason, $leather, $chucky,];

echo "<section class='monster-cards'>";

foreach ($monsters as $monster){
	echo "<div class='monster-card'>"; 

	echo "<div class='monster-content'>";

	echo "<h1 class='title'>" . $monster["name"] . "</h1>";

	echo "<picture>" . $monster["picture"] . "</picture>";

	echo "<p>" . "My favorite food is " . $monster["favoriteFood"] . " and I'm " . $monster["age"] . " years old." . "</p>";

	echo "</div>";

	echo "<div class='button'><p><a href='#'>Adopt!</a></p></div>";

	echo "</div>";
}

echo "</section>";





include "footer.php";

?>