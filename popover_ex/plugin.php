<?php
/*
PopoverEx plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-popover-ex
*/

require_once(__DIR__.'/views/WidgetkitExPlugin.php');
use WidgetkitEx\PopoverEx\WidgetkitExPlugin;

return array(

    'name' => 'widget/popover_ex',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',
	
	'plugin_version' => 'v1.2.4',
	
	'plugin_date' => '25/04/2018',
	
	'plugin_logo' => 'https://raw.githubusercontent.com/wiki/rvalitov/widgetkit-popover-ex/images/logo.png',
	
	'plugin_wiki' => 'https://github.com/rvalitov/widgetkit-popover-ex/wiki',

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
			'toggle_opacity'       		=> '1',

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
			$uikit=(WidgetkitExPlugin::getCSSPrefix($app)=='uk') ? 'uikit' : 'uikit2';
			$app['styles']->add('widgetkit-popover_ex', 'plugins/widgets/popover_ex/css/style.css', array($uikit));
        },

        'init.admin' => function($event, $app) {
			$plugin=new WidgetkitExPlugin($app);
			$uikit=(WidgetkitExPlugin::getCSSPrefix($app)=='uk') ? 'uikit' : 'uikit2';
			//Backend CSS
			$app['styles']->add('popover_ex_edit', 'plugins/widgets/popover_ex/css/popoverex.edit.css', array('widgetkit-application'));
			//Adding our own translations:
			$app['translator']->addResource('plugins/widgets/popover_ex/languages/'.$app['locale'].'.json');
			//Edit template:
            $app['angular']->addTemplate('popover_ex.edit', 'plugins/widgets/popover_ex/views/edit.php', true);
			//Adding tooltip:
			$app['scripts']->add($uikit.'-tooltip', 'vendor/assets/uikit/js/components/tooltip.min.js', array($uikit));
			$app['styles']->add($uikit.'-tooltip', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/'.$plugin->getUIkitVersion().'/css/components/tooltip.min.css', array($uikit));
			//jQuery wait plugin:
			$app['scripts']->add('jquery.wait', 'plugins/widgets/popover_ex/assets/jquery.wait.min.js', array($uikit));
			//Marked:
			$app['scripts']->add('marked', 'plugins/widgets/popover_ex/assets/marked.min.js', array($uikit));
			//Mailchimp for subscription:
			$app['scripts']->add('mailchimp', 'plugins/widgets/popover_ex/assets/jquery.formchimp.min.js', array($uikit));
			//Underscore.js
			$app['scripts']->add('underscore', 'plugins/widgets/popover_ex/assets/underscore-min.js', array($uikit));
			//Semantic version compare
			$app['scripts']->add('versioncompare', 'plugins/widgets/popover_ex/assets/versioncompare.min.js', array($uikit));
			//Marked:
			$app['scripts']->add('replacer', 'plugins/widgets/popover_ex/assets/replacer.min.js', array($uikit));
			//Generating dynamic update script:
			$app['scripts']->add('popover_ex.dynamic-updater', $plugin->generateUpdaterJS($app), array(), 'string');
        },
		
		'request' => function($event, $app) {
			$global=null;
			if ( (isset($app['request'])) && (isset($app['request']->request)) ) {
				$content=$app['request']->request->get('content');
				if (isset($content['data']['_widget']['data']['global']))
					$global=$content['data']['_widget']['data']['global'];
			}
				
			if ($global){
				//Global is set for valid requests like "Save" and "Save & Close"
				$plugin=new WidgetkitExPlugin($app);
				$plugin->saveGlobalSettings($global);
			}
		}
    )

);
