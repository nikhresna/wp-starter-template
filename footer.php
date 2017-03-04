<?php ob_start() ?>
  <?php wp_footer() ?>
</body>

<?php 
$content = ob_get_clean();
echo $content;

