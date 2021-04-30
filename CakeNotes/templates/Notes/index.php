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
<body bgcolor="#ffffff">
<h1 align="center">CakeNotes</h1>
<br>
<div class="pure-g">
    <div class="pure-u-1-5"></div>
    <div class="pure-u-1-5"></div>
        <div class="pure-u-1-5"></div>
    <div class="pure-u-1-5">
    <button class="pure-button pure-button-primary"
    onclick="javascript:location.href='<?= $this->Url->build
         (["controller" => "Notes","action"=> "add"]) ?>'">New</button>
    </div>
    <div class="pure-u-1-5"></div>
</div>
<hr>
<table class="pure-table pure-table-bordered" width="99%">
    <thead>
        <tr>
            <th width="22%">Id</th>
            <th width="20%">Title</th>
            <th width="31%">Body</th>
            <th width="17%">Created</th>
            <th width="5%">Update</th>
            <th width="5%">Remove</th>
        </tr>
    </thead>

    <tbody>
        <?php
          foreach ($results as $row):
            echo "<tr>
                <td>$row->id</td>
                <td>$row->title</td>
                <td>$row->body</td>
                <td>$row->created</td>
                <td><a href = '".$this->Url->build
	      	    (["controller" => "Notes","action"=>"edit",$row->id])."'>Edit</a></td>
                <td><a href = '".$this->Url->build
                    (["controller" => "Notes","action"=> "delete",$row->id])."'>Delete</a></td>
                </td>
	    </tr>";
          endforeach;
        ?>
    </tbody>
</table>
</body>
</html>

