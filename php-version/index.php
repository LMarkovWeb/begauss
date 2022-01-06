<?php

define("TASK_COUNT", 30);
define("TASK_COUNT_PLUS", 40);
define("TASK_COUNT_2PLUS", 50);
define("TASK_COUNT_MAXPLUS", 100);
$arOperation = ["+", "-", "*", "/"];

function printTask ($strWithTask, $result, $i)
{
    echo "<div>";
    echo "<span class='task' onclick='result($i); return false'>$strWithTask = </span>";
    echo "<span id='result_$i' class='result' style='visibility:hidden'>$result</span><br><hr>";
    echo "</div>";
}

?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Генератор примеров по математике - BeGauss</title>
    <meta name="description" content="Генератор арифметических примеров с интерактивными ответами">
    <meta name="keywords" content="Арифметика, устный счет, генератор примеров, генератор примеров по математике, генератор примеров по Гауссу, задачи для тренировки счета">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>
    <script type="text/javascript">
        VK.init({apiId: 7540446, onlyWidgets: true});
    </script>

    <style>
        .tasks {
            font-size: 150%;
        }
        .task {
            cursor: help;
        }
        .result {
            font-weight: bold;
        }
    </style>
    <script language="javascript" type="text/javascript">
        function result(nom) {
            BlockName='result_'+nom;
            var myBlock = document.getElementById(BlockName);
            myBlock.style.visibility='visible';
        }
    </script>

</head>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v7.0&appId=1119417721778912&autoLogAppEvents=1" nonce="Scyh8PI8"></script>

