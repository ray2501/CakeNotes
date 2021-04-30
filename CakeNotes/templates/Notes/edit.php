<?php

$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakeNotes</title>
    <?= $this->Html->css('pure-min.css') ?>
</head>
<body>
<h1>Edit Note - <?= $id ?></h1>
<form  class="pure-form" action="<?= $this->Url->build
         (["controller" => "Notes","action"=> "edit", $id]) ?>" method="post">
    <input name="id" value="<?= $id ?>" type="hidden" />
    <div>
        <label name="title">Title</label>
        <div>
            <input name="title" value="<?= $title ?>" />
        </div>
        <label name="body">Body</label>
        <div><textarea rows="5" cols="70" name="body"><?= $body ?></textarea></div>
    </div>
    <br>
    <div>
    <input type="hidden" name="_csrfToken" value="<?= $this->request->getAttribute('csrfToken'); ?>" />
    <button type="submit">Save</button>
    </div>
</form>
</body>
</html>

