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

//passo tramite GET, nome mail e età
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

//faccio verifiche richieste
if( strlen($name)>3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age))
  {
    echo('<p>Accesso riuscito</p>');
    } else {
        echo('<p>Accesso negato</p>');
        }
?>


<?php
/*
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

//creo un array vuoto
$array=[];

//con un ciclo while riempio array finchè non ha 15 numeri casuali
while(count($array) < 15){
    //creo numero casuale da 0 a 100
    $randomNumber = rand(0,100);
    //inserisco num casuale dentro array
    $array[] = $randomNumber; 
}
?>



<?php
/*
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/

//inserisco un testo

$testo='La Comedìa, o Commedia, conosciuta soprattutto come Divina Commedia,[1] è un poema allegorico-didascalico[2] di Dante Alighieri, scritto in terzine incatenate di endecasillabi (poi chiamate per antonomasia terzine dantesche) in lingua volgare fiorentina.[3]

Il titolo originale, con cui lo stesso autore designa il suo poema, fu Comedia (probabilmente pronunciata con accento tonico sulla i); e così è intitolata anche l editio princeps del 1472.  aggettivo «Divina» le fu attribuito dal Boccaccio nel Trattatello in laude di Dante, scritto fra il 1357 e il 1362 e stampato nel 1477. Ma è nella prestigiosa edizione giolitina, a cura di Ludovico Dolce e stampata da Gabriele Giolito de Ferrari nel 1555, che la Commedia di Dante viene per la prima volta intitolata come da allora fu sempre conosciuta, ovvero "La Divina Comedia".

Composta secondo i critici tra il 1304/07 e il 1321, anni del suo esilio in Lunigiana e Romagna,[4] la Commedia è il capolavoro di Dante ed è universalmente ritenuta una delle più grandi opere della letteratura di tutti i tempi,[5] nonché una delle più importanti testimonianze della civiltà medievale, tanto da essere conosciuta e studiata in tutto il mondo. Si narra, inoltre, di stranieri che imparano l italiano al solo scopo di leggerne il testo nella sua lingua originale.

Il poema è diviso in tre parti, chiamate «cantiche» (Inferno, Purgatorio e Paradiso), ognuna delle quali composta da 33 canti (tranne l Inferno, che contiene un ulteriore canto proemiale) formati da un numero variabile di versi, fra 115 e 160, strutturati in terzine. Il poeta narra di un viaggio immaginario, ovvero di un Itinerarium mentis in Deum,[6] attraverso i tre regni ultraterreni che lo condurrà fino alla visione della Trinità. La sua rappresentazione immaginaria e allegorica dell oltretomba cristiano è un culmine della visione medievale del mondo sviluppatasi nella Chiesa cattolica. È stato notato come tutte e tre le cantiche terminino con la parola «stelle» (Inferno: "E quindi uscimmo a riveder le stelle"; Purgatorio: "Puro e disposto a salir a le stelle"; Paradiso: "L amor che move il sole e l altre stelle").

L opera ebbe subito uno straordinario successo e contribuì in maniera determinante al processo di consolidamento del dialetto toscano come lingua italiana. Il testo, del quale non si possiede l autografo, fu infatti copiato sin dai primissimi anni della sua diffusione e fino all avvento della stampa in un ampio numero di manoscritti. Parallelamente si diffuse la pratica della chiosa e del commento al testo (si calcolano circa sessanta commenti e tra le 100 000 e le 200 000 pagine),[7] dando vita a una tradizione di letture e di studi danteschi mai interrotta: si parla così di "secolare commento". La vastità delle testimonianze manoscritte della Commedia ha comportato un oggettiva difficoltà nella definizione del testo: nella seconda metà del Novecento l edizione di riferimento è stata quella realizzata da Giorgio Petrocchi per la Società Dantesca Italiana.[8] Più di recente due diverse edizioni critiche sono state curate da Antonio Lanza[9] e Federico Sanguineti.[10] A partire dal 2018, una nuova edizione critica basata sul codice Laurenziano Pluteo XL 12, definito «il più antico codice di sicura fiorentinità», è stata curata da Federico Sanguineti ed Eloisia Mandola.[11]

La Commedia, pur proseguendo molti dei modi caratteristici della letteratura e dello stile medievali (ispirazione religiosa, scopo didascalico e morale, linguaggio e stile basati sulla percezione visiva e immediata delle cose), è profondamente innovativa poiché, come è stato rilevato in particolare negli studi di Erich Auerbach, tende a una rappresentazione ampia e drammatica della realtà, espressa anche con l uso di neologismi creati da Dante come «insusarsi», «inluiarsi» e «inleiarsi».[12]'






?>


<?php

/*
Snack Bonus
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.*/







?>
