<?
//$class можно назвать как угодно, приходит путь
function __autoload($class){

    if (file_exists(__DIR__.'/controllers/' . $class . '.php')){
        require __DIR__.'/controllers/' . $class . '.php';
    }elseif(__DIR__.'/models/' . $class . '.php'){
        require __DIR__.'/models/' . $class . '.php';
    }

}