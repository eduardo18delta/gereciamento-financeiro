<?php

require_once 'header.php'

?>

<div class="container">

<div class="row rowlogin">
<div class="col-md-6">


<form class="login" autocomplete="off" action="login/login.php" method="post">

<label for="username">Username ou Email:</label>	
<!--Input para o Username -->
<div class="form-group">
<input class="form-control" type="text" name="username" required="">	
</div>

<label for="password">Password:</label>	
<!--Input para o Password -->
<div class="form-group">
<input class="form-control" type="password" name="password" required="">	
</div>

<div class="form-group">
<button tabindex="1" class="btn btn-success">Acessar</button>	
<a tabindex="2" class="loginbtn btn btn-success" href="#">Cadastre-se</a>
</div>

</div>


<div class="col-md-6">

<div class="informacoes">
	<img src="img/grafic.png"><br>
	<h4>Sistema de Gerenciamento Financeiro</h4>
	<h6>Copyright Eduardo Henrique 2018	© </h6>
</div>	
</div>
</div>


</form>





<?php

require_once 'footer.php'

?>



