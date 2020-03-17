Оператор присваивания

= 
==
$имя_переменной = значение;
язык с
if (a = b) { ... }

вместо
язык php
if (a == b) { ... }

$a = 0; $b = 1;
if ($a = $b) echo "a и b одинаковые";
else echo "a и b различны";



Символические ссылки
$right = "зеленая";
$wrong = "синяя";
$color = "right";
echo $$color;
// выводит значение переменной $right ("зеленая")
$$color = "несиняя"; // присваивает переменной $right новое значение





Некоторые условные обозначения

<return_type> FuncName(<type1> $param1 [,<type1> $param2])

# string

# int , integer , long

# double , float , number

# boolean , bool

false


# array

ключ => значение

list

object
 
# null

NULL

# void
false
 
# mixed

gettype()
settype()

# resource
 функция fopen() в



Константы
// Например, определена константа PI, равная 3.1416...
$a = 2.34 * sin(3 * PI / 8) + 5; // использование константы
echo "Это число PI";
// выведет на экран "Это число PI"
echo "Это число ".PI;
// выведет "Это число 3.1416..."




Предопределенные константы


PHP_INT_SIZE 
PHP_INT_MAX

# __FILE__

# __LINE__


# __FUNCTION__


# __CLASS__


# PHP_VERSION

# PHP_OS

# PHP_EOL
\n для Linux, 
 
\r\n для Windows и 

\n\r для Mac OS X


# true или TRUE

# false или FALSE

# null или NULL




Проверка существования константы


bool defined(string $name)
true





Константы с динамическими именами


constant() 

mixed constant(string $name)

mt_rand()


Отладочные функции

string print_r(mixed $expression, bool $return = false)


$a = array('a'=>'radish', 'b'=>'banana', 'c'=>array('x', 'y', 'z'));
echo "<pre>"; print_r ($a); echo "</pre>";

Array
(
    [a] => radish
    [b] => banana
    [c] => Array
        (
            [0] => x
            [1] => y
            [2] => z
        )

)



string var_dump(mixed $expression, bool $return = false)

$a = array(1, array ("a", "b", "c"));
echo "<pre>"; var_dump($a); echo "</pre>";




string var_export(mixed $expression, bool $return = false)
Data::Dumder

private














































# callback


