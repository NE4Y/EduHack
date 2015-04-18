<?php



if(isset($_POST['login'])) {
    $log = new Login($_POST['id'], $_POST['pw']);
    
    if($log->verifyLogin()) {
        if($log->doLogin()) {
            echo'<p class="success">Erfolgreich eingeloggt.</p>';            
        }
        else {
            Error::showError();
        }
    }
    else {
        Error::showError();
    }
}
?>

<div class="login">
  <h1>Login to Web App</h1>
  <form method="post" action="index.html">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">@</span>
        <input name="id" type="text" class="form-control" placeholder="Username or Email" aria-describedby="basic-addon1">
    </div>

    <div class="input-group">
        <span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"></span>
        <input name="pw" type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
    </div>
    
    <input class="btn btn-primary" type="submit" value="Login" />
  </form>
</div>
