<?php
if(isset($_SESSION['username'])) {
    $c = new Chat();
    $d = $c->createChat($_GET['q'], $_GET['a']);
    var_dump($d);
    die();
    echo'<meta http-equiv="refresh" content="0; url=index.php?s=chat&id='.$d.'" />';
    
}
else {
echo'<p class="error">Bitte logge dich ein.</p>';
}
?>
