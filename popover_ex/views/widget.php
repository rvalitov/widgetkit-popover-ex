<?php
/*
PopoverEx plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-popover-ex
*/

// JS Options
$options = array();
$options[] = '\'pos\': \'' . $settings['position'] . '\'';
$options[] = '\'mode\': \'' . $settings['mode'] . '\'';

$options = '{'.implode(',', array_filter($options)).'}';

$myid=uniqid('wk-popover_ex');

// Toggle
$toggle  = 'wk-popover-toggle';
$toggle .= $settings['toggle'] ? ' uk-icon-' . $settings['toggle'] . ' uk-icon-button' : ' wk-popover-custom';

// Panel
$panel = 'uk-panel';
switch ($settings['panel']) {
    case 'box' :
        $panel .= ' uk-panel-box';
        break;
    case 'primary' :
        $panel .= ' uk-panel-box uk-panel-box-primary';
        break;
    case 'secondary' :
        $panel .= ' uk-panel-box uk-panel-box-secondary';
        break;
}

// Title Size
switch ($settings['title_size']) {
    case 'panel':
        $title_size = 'uk-panel-title';
        break;
    case 'large':
        $title_size = 'uk-heading-large uk-margin-top-remove';
        break;
    default:
        $title_size = 'uk-' . $settings['title_size'] . ' uk-margin-top-remove';
}

// Link Style
switch ($settings['link_style']) {
    case 'button':
        $link_style = 'uk-button';
        break;
    case 'primary':
        $link_style = 'uk-button uk-button-primary';
        break;
    case 'button-large':
        $link_style = 'uk-button uk-button-large';
        break;
    case 'primary-large':
        $link_style = 'uk-button uk-button-large uk-button-primary';
        break;
    case 'button-link':
        $link_style = 'uk-button uk-button-link';
        break;
    default:
        $link_style = '';
}

// Link Target
$link_target = ($settings['link_target']) ? ' target="_blank"' : '';

// Image
$image = $settings['image'];

if ($settings['image_hero_width'] != 'auto' || $settings['image_hero_height'] != 'auto') {

    $width  = ($settings['image_hero_width'] != 'auto') ? $settings['image_hero_width'] : '';
    $height = ($settings['image_hero_height'] != 'auto') ? $settings['image_hero_height'] : '';

    $image = $app['image']->thumbnailUrl($settings['image'], $width, $height);

}

?>

<?php if ($settings['image']) : ?>
<?php 
if (!$settings['toggle'])
{
	//Adding settings for custom toggle
	$custom_style=	( (strlen(trim($settings['custom_toggle_width']))) ? ('width:'.$settings['custom_toggle_width'] . ';') : '' ) . 
					( (strlen(trim($settings['custom_toggle_height']))) ? ('height:' . $settings['custom_toggle_height'] . ';') : '' ) . 
					( (strlen(trim($settings['custom_toggle_min_width']))) ? ('min-width:' . $settings['custom_toggle_min_width'] . 'px;') : '' ) . 
					( (strlen(trim($settings['custom_toggle_min_height']))) ? ('min-height:' . $settings['custom_toggle_min_height'] . 'px;') : '' ) . 
					( (strlen(trim($settings['custom_toggle_max_width']))) ? ('max-width:' . $settings['custom_toggle_max_width'] . 'px;') : '' ) . 
					( (strlen(trim($settings['custom_toggle_max_height']))) ? ('max-height:' . $settings['custom_toggle_max_height'] . 'px;') : '' ) ;
}
$opacity_style='';
if (is_numeric($settings['toggle_opacity'])){
	$v=$settings['toggle_opacity']+0;
	if ( ($v>=0) && ($v<1) )
		$opacity_style='opacity:'.$v.';';
}
?>
<div class="uk-widgetkit-popover-ex <?php echo $settings['class']; ?>" id="<?php echo $myid;?>">
    <div class="uk-position-relative uk-display-inline-block">

        <img src="<?php echo $image; ?>" alt="">

        <?php foreach ($items as $i => $item) :

            // Position
            $left  = isset($item['left']) && $item['left'] ? (float) $item['left'] : '';
            $top   = isset($item['top']) && $item['top'] ? (float) $item['top'] : '';

            if ($left !== 0 && !$left || $top !== 0 && !$top) continue;

            $left .= '%';
            $top  .= '%';

        ?>

        <div class="uk-position-absolute uk-hidden-small" style="left:<?php echo $left; ?>; top:<?php echo $top; ?>;<?php echo $custom_style;?>" data-uk-dropdown="<?php echo $options; ?>">

            <?php if ($settings['contrast']) echo '<div class="uk-contrast">'; ?>

            <a class="<?php echo $toggle; ?>" style="<?php
			echo $opacity_style;
			if (!$settings['toggle'])
			{
				//Setting custom icon image
				if (strlen(trim($settings['custom_toggle_path'])))
					$toggle_file=$settings['custom_toggle_path'];
				else
					$toggle_file='';
				if ( (isset($item['custom_icon_image'])) && (strlen(trim($item['custom_icon_image']))>0) )
					$toggle_file=$item['custom_icon_image'];
				//Checking for absolute URL for CSS
				if ( (substr($toggle_file, 0, 7) != 'http://') && (substr($toggle_file, 0, 8) != 'https://') && (substr($toggle_file, 0, 2) != '//') && (strlen($toggle_file)>2) )
					$toggle_file='/'.$toggle_file;
				if (strlen($toggle_file)>0)
					echo 'background-image: url(\'' . $toggle_file . '\')';
			}
			
			?>"></a>

            <?php if ($settings['contrast']) echo '</div>'; ?>

            <div class="uk-dropdown-blank" <?php echo ($settings['width']) ? 'style="width:' . $settings['width'] . 'px;"': ''; ?>>

               <?php echo $this->render('plugins/widgets/' . $widget->getConfig('name')  . '/views/_content.php', compact('item', 'settings', 'panel', 'title_size', 'link_style', 'link_target')); ?>

            </div>

        </div>

    <?php endforeach; ?>
    </div>

    <div class="uk-margin uk-visible-small" data-uk-slideset="{default: 1}">
        <div class="uk-margin">
            <ul class="uk-slideset uk-grid uk-flex-center">
                <?php foreach ($items as $i => $item) : ?>
                <li><?php echo $this->render('plugins/widgets/' . $widget->getConfig('name')  . '/views/_content.php', compact('item', 'settings', 'panel', 'title_size', 'link_style', 'link_target')); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <ul class="uk-slideset-nav uk-dotnav uk-flex-center"></ul>
    </div>

</div>
<?php endif; ?>
