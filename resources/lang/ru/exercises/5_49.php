<?php

return [
    'title' => 'Регистровая машина',
    'description' =>
        "В качестве альтернативы циклу ввод-выполнение-печать вычислителя с явным управлением, спроектируйте регистровую машину, которая работала бы в цикле ввод-компиляция-выполнение-печать. " .
        "А именно, машина должна работать в цикле, при каждой итерации которого она считывает выражение, компилирует его, ассемблирует и исполняет получившийся код, и печатает результат. " .
        "В нашей имитируемой среде это легко устроить, поскольку мы можем заставить compile и assemble работать как “операции регистровой машины”.",
];
