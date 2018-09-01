<?php

require_once 'header.php'

?>

<div class="container">

<div class="row">
<div class="col-md-6">

<!--Input para o Username -->
<form class="login" autocomplete="off">
<div class="form-group">
<input class="form-control" type="text" name="username" required="">	
</div>

<!--Input para o Password -->
<div class="form-group">
<input class="form-control" type="password" name="password" required="">	
</div>

<div class="form-group">
<button class="btn btn-success">Acessar</button>	
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
</div>


</form>


<?php

require_once 'footer.php'

?>



