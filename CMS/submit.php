<?php
//this page handles the submission of the form/content into the database.
//this connects to table.class.php so we could use 
//those classes in this file w/o having to rewrite them. this links files. 
include('../classes/table.class.php');
$np = new Post();
// setting title from our input field in the html (CMS)
$np->set_title($_POST['title']);
// setting body from our textarea field in the html (CMS)
$np->set_body($_POST['body']);
$np->save();
?>