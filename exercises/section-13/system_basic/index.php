
<?php
require "lib/data.php";
require "data/post.php";
require "data/product.php";
require "lib/template.php";
?>

<?php
get_header();
?>

<?php
$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$path = "pages/{$page}.php";

if(file_exists($path))
    require $path;
else
    get_404();

?>


<?php
get_footer();
?>