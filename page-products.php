<?php
/**
 * Template Name: Firewall Comparison Page
 */
?>

<?php get_header(); ?>

<div class="main-container page full">
    <div class="page__comparison">
        <section class="comparison__title">
            <?php the_title('<h1 class="post__title">', '</h1>'); ?>
        </section>

        <form id="comparison-form">
            <!-- Selects para Marcas -->
            <label for="brand1">Selecciona la primera marca:</label>
            <select id="brand1" name="brand1">
                <option value="">Selecciona una marca</option>
                <?php
                $brands = get_terms(array(
                    'taxonomy' => 'marca',
                    'hide_empty' => false,
                ));
                foreach ($brands as $brand) {
                    echo '<option value="' . $brand->term_id . '">' . $brand->name . '</option>';
                }
                ?>
            </select>

            <label for="brand2">Selecciona la segunda marca:</label>
            <select id="brand2" name="brand2">
                <option value="">Selecciona una marca</option>
                <?php
                foreach ($brands as $brand) {
                    echo '<option value="' . $brand->term_id . '">' . $brand->name . '</option>';
                }
                ?>
            </select>

            <!-- Selects para Firewalls -->
            <div id="firewall-selects">
                <label for="firewall1" style="display:none;">Selecciona el primer firewall:</label>
                <select id="firewall1" name="firewall1" style="display:none;">
                    <option value="">Selecciona un firewall</option>
                </select>

                <label for="firewall2" style="display:none;">Selecciona el segundo firewall:</label>
                <select id="firewall2" name="firewall2" style="display:none;">
                    <option value="">Selecciona un firewall</option>
                </select>
            </div>
        </form>

        <section class="comparison-table" id="comparison-table"></section>

        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/product-comparison.js"></script>
</div>

<?php get_footer(); ?>
