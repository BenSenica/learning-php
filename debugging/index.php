<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
</head>

<body>
    <h1>test</h1>
        <?php
        // Below are several code blocks, read them, understand them and try to find whats wrong.
        // Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
        // Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
        // =============================================================================================================================
        // === Exercise 1 ===
        // Below we're defining a function, but it doesn't work when we run it.
        // Look at the error you get, read it and it should tell you the issue...,
        // sometimes, even your IDE can tell you what's wrong
        echo "Exercise 1 starts here:";
        function new_exercise($x) {
            $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
            echo $block;
        }
        new_exercise(2);
        // === Exercise 2 ===
        // Below we create a week array with all days of the week.
        // We then try to print the first day which is monday, execute the code and see what happens.
        $week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
        $monday = $week[0];
        echo $monday;
        new_exercise(3);
        // === Exercise 3 ===
        // This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
        $str = 'Debugged ! Also very fun';
        echo substr($str, 0, 10);
        new_exercise(4);
        // === Exercise 4 ===
        // Sometimes debugging code is just like looking up code and syntax...
        // The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
        // Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!
        foreach($week as &$day) {
            $day = substr($day, 0, strlen($day)-3);
        }
        print_r($week);
        new_exercise(5);
        // === Exercise 5 ===
        // The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
        // Fix the code so the for loop only pushes a-z in the array
        $arr = [];
        for ($letter = 'a'; $letter != 'aa'; $letter++) {
          array_push($arr, $letter);
        }
        print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array
        new_exercise(6);
        // === Final exercise ===
        // The fixed code should echo the following at the bottom:
        // Here is the name: $name - $name2
        // $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
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

    <!-- Optional JavaScript -->
    <script src=""
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
