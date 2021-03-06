<?php

return [
    'title' => "Сумма зарплат всех программистов",
    'description' => [
        '1' =>
        "Бен работал над обобщением системы запросов так, чтобы можно было собирать статистику о компании. Например, чтобы найти сумму зарплат всех программистов, можно было бы сказать",
        '2' =>
        "В общем случае новая система Бена допускает запросы вида",
        '3' =>
        "где в виде accumulation-function могут выступать sum (сумма), average (среднее) или maximum (максимум). Бен думает, что реализовать это расширение будет проще простого. " .
        "Он просто скормит образец-запрос функции qeval и получит поток кадров. Затем он пропустит поток через функцию-отображение, которая из каждого кадра извлечет значение указанной переменной, и получившийся поток значений отдаст функции-накопителю. " .
        "Когда Бен заканчивает свою реализацию и собирается ее опробовать, мимо проходит Пабло, все еще смущенный результатом запроса из упражнения ",
        '4' =>
        ". Когда Пабло показывает Бену полученный им от системы ответ, Бен хватается за голову: «Моя простая схема накопления не будет работать!»",
        '5' =>
        "Что понял Бен? Опишите, как он мог бы исправить ситуацию.",
    ],
];
