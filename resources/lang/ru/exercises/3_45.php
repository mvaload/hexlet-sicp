<?php

return [
    'title' => "Переопределение объекта-счёта",
    'description' => [
        '1' =>
        "Хьюго Дум полагает, что теперь, когда операции снятия денег со счета и занесения их на счет перестали сериализовываться автоматически, система банковских счетов стала неоправданно сложной и работать с ней правильным образом чересчур трудно. " .
        "Он предлагает сделать так, чтобы make-account-and-serializer экспортировал сериализатор (для использования в процедурах вроде serialized-exchange), и вдобавок сам использовал его для сериализации простых операций со счетом, как это делал make-account. " .
        "Он предлагает переопределить объект-счет так:",
        '2' =>
        "Затем снятия обрабатываются так же, как с оригинальным make-account:",
        '3' =>
        "Объясните, в чем Хьюго ошибается. В частности, рассмотрите, что происходит при вызове serialized-exchange.",
    ],
];
