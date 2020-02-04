<?php

use yii\web\View;

$this->registerJsFile('scripts/jquery.js', ['position' => View::POS_BEGIN]);
$this->registerJsFile('scripts/script.js', ['position' => View::POS_BEGIN]);

?>

<form action="">
    <p>Ввод ссылки без http и www, начиная с имени домена</p>
    <label for="search" class="form_label">Ваша ссылка</label>
    <input type="text" class="search" id="search">
    <input type="submit" value="Отправить" class="submit" onClick="clickSubmit();return false">
    <a href="" class="link"></a>
</form>



