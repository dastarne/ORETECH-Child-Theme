<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

$site = $theme->get('site', []);

?>
        <?php if (!$theme->get('builder')) : ?>

                        <?php if (is_active_sidebar('sidebar')) : ?>
                        </div>

                        <?= get_view('sidebar') ?>

                    </div>
                     <?php endif ?>

                </div>
            </div>
            <?php endif ?>

            <?php dynamic_sidebar("bottom:section") ?>
            <?php require_once('includes/current-UNCG-footer.php');?>
            <?/*= get_builder(json_encode($theme->get('footer.content')), ['prefix' => 'footer']) */?>

        </div>

        <?php if ($site['layout'] == 'boxed') : ?>
        </div>
        <?php endif ?>

        <?php wp_footer() ?>
    </body>
</html>
