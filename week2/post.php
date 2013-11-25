<pre>    
<?php

var_dump($_POST);

print_r($_POST);

$people = (isset($_POST['params'])) ? $_POST['params'] : array();

if (isset($_POST['proceed']) && $_POST['proceed']) {
    foreach ($people as $person){
        echo $person.'<br />';
    }
} else {
    echo 'Not Proceeding.';
}
?>
</pre>

 