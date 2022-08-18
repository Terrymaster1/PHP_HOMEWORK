<pre>
<?php
$searchRoot = '../homework_function';
$searchName = 'test.txt';
$searchResult = [];
function getFiles($searchRoot, $searchName, &$searchResult) {
    $files = array_diff(scandir($searchRoot), ['..', '.']); // оставляем все кроме этих папок . ..
    foreach ($files as $file) {
        $dir = $searchRoot . '/' . $file;
        if (is_dir($dir)) { // проверка папка ли это
            $searchResult =  getFiles($dir, $searchName, $searchResult); //повтор рекурсии
        } else {
            if ($file == $searchName && filesize($dir) > 0) { //если не папка, проверка на файл, если да добавляем
                $searchResult[] = $dir;                       //при условии что размер больше 0
            }
        }
    }
    return $searchResult;
}
var_dump(getFiles($searchRoot, $searchName, $searchResult));
?>
</pre>
