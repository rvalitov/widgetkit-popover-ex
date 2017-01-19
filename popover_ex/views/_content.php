<?php
/*
PopoverEx plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-popover-ex
*/

require_once(__DIR__.'/WidgetkitExPlugin.php');
use WidgetkitEx\PopoverEx\WidgetkitExPlugin;
$cssprefix=WidgetkitExPlugin::getCSSPrefix($app);

    // Second Image as Overlay
    $media2 = '';
    if ($settings['media_overlay'] == 'image') {
        foreach ($item as $field) {
            if ($field != 'media' && $item->type($field) == 'image') {
                $media2 = $field;
                break;
            }
        }
    }

    // Media Type
    $attrs  = array('class' => '');
    $width  = $item['media.width'];
    $height = $item['media.height'];

    if ($item->type('media') == 'image') {
        $attrs['alt'] = strip_tags($item['title']);

        $attrs['class'] .= ($settings['media_animation'] != 'none' && !$media2) ? ' '.$cssprefix.'-overlay-' . $settings['media_animation'] : '';

        $width  = ($settings['image_width'] != 'auto') ? $settings['image_width'] : '';
        $height = ($settings['image_height'] != 'auto') ? $settings['image_height'] : '';
    }

    if ($item->type('media') == 'video') {
        $attrs['class'] = $cssprefix.'-responsive-width';
        $attrs['controls'] = true;
    }

    if ($item->type('media') == 'iframe') {
        $attrs['class'] = $cssprefix.'-responsive-width';
    }

    $attrs['width']  = ($width) ? $width : '';
    $attrs['height'] = ($height) ? $height : '';

    if (($item->type('media') == 'image') && ($settings['image_width'] != 'auto' || $settings['image_height'] != 'auto')) {
        $media = $item->thumbnail('media', $width, $height, $attrs);
    } else {
        $media = $item->media('media', $attrs);
    }

    // Second Image as Overlay
    if ($media2) {

        $attrs['class'] .= ' '.$cssprefix.'-overlay-panel '.$cssprefix.'-overlay-image';
        $attrs['class'] .= ($settings['media_animation'] != 'none') ? ' '.$cssprefix.'-overlay-' . $settings['media_animation'] : '';

        $media2 = $item->thumbnail($media2, $width, $height, $attrs);
    }

    // Link and Overlay
    $overlay       = '';
    $overlay_hover = '';
    $panel_hover   = '';

    if ($item['link']) {

        if ($settings['panel_link']) {

            if (($settings['media_overlay'] == 'icon') ||
                ($media2) ||
                ($item['media'] && $settings['media'] && $settings['media_animation'] != 'none')) {
                $panel_hover = $cssprefix.'-overlay-hover';
            }

        } elseif ($settings['media_overlay'] == 'link' || $settings['media_overlay'] == 'icon' || $settings['media_overlay'] == 'image') {
            $overlay = '<a class="'.$cssprefix.'-position-cover" href="' . $item->escape('link') . '"' . $link_target . '></a>';
            $overlay_hover = ' '.$cssprefix.'-overlay-hover';
        }

        if ($settings['media_overlay'] == 'icon') {
            $overlay = '<div class="'.$cssprefix.'-overlay-panel '.$cssprefix.'-overlay-background '.$cssprefix.'-overlay-icon '.$cssprefix.'-overlay-' . $settings['overlay_animation'] . '"></div>' . $overlay;
        }

        if ($media2) {
            $overlay = $media2 . $overlay;
        }

    }

    if ($overlay || ($settings['panel_link'] && $settings['media_animation'] != 'none')) {
        $media  = '<div class="'.$cssprefix.'-overlay' . $overlay_hover . '">' . $media . $overlay . '</div>';
    }

    // Panel Title last
    if ($settings['title_size'] == 'panel' &&
        !($item['content'] && $settings['content']) &&
        !($item['link'] && $settings['link'])) {
            $title_size .= ' '.$cssprefix.'-margin-bottom-remove';
    }

?>

<div class="<?php echo $panel; ?> <?php echo $panel_hover; ?> <?php echo $cssprefix?>-text-<?php echo $settings['text_align']; ?>">

    <?php if ($item['link'] && $settings['panel_link']) : ?>
    <a class="<?php echo $cssprefix?>-position-cover <?php echo $cssprefix?>-position-z-index" href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>></a>
    <?php endif; ?>

    <?php if ($item['media'] && $settings['media']) : ?>
    <div class="<?php echo $cssprefix?>-panel-teaser <?php echo $cssprefix?>-text-center"><?php echo $media; ?></div>
    <?php endif; ?>

    <?php if ($item['title'] && $settings['title']) : ?>
    <h3 class="<?php echo $title_size; ?>">

        <?php if ($item['link']) : ?>
            <a class="<?php echo $cssprefix?>-link-reset" href="<?php echo $item->escape('link') ?>"<?php echo $link_target; ?>><?php echo $item['title']; ?></a>
        <?php else : ?>
            <?php echo $item['title']; ?>
        <?php endif; ?>

    </h3>
    <?php endif; ?>

    <?php if ($item['content'] && $settings['content']) : ?>
    <div class="<?php echo $cssprefix?>-margin"><?php echo $item['content']; ?></div>
    <?php endif; ?>

    <?php if ($item['link'] && $settings['link']) : ?>
    <p><a<?php if($link_style) echo ' class="' . $link_style . '"'; ?> href="<?php echo $item->escape('link'); ?>"<?php echo $link_target; ?>><?php echo $app['translator']->trans($settings['link_text']); ?></a></p>
    <?php endif; ?>

</div>