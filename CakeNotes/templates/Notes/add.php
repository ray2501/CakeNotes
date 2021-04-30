<?php

$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new note</title>
    <?= $this->Html->css('pure-min.css') ?>
</head>
<body>
<h1>Add a new note</h1>
<p>
    Enter Title and Body.
</p>
<form class="pure-form" action="<?= $this->Url->build
            (["controller" => "Notes","action"=> "add"]) ?>" method="POST">
    <label>Title</label>
    <div><input name="title" /></div>
    <label>Body</label>
    <div><textarea rows="5" cols="70" name="body"></textarea></div>
    <br>
    <input type="hidden" name="_csrfToken" value="<?= $this->request->getAttribute('csrfToken'); ?>" />
    <input type="submit" value="Submit" />
</form>
</body>
</html>

