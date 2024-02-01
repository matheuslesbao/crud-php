<?php $this->layout('master', ['title' => 'Edite']) ?>

<h1>Edite seus dados</h1>

<form action="" method="post">
    <input type="text" placeholder="<?= $customer->name ?>" name="name">
    <input type="submit" placeholder="CONFIRMAR">
</form>
<br>
<a href="/">Voltar</a>