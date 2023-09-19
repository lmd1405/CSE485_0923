<?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border:1px solid black">
            <?php
                for($i=0;$i<count($arrs);$i++){?>
                    <tr>
                       <th style="border:1px solid black ">
                       <?php
                            echo $arrs[$i];
                        ?>
                       </th>
                    </tr>
            <?php } ?>
    </table>
</body>
</html>