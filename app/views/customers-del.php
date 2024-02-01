<?php $this->layout('master', ['title' => 'Delete Cliete']) ?>

<main>

  <h2 >Excluir cliente</h2>

  <form method="post">

    <div >
      <p>Você deseja realmente excluir o cadastro <strong><?= $customer->name ?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="/">
        <button type="button" >Cancelar</button>
      </a>

      <button type="submit" name="delete">Excluir</button>
      
    </div>

  </form>

</main>