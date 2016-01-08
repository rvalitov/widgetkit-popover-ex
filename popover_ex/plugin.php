<?php
/*
PopoverEx plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-popover-ex
*/

return array(

    'name' => 'widget/popover_ex',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'popover_ex',
        'label' => 'PopoverEx',
        'core'  => true,
        'icon'  => 'plugins/widgets/popover_ex/widget.svg',
        'view'  => 'plugins/widgets/popover_ex/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'fields' => array(
            array(
                'type' => 'text',
                'name' => 'top',
                'label' => 'Top'
            ),
            array(
                'type' => 'text',
                'name' => 'left',
                'label' => 'Left'
            ),
			array(
                'type' => 'media',
                'name' => 'custom_icon_image',
                'label' => 'Custom Toggle Image'
            )
        ),
        'settings' => array(
            'width'             => '',
            'image'             => '',
            'image_hero_width'  => 'auto',
            'image_hero_height' => 'auto',
            'position'          => 'top-center',
            'mode'              => 'hover',
            'toggle'            => 'plus',
            'contrast'          => true,
            'panel'             => 'box',
            'panel_link'        => false,
			//Extra parameters:
			'custom_toggle_path'		=> '',
			'custom_toggle_width'		=> '10%',
			'custom_toggle_height'		=> '10%',
			'custom_toggle_min_width'	=> '48',
			'custom_toggle_min_height'	=> '48',
			'custom_toggle_max_width'	=> '128',
			'custom_toggle_max_height'	=> '128',

            'media'             => true,
            'image_width'       => 'auto',
            'image_height'      => 'auto',
            'media_overlay'     => 'icon',
            'overlay_animation' => 'fade',
            'media_animation'   => 'scale',

            'title'             => true,
            'content'           => true,
            'social_buttons'    => true,
            'title_size'        => 'panel',
            'text_align'        => 'left',
            'link'              => true,
            'link_style'        => 'button',
            'link_text'         => 'Read more',

            'link_target'       => false,
            'class'             => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
			$app['styles']->add('uikit-popover_ex', 'plugins/widgets/popover_ex/assets/styles.css', array('uikit'));
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('popover_ex.edit', 'plugins/widgets/popover_ex/views/edit.php', true);
			//Adding tooltip:
			$app['scripts']->add('uikit-tooltip', 'vendor/assets/uikit/js/components/tooltip.min.js', array('uikit'));
			$app['styles']->add('uikit-tooltip', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.3/css/components/tooltip.min.css', array('uikit'));
        }

    )

);