<div class="container">
    <div class="page-header">
        <h1>Генератор примеров по математике</h1>
    </div>
    <p class="lead">
        Генератор арифметических примеров с разным уровнем сложности и интерактивными ответами.
    </p>
    <p class="lead">
        Одним из математиков с феноменальной скоростью устного счета был знаменитый Карл Фридрих Гаусс (1777-1855).
    </p>
    <p class="lead">
        Если вы обычный человек, а не вундеркинд, то для развития навыка счета в уме понадобятся тренировки и практика,
        концентрация внимания и терпение. Сначала все может получаться медленно, но потом дело пойдет на лад,
        и вы сможете быстро считать в уме любые числа.
        Достичь успеха можно за 2 месяца регулярных тренировок.
    </p>

    <div id="accordion">

        <h2>Легкий</h2>
            <!-- Сложение -->
            <div class="card">
                <div class="card-header" id="headingOne33">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse"
                                data-target="#collapseOne33" aria-expanded="false" aria-controls="collapseOne33">
                            Сложение (XX + XX)
                        </button>
                    </h5>
                </div>

                <div id="collapseOne33" class="collapse" aria-labelledby="headingOne33" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            // ЛЕГКИЙ УРОВЕНЬ
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "easy" => [
                                        1 => rand(10,99),
                                        2 => rand(11,99),
                                    ]
                                ];
                                $a = $arrayNumbers["easy"][1];
                                $b = $arrayNumbers["easy"][2];

                                $strWithTask = "$a + $b";
                                $result = eval("return ".$strWithTask.";");

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Деление -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Деление (XX / X)
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            // ЛЕГКИЙ УРОВЕНЬ
                            for ($i = 0; $i < TASK_COUNT_MAXPLUS; $i++)
                            {
                                $arrayNumbers = [
                                    "easy" => [
                                        1 => rand(21,199),
                                        2 => rand(2,9),
                                    ]
                                ];
                                $a = $arrayNumbers["easy"][1];
                                $b = $arrayNumbers["easy"][2];

                                $keyOperation = array_rand($arOperation);

                                $strWithTask = "$a / $b";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Вычитание -->
            <div class="card">
                <div class="card-header" id="headingOne2">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse"
                                data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                            Вычитание (XX(X) - XX)
                        </button>
                    </h5>
                </div>

                <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            // ЛЕГКИЙ УРОВЕНЬ
                            for ($i = 0; $i < TASK_COUNT_MAXPLUS; $i++)
                            {
                                $arrayNumbers = [
                                    "easy" => [
                                        1 => rand(21,129),
                                        2 => rand(6,99),
                                    ]
                                ];
                                $a = $arrayNumbers["easy"][1];
                                $b = $arrayNumbers["easy"][2];

                                $keyOperation = array_rand($arOperation);

                                $strWithTask = "$a - $b";
                                $result = eval("return ".$strWithTask.";");

                                if ($result < 0)
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Все операции -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Все операции
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            // ЛЕГКИЙ УРОВЕНЬ
                            for ($i = 0; $i < TASK_COUNT_2PLUS; $i++)
                            {
                                $arrayNumbers = [
                                    "easy" => [
                                        1 => rand(11,99),
                                        2 => rand(2,9),
                                    ]
                                ];
                                $a = $arrayNumbers["easy"][1];
                                $b = $arrayNumbers["easy"][2];

                                $keyOperation = array_rand($arOperation);

                                $strWithTask = "$a $arOperation[$keyOperation] $b";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


        <h2>Средний</h2>
            <!-- Сложение (трехзначные) -->
            <div class="card">
                <div class="card-header" id="heading4">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Сложение (XXX + XXX)
                        </button>
                    </h5>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(100,999),
                                        2 => rand(100,999)
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a + $b";
                                $result = eval("return ".$strWithTask.";");

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Вычитание (трехзначные) -->
            <div class="card">
                <div class="card-header" id="heading41">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                            Вычитание (XXX - XXX)
                        </button>
                    </h5>
                </div>
                <div id="collapse41" class="collapse" aria-labelledby="heading41" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(700,999),
                                        2 => rand(100,699)
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a - $b";
                                $result = eval("return ".$strWithTask.";");

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Умножение (ХХ * Х) -->
            <div class="card">
                <div class="card-header" id="heading49">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                            Умножение (ХХ * Х)
                        </button>
                    </h5>
                </div>
                <div id="collapse49" class="collapse" aria-labelledby="heading49" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT_2PLUS; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(11,99),
                                        2 => rand(2,9)
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a * $b";
                                $result = eval("return ".$strWithTask.";");

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Все операции -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Все операции
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "medium" => [
                                        1 => rand(51,399),
                                        2 => rand(2,9),
                                        3 => rand(11,99),
                                    ]
                                ];

                                $a = $arrayNumbers["medium"][1];
                                $b = $arrayNumbers["medium"][2];
                                $c = $arrayNumbers["medium"][3];

                                $keyOperation = array_rand($arOperation);

                                $strWithTask = "$a $arOperation[$keyOperation] $b + $c";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конвертация $ -> Р. -->
            <div class="card">
                <div class="card-header" id="headingThree1">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                            Конвертация: $ -> Р.
                        </button>
                    </h5>
                </div>
                <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordion">
                    <div class="card-body">
                        <div class="lead">$ = 65 р. <br><br>    </div>
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "medium" => [
                                        1 => rand(3,100),
                                    ]
                                ];

                                $a = $arrayNumbers["medium"][1];

                                $strWithTask = $a;
                                $result = eval("return ".$strWithTask.";");

                                // Печать задания
                                printTask($strWithTask."$", $result*65, rand(1000,10000000));
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Методика от 100 по 7 -->
            <div class="card">
                <div class="card-header" id="headingThree14">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree14" aria-expanded="false" aria-controls="collapseThree14">
                            Методика от 100 по 7
                        </button>
                    </h5>
                </div>
                <div id="collapseThree14" class="collapse" aria-labelledby="headingThree14" data-parent="#accordion">
                    <div class="card-body">
                        В разработке...<br><br>
                        <small>
                        Методика от 100 по 7 — экспериментальный прием популярный в
                        пато- и и нейропсихологической диагностике ВПФ,
                        а также определения сохранности счётных операций,
                        устойчивости внимания, и степени подвижности интеллектуальных процессов.
                        </small>
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "medium" => [
                                        1 => rand(3,100),
                                    ]
                                ];

                                $a = $arrayNumbers["medium"][1];

                                $strWithTask = $a;
                                $result = eval("return ".$strWithTask.";");

                                // Печать задания
                                //printTask($strWithTask."$", $result*65, rand(1000,10000000));
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        <h2>Сложный</h2>
            <!-- Сложение (4 слагаемых) -->
            <div class="card">
                <div class="card-header" id="heading48">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                            Сложение (ХХХ + ХХХ + ХХХ + ХХХ)
                        </button>
                    </h5>
                </div>
                <div id="collapse48" class="collapse" aria-labelledby="heading48" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(101,999),
                                        2 => rand(101,999),
                                        3 => rand(101,999),
                                        4 => rand(101,999),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];
                                $c = $arrayNumbers["veryHard"][3];
                                $d = $arrayNumbers["veryHard"][4];

                                $strWithTask = "$a + $b + $c + $d";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Сложение больших чисел -->
            <div class="card">
                <div class="card-header" id="heading44">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                            Сложение (ХХХХХ + ХХХХХ)
                        </button>
                    </h5>
                </div>
                <div id="collapse44" class="collapse" aria-labelledby="heading44" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(10000,99999),
                                        2 => rand(10000,99999)
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a + $b";
                                $result = eval("return ".$strWithTask.";");

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Умножение двухзначных чисел -->
            <div class="card">
                <div class="card-header" id="heading7">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            Умножение (ХХ * ХХ)
                        </button>
                    </h5>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(11,99),
                                        2 => rand(11,99),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a * $b";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Процент от числа -->
            <div class="card">
                <div class="card-header" id="heading8">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                            Процент (%) от числа
                        </button>
                    </h5>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(1,99),
                                        2 => rand(200,1000),
                                    ]
                                ];

                                $inputProc = array(5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,82,90,95);
                                $rand_keys = array_rand($inputProc);

                                $a = $inputProc[$rand_keys];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$b * $a / 100";
                                $result = eval("return ".$strWithTask.";");

                                // задачи на процент
                                $strWithTask = "$a% от $b";

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- На сколько процентов одно число больше другого -->
            <div class="card">
                <div class="card-header" id="heading88">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse88" aria-expanded="false" aria-controls="collapse88">
                            На сколько (%) ...
                        </button>
                    </h5>
                </div>
                <div id="collapse88" class="collapse" aria-labelledby="heading88" data-parent="#accordion">
                    <div class="card-body">
                        <p class="lead">
                            <u>(A - B) / B * 100%</u>
                        </p>
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(110,200),
                                        2 => rand(10,100),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "($a - $b) / $b * 100";
                                $result = eval("return ".$strWithTask.";");

                                // задачи на процент
                                $strWithTask = "$a > $b";

                                // Печать задания
                                printTask($strWithTask, $result."%", rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


        <h2>Супер сложный</h2>
            <!-- Сложение -->
            <div class="card">
                <div class="card-header" id="heading6">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            Сложение (ХХХХ + ... + ХХХХ)
                        </button>
                    </h5>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(1001,4999),
                                        2 => rand(1001,4999),
                                        3 => rand(1001,4999),
                                        4 => rand(1001,4999),
                                        5 => rand(1001,4999),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];
                                $c = $arrayNumbers["veryHard"][3];
                                $d = $arrayNumbers["veryHard"][4];
                                $e = $arrayNumbers["veryHard"][5];

                                $strWithTask = "$a + $b + $c + $d + $e";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Умножение трехзначных чисел -->
            <div class="card">
                <div class="card-header" id="heading74">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse74" aria-expanded="false" aria-controls="collapse74">
                            Умножение (ХХХ * ХХ)
                        </button>
                    </h5>
                </div>
                <div id="collapse74" class="collapse" aria-labelledby="heading74" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(101,999),
                                        2 => rand(11,99),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a * $b";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Умножение трехзначных чисел -->
            <div class="card">
                <div class="card-header" id="heading745">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse745" aria-expanded="false" aria-controls="collapse745">
                            Умножение (ХХХ * ХХХ)
                        </button>
                    </h5>
                </div>
                <div id="collapse745" class="collapse" aria-labelledby="heading745" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(101,999),
                                        2 => rand(101,999),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a * $b";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Деление -->
            <div class="card">
                <div class="card-header" id="heading7451">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse7451" aria-expanded="false" aria-controls="collapse7451">
                            Деление (ХХ * ХХ)
                        </button>
                    </h5>
                </div>
                <div id="collapse7451" class="collapse" aria-labelledby="heading7451" data-parent="#accordion">
                    <div class="card-body">
                        В разработке
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(101,999),
                                        2 => rand(101,999),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];

                                $strWithTask = "$a * $b";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                //printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Все операции -->
            <div class="card">
                <div class="card-header" id="heading5">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            Все операции
                        </button>
                    </h5>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                    <div class="card-body">
                        <div class="tasks">
                            <?php
                            for ($i = 0; $i < TASK_COUNT; $i++)
                            {
                                $arrayNumbers = [
                                    "veryHard" => [
                                        1 => rand(101,9999),
                                        2 => rand(2,9),
                                        3 => rand(999,9999),
                                    ]
                                ];

                                $a = $arrayNumbers["veryHard"][1];
                                $b = $arrayNumbers["veryHard"][2];
                                $c = $arrayNumbers["veryHard"][3];

                                $keyOperation = array_rand($arOperation);

                                $strWithTask = "$a $arOperation[$keyOperation] $b + $c";
                                $result = eval("return ".$strWithTask.";");

                                if (!is_int($result))
                                    continue;

                                // Печать задания
                                printTask($strWithTask, $result, rand(1000,10000000));

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <br>
    <hr><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4>Поделиться:</h4>
                <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="https://yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,whatsapp"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <h4>Отзывы и предложения:</h4>
                <hr>
            </div>
            <div class="col-sm-6">
                <div id="vk_comments"></div>
                <script type="text/javascript">
                    VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
                </script>
            </div>
            <div class="col-sm-6">
                <div class="fb-comments" data-href="http://begauss.ru" data-numposts="10" data-width=""></div>
            </div>
            <div class="col-sm-12">
                <a href="https://lmarkovweb.github.io/" target="_blank">lmarkovweb.github.io</a>
            </div>
        </div>
    </div>

    <br>
    <hr><br>
</div>

</body>

<script>
    $('#myCollapsible').collapse({
        toggle: false
    })
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(65653114, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/65653114" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</html>