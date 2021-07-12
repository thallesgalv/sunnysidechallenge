<?php includeWithVariables('components/c-header.php', array(
    'title' => 'Sunnyside',
    'description' => 'Sunnyside is a Frontend Mentor Challenge. Develop by Thalles Galvão.',
    'pageName' => 'p-home'
));
?>
<main>

  <?php include('components/c-hero.php')?>
  <?php include('components/c-content.php')?>
  <?php include('components/c-testimonials.php')?>
  <?php include('components/c-gallery.php')?>
</main>
<?php include 'components/c-footer.php'; ?>

<?php
    function includeWithVariables($filePath, $variables = array() , $print = true) {
        $output = NULL;
        if (file_exists($filePath)) {
            extract($variables);
            ob_start();
            include $filePath;
            $output = ob_get_clean();
        }
        if ($print) {
            print $output;
        }
        return $output;
    }
?>