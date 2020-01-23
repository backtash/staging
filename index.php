<?php


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>
<?php 

function unique_names(array $array1, array $array2) : array
{
	$array3=array_merge($array1,$array2);
	$array3=array_unique($array3);
	return $array3;
}

$names = unique_names(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
echo "<br>";

echo "<h3>Test 1 Associate Array Group by Owner </h3> </br>"; 
function groupByOwners(array $files) : array
{
	$result=array();
	$unique=array_unique($files);
	$rev=array_flip($unique);
	foreach($rev as $person=>$subject)
	{
		$values=array($subject);
		$i=1;
		foreach($files as $sub=>$per)
		{
			if($per==$person && $sub!=$subject)
			{
				$values[$i]=$sub;
				$i++;
			}				
			
		}
		$result[$person]=$values;
	}
    return $result;
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy",
	"HTM.ph" => "Randy",
	"MT.ml"=>"John"
);
var_dump($files);
echo "<br>";
var_dump(groupByOwners($files));


echo "<h3>Test 2 Comparing String </h3> </br>";


function isPalindrome(string $word) : bool
{
    
	$rev=strrev($word);
	$result=strcasecmp($word,$rev);
	if($result==0)
		return true;
	else
		return false;
}   

echo isPalindrome('Deleveled');

echo "<h3>test: Class and Object </h3> </br>";
class TextInput
{
	public $res;
	public function add($text)
	{
		global $res;
		$res=$res.$text;
	}
	public function getValue()
	{
		global $res;
		return  $res;
	}
	function __destruct() {
			global $error;
			//echo "<p> Error: $error: not numeric values. </p>";
		  }
}

class NumericInput extends TextInput
{
	public $error; 
	public function add($text)
	{
		global $res;
		$num=(int)$text;
		if(is_numeric($text))
		$res=$res.$text;
		else 
		{
			global $error;
			$error=$text.' ' .$error;
			
		}
		
	}

}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();


echo "<br><h3>quadratic equation: </h3> <p>Implement the function getSynonyms, which accepts a word as a string and returns all synonyms for that word in JSON format. </p> ";


function findRoots($a, $b, $c)
{
    
	$sqr=sqrt(($b*$b)-(4*$a*$c));
	$root1=(((-1)*$b)-$sqr)/(2*$a);
	$root2=(((-1)*$b)+$sqr)/(2*$a);
	return [$root1,$root2];
}

print_r(findRoots(2, 10, 8));

echo "<br><h3>Thesaurus: </h3> <p>Implement the function getSynonyms, which accepts a word as a string and returns all synonyms for that word in JSON format </p>";
class Thesaurus
{
    private $thesaurus;

    function Thesaurus(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word) : string
    {
        $obj=$this->thesaurus;
		if(array_key_exists($word,$obj))
		{
			 $res=$obj[$word];
			 $res=array("word"=>$word, "synonyms"=>$res);
		}
		else
		{
			$res=array("word"=>$word, "synonyms"=>[]);
		}
		$res=json_encode($res);
		return $res;
    }
}

$thesaurus = new Thesaurus(
    [
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ]
);

echo $thesaurus->getSynonyms("big");
echo "<br>";
echo $thesaurus->getSynonyms("buyd");

echo "<br><h3>League Table: </h3> <p>The LeagueTable class tracks the score of each player in a league. After each game, the player records their score with the recordResult function </p>";
class LeagueTable
{
    public function __construct(array $players)
    {
        $this->standings = [];
        foreach($players as $index => $p) {
            $this->standings[$p] = [
                'index'        => $index,
                'games_played' => 0,
                'score'        => 0
            ];
        }
    }

    public function recordResult(string $player, int $score) : void
    {
        $this->standings[$player]['games_played']++;
        $this->standings[$player]['score'] += $score;
    }

    public function playerRank(int $rank) : string
    {
        $results=$this->standings;
		$res=$results;
		$rank=array();
		echo json_encode($results);
		echo "<br>";
			foreach($results as $key=>$data)
			{
				$i=0;
				foreach($res as $p=>$v)
				{
					if($p!==$key)
						{
							var_dump($p);
							

							
						}
				}
				
				//var_dump($data);
				//var_dump($key);
			}
		
		return 'Chris';
    }
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);
?>





</body>
</html>