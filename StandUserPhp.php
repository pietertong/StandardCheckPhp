<?php
// +----------------------------------------------------------------------------------------------------------------
// | 1、代码文件必须以 <?php 或 <?= 标签开始，在PHP代码中统一使用<?php,在模板中统一使用<?=
// +----------------------------------------------------------------------------------------------------------------
// | 2、PHP代码文件必须以 不带BOM的 UTF-8 编码；
// +----------------------------------------------------------------------------------------------------------------
// | 3、遵循框架命名规则;
//      否则使用如下文件命名方式,文件大小最多不超过100M：
//      日志实例：runtime/log/201701/01/error.01.log
//      缓存实例：runtime/cache/201701/01/date.01.cache
// +----------------------------------------------------------------------------------------------------------------
// | 4、类的命名必须遵循 StudlyCaps 大写开头的驼峰命名规范；
// +----------------------------------------------------------------------------------------------------------------
// | 5、方法名称必须符合 camelCase 式的小写开头驼峰命名规范。
// +----------------------------------------------------------------------------------------------------------------
// | 6、类中的常量所有字母都必须大写，单词间用下划线分隔；
// +----------------------------------------------------------------------------------------------------------------
// | 7、方法名称必须符合 camelCase 式的小写开头驼峰命名规范；
// +----------------------------------------------------------------------------------------------------------------
//| 8、非空行后一定不能有多余的空格符
// +----------------------------------------------------------------------------------------------------------------
//方法及函数调用时，方法名或函数名与参数左括号之间一定不能有空格，
//参数右括号前也 一定不能有空格。每个参数前一定不能有空格，但其后必须有一个空格。
bar();
$foo->bar($arg1);
Foo::bar($arg2, $arg3);

/**
 * 参数可以分列成多行，此时包括第一个参数在内的每个参数都必须单独成行。
 */
$foo->bar(
    $longArgument,
    $longerArgument,
    $muchLongerArgument
);

/**
 * 标准的if结构如下代码所示，留意 括号、空格以及花括号的位置，
 * 注意else和elseif都与前面的结束花括号在同一行。
 * if语句块中，如果是空白的，那么不要有任何空格字符
 * 应该使用关键词elseif代替所有else if，以使得所有的控制关键字都像是单独的一个词。
 */
if ($expr1) {
    // if body
} elseif ($expr2) {
    // elseif body
} else {
    // else body; }
}

/**
 * 标准的switch结构如下代码所示，留意括号、空格以及花括号的位置。
 * case语句必须相对switch进行一次缩进，而break语句以及case内的其它语句都 必须 相对case进行一次缩进。
 * 如果存在非空的case直穿语句，主体里必须有类似// no break的注释。
 */
switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
    // no break
    case 2:
    case 3:
    case 4:
        echo 'Third case, return instead of break';
        return;
    default:
        echo 'Default case';
        break;
}

//while和do while一个规范的while语句应该如下所示，注意其 括号、空格以及花括号的位置。
while ($expr) {
    // structure body
}


//标准的do while语句如下所示，同样的，注意其 括号、空格以及花括号的位置。
do {
    // structure body;
} while ($expr);

//标准的for语句如下所示，注意其 括号、空格以及花括号的位置。
for ($i = 0; $i < 10; $i++) {
    // for body
}

//标准的foreach语句如下所示，注意其 括号、空格以及花括号的位置。
foreach ($iterable as $key => $value) {
    // foreach body
}

//标准的try catch语句如下所示，注意其 括号、空格以及花括号的位置。
try {
    // try body
} catch (FirstExceptionType $e) {
    // catch body
} catch (OtherExceptionType $e) {
    // catch body
}


/**
 * 闭包声明时，关键词function后以及关键词use的前后都必须要有一个空格。
 * 开始花括号必须写在声明的同一行，结束花括号必须紧跟主体结束的下一行。
 * 参数列表和变量列表的左括号后以及右括号前，必须不能有空格。
 * 参数和变量列表中，逗号前必须不能有空格，而逗号后必须要有空格。
 * 闭包中有默认值的参数必须放到列表的后面。
 * 标准的闭包声明语句如下所示，注意其 括号、逗号、空格以及花括号的位置。
 */
$closureWithArgs = function ($arg1, $arg2) {
    // body
};

$closureWithArgsAndVars = function ($arg1, $arg2) use ($var1, $var2) {
    // body
};


//参数列表以及变量列表可以分成多行，这样，包括第一个在内的每个参数或变量都必须单独成行，而列表的右括号与闭包的开始花括号必须放在同一行。
//以下几个例子，包含了参数和变量列表被分成多行的多情况。
$longArgs_noVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) {
    // body
};

$noArgs_longVars = function () use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};

$longArgs_longVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};

$longArgs_shortVars = function (
    $longArgument,
    $longerArgument,
    $muchLongerArgument
) use ($var1) {
    // body
};

$shortArgs_longVars = function ($arg) use (
    $longVar1,
    $longerVar2,
    $muchLongerVar3
) {
    // body
};



//注意，闭包被直接用作函数或方法调用的参数时，以上规则仍然适用。
$foo->bar(
    $arg1,
    function ($arg2) use ($var1) {
        // body
    },
    $arg3
);

