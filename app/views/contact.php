
<?php $this->layout('master', ['title' => 'Contact']) ?>

<h1>Contact Page</h1>

<form action="/contact" method="post">
    <input type="text"     name="subject">
    <input type="email"    name="email">
    <input type="submit" placeholder="SUBMIT">
</form>