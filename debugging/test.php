<?php
echo "Exercise 1 starts here:";
        function new_exercise($x) {
            $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
            echo $block;
        }
        new_exercise(2);
        $week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
        $monday = $week[0];
        echo $monday;
        new_exercise(3);
$str = '"Debugged !" Also very fun';
        echo substr($str, 0, 12);

        new_exercise(4);
        foreach($week as &$day) {
            $day = substr($day, 0, strlen($day)-3);
        }
        print_r($week);
        new_exercise(5);

        $arr = [];
        for ($letter = 'a'; $letter != 'aa'; $letter++) {
          array_push($arr, $letter);
        }
        print_r($arr);

        
        new_exercise(6);

        $arr = [];
function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) { 
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params); 
}
function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }
    return $amount;
}
function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    
    $randname = ucfirst($heroes[rand(0,count($heroes)-1)][rand(0, 10)]);
    return $randname;
}
echo "Here is the name: " . combineNames();

?>