<?php $this->layout('master', ['title' => $title]) ?>

<h1><?php echo $title ?> Page</h1>
<a href="/customers">Cadastro de Clientes</a>
<?php foreach ($data as $customer): ?>
    <p><?= $customer->id .' -- '. $customer->name .' -- '. $customer->email .' -- '.$customer->date;?></p>
    <a href="/customers-edit?id=<?= $customer->id ?>">Editar</a>
    <a href="/customers-del?id=<?= $customer->id ?>">Deletar</a>
    

<?php endforeach; ?>
