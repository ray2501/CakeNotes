#!/usr/bin/env php
<?php
    // Create a table notes

    $dsn = "pgsql:host=localhost;dbname=cakedb";
    $user = "cakeuser";
    $passwd = "secret";

    try {    
        $pdo = new PDO($dsn, $user, $passwd);
    } catch (PDOException $e){
	echo $e->getMessage();
	return;    
    }	
    
    $sql = "create table if not exists 
	    notes (id uuid DEFAULT md5(random()::text || clock_timestamp()::text)::uuid, 
            title varchar(255) not null, body text not null, created timestamp not null, 
            PRIMARY KEY (id))";
    
    $ret = $pdo->exec($sql);

?>
