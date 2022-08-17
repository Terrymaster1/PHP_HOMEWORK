<pre>
<?php
$textstorage = [];
function add ($title,$text,&$textstorage)
{
    $array_keys = ['title' => $title, 'text' => $text];
    array_push($textstorage, $array_keys);
    return $textstorage;
}
add('первый заголовок', 'первый текст', $textstorage);
add('второй заголовок', 'второй текст', $textstorage);
var_dump($textstorage);
/////////
function edit (int $index,string $title, string $text,array &$textstorage)
{
    if (isset($textstorage[$index][$title])) {
        $textstorage[$index][$title] = $text;
        echo "Замена $title индекс $index прошла успешно" . PHP_EOL;
    } else {
        echo "Нет  заголовка $title индекс $index ";
    }
}
edit(0,"title", 'Замена заголовка прошла успешно', $textstorage);
edit(2,"title", 'Замена заголовка прошла успешно', $textstorage);
var_dump($textstorage);
////////
function remove ($nomber, &$textstorage)
{
    if (isset($textstorage[$nomber])) {
        unset($textstorage[$nomber]);
    } else {
        echo("С ключом $nomber текста нет". PHP_EOL);
    }
}
remove(0,$textstorage);
remove(5,$textstorage);
var_dump($textstorage);
?>
</pre>