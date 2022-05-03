<?php

/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

//phpinfo();


// creo array
$games =[
    [
        'casa'=>'squadraA',
        'ospite'=>'squadraB',
        'puntiCasa'=>'1',
        'puntiOspite'=>'3'
    ],
    [
        'casa'=>'squadraC',
        'ospite'=>'squadraD',
        'puntiCasa'=>'5',
        'puntiOspite'=>'2'
    ],
    [
        'casa'=>'squadraE',
        'ospite'=>'squadraF',
        'puntiCasa'=>'0',
        'puntiOspite'=>'3'
    ],
    [
        'casa'=>'squadraG',
        'ospite'=>'squadraH',
        'puntiCasa'=>'1',
        'puntiOspite'=>'1'
    ]
];

// creo ciclo for per stampare tutti i risultati con schema Olimpia Milano - Cantù | 55-60
for($i=0; $i<count($games); $i++){   
    echo('<p>');
    echo($games[$i]['casa']).' - '.$games[$i]['ospite'].' | '.$games[$i]['puntiCasa'].' - '.$games[$i]['puntiOspite'];
    echo('</p>');
  }



?>

<?php

/*
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/







?>


<?php

/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/







?>

<?php

/*
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/








?>


<?php

/*
Snack Bonus
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.*/







?>
