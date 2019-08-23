<?php  
session_start(); 
//create the deck
$dec = ['A' => '11',
'2' => '2',
'3' => '3',
'4' => '4',
'5' => '5',
'6' => '6',
'7' => '7',
'8' => '8',
'9' => '9',
'10' => '10',
'K' => '10',
'Q' => '10',
'J' => '10'];

//create an empty array to fill the hand
$hand = [];

//generate 2 random cards from the deck
$random_key = array_rand($dec, 2);
$card1 = $_SESSION['random1'];
$card2 = $_SESSION['random2'];



//declare "vaste" value
if(!isset($_SESSION['random1'])){
    $_SESSION['random1'] = $dec[$random_key[1]];
    }

if(!isset($_SESSION['random2'])){
    $_SESSION['random2'] = $dec[$random_key[0]];
     }
     // "deal" the cards
     echo $card1 . " " . $card2;
     
     //create a function that deals 1 card when called
     function dealCards(){
        $deltCard = array_rand($GLOBALS[dec]);
        array_push($hand, dealCards());

    }
    
    print_r($hand);

// if player pushes the hit button execute the dealCard function and show the new card
switch ($_GET['hitButton']) {
    case "Hit me!":
    dealCards();
    
    foreach($hand as $value){
        echo " " . $value . " ";
        print_r($newHand);
    }
       
  
        break;
 }
switch ($_GET['standButton']) {
    case "Stand":
    unset($_SESSION['random1']);//reset 
    unset($_SESSION['random2']);//reset
    unset($hand);
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
}



 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack - Game</title>
    
</head>
<body>

<form method="get">
        <label for="submit">What would you like to do?</label> <br>
        <input type="submit" name="hitButton" value="Hit me!">
        <input type="submit" name="standButton" value="Stand">
        <input type="submit" name="foldButton" value="Fold">
    </form>



</body>
</html>