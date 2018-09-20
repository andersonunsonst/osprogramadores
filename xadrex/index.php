<?php

$board = [
    [4, 3, 2, 5, 6, 2, 3, 4],
    [1, 1, 1, 1, 1, 1, 1, 1],
    [0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0],
    [1, 1, 1, 1, 1, 1, 1, 1],
    [4, 3, 2, 5, 6, 2, 3, 4]
];

$pieces = [0 =>'Vazio', 1 =>'Peão', 2 => 'Bispo', 3 => 'Cavalo', 4 => 'Torre', 5 => 'Rainha', 6 =>'Rei'];
$out = [];

for($x=0; $x < count($board) ; $x++)
{
		for($y=0; $y < count($board[$x]); $y++)
		{
				$out[$pieces[$board[$x][$y]]][] = $pieces[$board[$x][$y]];


		}
}

// print 'Vazio: Possui '. count($out['Vazio']) . ' Peça(s) <br>';
print 'Peão: Possui '. count($out['Peão']) . ' Peça(s) <br>';
print 'Bispo: Possui '. count($out['Bispo']) . ' Peça(s) <br>';
print 'Cavalo: Possui '. count($out['Cavalo']) . ' Peça(s) <br>';
print 'Torre: Possui '. count($out['Torre']) . ' Peça(s) <br>';
print 'Rainha: Possui '. count($out['Rainha']) . ' Peça(s) <br>';
print 'Rei: Possui '. count($out['Rei']) . ' Peça(s) <br>';


?>