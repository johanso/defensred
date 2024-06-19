<?php
/**
* Template Name: Product Comparison Page
*
*/
?>

<?php get_header(); ?>
  <div class="main-container page full">
    <h1>Comparar Productos</h1>

<form id="comparison-form">
    <label for="product1">Seleccionar Primer Producto:</label>
    <select id="product1" name="product1">
        <option value="">Selecciona un producto</option>
        <?php
        // Obtener todos los productos
        $products = new WP_Query(array('post_type' => 'producto', 'posts_per_page' => -1));
        while ($products->have_posts()) : $products->the_post();
        ?>
            <option value="<?php the_ID(); ?>"><?php the_title(); ?></option>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </select>

    <label for="product2">Seleccionar Segundo Producto:</label>
    <select id="product2" name="product2">
        <option value="">Selecciona un producto</option>
        <?php
        // Reutilizar la consulta para el segundo select
        $products = new WP_Query(array('post_type' => 'producto', 'posts_per_page' => -1));
        while ($products->have_posts()) : $products->the_post();
        ?>
            <option value="<?php the_ID(); ?>"><?php the_title(); ?></option>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </select>
</form>

<!-- Contenedor para la tabla de comparación -->
<div id="comparison-table"></div>

<script src="<?php echo get_template_directory_uri(); ?>/js/product-comparison.js"></script>

  </div>
<?php get_footer(); ?>