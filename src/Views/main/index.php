<p>Главная страница</p>
<?php  foreach ($products as $product): ?>

<p> <?= $product['title']?> </p>
<p> <?= $product['text']?> </p>
<hr>

<?php endforeach; ?>