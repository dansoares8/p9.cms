<ul>
    <?php foreach($menu as $menuitem): ?>
    <li><?php echo utf8_encode($menuitem['nome']); ?></li>
    <?php endforeach; ?>

</ul>