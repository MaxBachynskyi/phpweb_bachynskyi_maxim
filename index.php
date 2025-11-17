<?
include('subjects.php');
$subjects = new Subjects;
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PR4</title>
    </head>
    <body>
        <div class="container">
            <?
                $subjects->show();
                $subjects->changeArray('Фізкультура','Історія');
                $subjects->show();
                $subjects->show_unique();
                $subjects->changeArray2('Історія', 'Фізкультура', 2);
                $subjects->show();
                $subjects->sort();
                $subjects->show();
                $subjects->expansion();
                $subjects->show_as_table();
                $subjects->show_splitted_array();
                echo $subjects->students;
                echo "<br>";
                $arr = $subjects->exploading($subjects->students);
                print_r($arr);
                echo "<br>";
                print($subjects->imploading($arr));
            ?>
            <br>
        </div>
    </body>
</html>