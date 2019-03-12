
<?php
$films = [
'le crane de crystal' => ['harrison Ford', 'Cate Blanchett', 'Karen Allen'],
'le temple maudit' => ['Harrison Ford', 'Sean Connery', 'Denholm Elliot'],
"l'arche perdue" => ['Harrison Ford', 'Karen Allen', 'Paul Freeman']
];

foreach ($films as $film =>$acteurs){
echo "Dans le film $film ,les principaux acteurs sont : ";
foreach ($acteurs as $nomActeur){
 echo "$nomActeur ";
	}
echo	"<br />";
}
?>
