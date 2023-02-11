<?php

// Te 2 miało tylko wyszukiwać
$content1 = "abc33 TASK-152 31rer";
$content2 = "abc33 31rer task-15";
//TASK-152 i task-15
$content3 = "abc33 TAS-142 31rer";

$content4 = "abc33 TASK+162 31rer";

$content5 = "abc33 TASK 152 31rer";

$content6 = "abc33 TASK152 31rer";

preg_match('/(TASK|task)(-)*([0-9]{1,3})/', $content1,$c);

print_r($c);
preg_match('/(TASK|task)(-)*([0-9]{1,3})/', $content2,$c);

print_r($c);
preg_match('/(TASK|task)(-)*([0-9]{1,3})/', $content3,$c);

print_r($c);
preg_match('/(TASK|task)(-)*([0-9]{1,3})/', $content4,$c);

print_r($c);
preg_match('/(TASK|task)(-)*([0-9]{1,3})/', $content5,$c);

print_r($c);
preg_match('/(TASK|task)(-)*([0-9]{1,3})/', $content6,$c);

print_r($c);

//toodo ćw ma wyszukać TASK-152 i TASK152

//Tutorial//

$tutContent = "abcdabcdabcd";

preg_match('/abc/', $tutContent,$c);
print_r("Wszystkie pasujące bo to tylko string ");
print_r($c);

$tutContent2 = "abcdabcdabcd";

preg_match('/^abc/', $tutContent2,$c);
print_r("TU wyciągnie tylko początek jeśli taki będzie w stringu ");
print_r($c);

$tutContent3 = "abcdabcdabcd";

preg_match('/abc$/', $tutContent3,$c);
print_r("TU wyciągnie tylko koniec jeśli taki będzie w stringu");
print_r($c);

$tutContent4 = "abcdabcdabcd";

preg_match('/abcd$/', $tutContent4,$c);
print_r("TU wyciągnie tylko koniec jeśli taki będzie w stringu");
print_r($c);

$tutContent5 = "abcd";

preg_match('/^abcd$/', $tutContent5,$c);
print_r("TU sprawdza całe słowo i musi być identyczne ");
print_r($c);

$tutContent6 = "Katol";

preg_match('/Ka.ol/', $tutContent6,$c);
print_r("TU sprawdza czy gdzieś jest taka nazwa a . oznacza dowolny inny znak");
print_r($c);

$tutContent7 = "Karol";

preg_match('/Ka.ol/', $tutContent7,$c);
print_r("TU sprawdza czy gdzieś jest taka nazwa a . oznacza dowolny inny znak ");
print_r($c);

$tutContent8 = "ochKarol";

preg_match('/Ka.ol/', $tutContent8,$c);
print_r("TU sprawdza czy gdzieś jest taka nazwa a . oznacza dowolny inny znak ");
print_r($c);

$tutContent9 = "Kacol";

preg_match('/^Ka.ol/', $tutContent9,$c);
print_r("TU sprawdza czy na początku jest taka nazwa a . oznacza dowolny inny znak ");
print_r($c);

$tutContent10 = "Kura";

preg_match('/Kar*ol/', $tutContent10,$c);
print_r("TU gwiadka oznacza 0 lub wile ");
print_r($c);

$tutContent11 = "Kaaarol";

preg_match('/^Ka+rol/', $tutContent11,$c);
print_r("TU początek to Ka i a może być 1 lub wiele a po tym ma być rol ");
print_r($c);

$tutContent12 = "xKrol";

preg_match('/Ka?rol$/', $tutContent12,$c);
print_r("TU Ma się kończyć na rol K ma być w tym słowie przed rol i a może być 0 lub 1 ");
print_r($c);

$tutContent13 = "KaKarol";

preg_match('/^(Ka)+rol$/', $tutContent13,$c);
print_r("TU ma się zaczynać od Ka w ilości 1 lub wiele i po tym ma być rol którym musi się kończyć ");
print_r($c);

$tutContent14 = "KaKal";

preg_match('/^(Ka)+(ro)?l$/', $tutContent14,$c);
print_r("TU Zaczyna się na Ka i też w dowolnej ilości i po tym może być ro 0 lub 1 a po tym na koniec musi się kończyć na l");
print_r($c);

$tutContent15 = "Karolrol";

preg_match('/^[A-Z]+a?(rol)*$/', $tutContent15,$c);
print_r("TU Zaczyna się na dowolną wielką literę i musi być 1 lub wile, po niej jest a i może być 0 lub wile, po tym ma się kończyć na rol w ilości 0 lub wile");
print_r($c);

$tutContent16 = "Karrrol";

preg_match('/^Kar{3}ol$/', $tutContent16,$c);
print_r("TU zaczyna się na Kar gdzie ma być 3 r, i kończyć na ol");
print_r($c);

$tutContent17 = "AhRobert";

preg_match('/^Ah(Karol|Robert)$/', $tutContent17,$c);
print_r("TU zaczyna się na Ah i po nim ma być Karol lub Robert");
print_r($c);

$tutContent18 = "KKarol";

preg_match('/^K{1,2}arol$/', $tutContent18,$c);
print_r("TU Zaczyna się na K w ilości 1 lub 2, po tym kończyć się na arol");
print_r($c);

// ([a-z|A-Z|0-9]{4,20}) <- login elmailu 
// ([a-z|A-Z|0-9]{2,10}) <- serwer
// (pl|gr|com) <- domena
// //. <-wydzielenie kropki jako znaku
$tutContentEmail = "mosinskidamian11@gmail.com";

preg_match('/^([a-z|A-Z|0-9]{4,20})@([a-z|A-Z|0-9]{2,10})\\.(pl|gr|com)$/', $tutContentEmail,$c);
print_r("TU zaczyna się z dużej lub małej oraz liczb w ilości od 4 do 20, Następnie jest małpa, po niej jest to samo co na początku ale w przedziale od 2 do 10, po tym są dwa backslashe aby wydzielić kropkę jako znak a nie operator, i na koniec jeszcze ify z końcówką oraz to że ma się kończyć na wybrany z nich");
print_r($c);