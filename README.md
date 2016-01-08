![PopoverEx widget logo](https://raw.githubusercontent.com/rvalitov/widgetkit-popover-ex/master/images/logo.png)
# Overview
**PopoverEx** is an advanced Popover widget for [Yootheme Widgetkit2](https://yootheme.com/widgetkit). After installation it becomes available in the Widgets list as a "native" widget and can be used with any [Warp 7 theme](https://yootheme.com/themes).

## Features
Or why it's better than original [Popover widget](http://yootheme.com/demo/widgetkit/joomla/index.php/home/popover) provided by Yootheme?
* **Custom Default Toggle Icon** - a custom icon can be setvery easy from the control panel.
* **Responsive Toggle Icon** - you can setup the size and resize behaviour of the icon.
* **Unique Icons for Every Item** - you can setup invidual unique icons for any element.
* **Backward compatibility** - all other behavior, styling and features of the original [Popover widget](http://yootheme.com/demo/widgetkit/joomla/index.php/home/popover) are preserved.

# Supported platforms
* The code is based on Widgetkit 2.5.2, however it should work with any Widgetkit 2.4.x and later.
* Joomla 3.4.x or later required
I didn't test it with Wordpress.

# Installation
## Installation Overview
We use "clean" and "neat" approach according to the official Yootheme's manual:
* [Custom widgetkit plugin](http://yootheme.com/widgetkit/documentation/customizing/custom-widget-plugin)
* [Where to store your customizations](https://yootheme.com/widgetkit/documentation/customizing/where-to-store-your-customizations)

Such approach allows you to:
* keep original Yootheme's Widgetkit source files
* preserve original Yootheme's functionality
* safely do updates to Yootheme's files (download new versions of Widgetkit 2), keeping our new widget (modifications won't be overwritten during update process)

## Installation Process
The installation is very simple. You just need to copy the folder _popover_ex_ to _/templates/THEME-NAME/widgetkit/widgets/_, so that you will have a folder _/templates/THEME-NAME/widgetkit/widgets/popover_ex_. The _THEME-NAME_ is a folder of your [Warp 7 theme](https://yootheme.com/themes), e.g. it can be _yoo_vida_, _yoo_finch_, etc. 

# Setup and usage
## Configure the widget
After successful installation you should see the PopoverEx widget in the widgetkit control panel page, so that you can select it from the list:
![PopoverEx widget](https://raw.githubusercontent.com/rvalitov/widgetkit-popover-ex/master/images/widget-popover-ex-list.jpeg)

You should configure the widget as usual, e.g. the [Yootheme documentation](http://yootheme.com/demo/widgetkit/joomla/index.php/home/popover) can be useful.

The advanced features of the PopoverEx are described below.

### The Main Settings
![PopoverEx widget settings screen](https://raw.githubusercontent.com/rvalitov/widgetkit-popover-ex/master/images/widget-popover-ex-custom-settings.jpeg)
If you don't activate any of these features, then the PopoverEx behaves exactly as the original Popover widget from the Widgetkit bundle. You can see the advanced features provided by this module if you select "Custom" as "Toggle Image".

Options and description of Custom Toggle Icon Settings:
* **Image** - path to an image file that will be used as a custom toggle icon. This setting sets the default icon for all content elements. If this field is left empty, then a default icon (that is distributed with this plugin) will be used. You can set a unique icon for any content element: you can do this by setting a 'Custom Toggle Image' field in the 'Content Settings' tab. This field is visible and available only if you use 'Custom' content source type. The 'Custom Toggle Image' field has a higher priority and if set will override the value of this setting. The default icon looks as follows:
![PopoverEx widget default icon](https://raw.githubusercontent.com/rvalitov/widgetkit-popover-ex/master/images/pin.png)

* **Width** - the width of the custom toggle icon in pixels or percents. This field is mandatory and should be specified.
* **Height** - the height of the custom toggle icon in pixels or percents. This field is mandatory and should be specified.
* **Minimum Width (px)** - the minimum width of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to minimum width is applied.
* **Minimum Height (px)** - the minimum height of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to minimum height is applied.
* **Maximum Width (px)** - the maximum width of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to maximum width is applied.
* **Maximum Height (px)** - the maximum height of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to maximum height is applied.

### The Content Item Settings
A new field added to the item settings:
![PopoverEx widget item settings](https://raw.githubusercontent.com/rvalitov/widgetkit-popover-ex/master/images/widget-popover-ex-custom-image.jpeg)
This field called **Custom Toggle Image** allows to set a unique image for the content element. This field works only if you select "Custom" as "Toggle Image" in the main settings of the widget.

## Screenshots
The result looks as follows:
![PopoverEx widget item settings](https://raw.githubusercontent.com/rvalitov/widgetkit-popover-ex/master/images/widget-popover-ex-custom-screenshot.jpeg)

# Authors, Contributors and Acknowledgment
* This widget is created by [Ramil Valitov](http://www.valitov.me).
* The code is based on the original [Popover widget](http://yootheme.com/demo/widgetkit/joomla/index.php/home/popover) by [Yootheme](http://yootheme.com/).
* Logo is based on [Tango Icon Library](https://www.iconfinder.com/iconsets/tango-icon-library)
* The default toggle icon is created by [Icons Land](https://www.iconfinder.com/iconsets/softwaredemo)

# Feedback
Your feedback is very appreciated. If you want to see new features in this module, please, post your ideas and feature requests in the [issue tracker](https://github.com/rvalitov/widgetkit-popover-ex/issues).

# Support or Contact
Having trouble with PopoverEx Widget? May be something has already been described in the [Wiki area](https://github.com/rvalitov/widgetkit-popover-ex/wiki) or reported in the [issue tracker](https://github.com/rvalitov/widgetkit-popover-ex/issues). If you don't find your problem there, then, please, add your issue there. 

Being a free project which I do in my spare time, I hope you understand that I can't offer 24/7 support:) You may contact me via e-mail ramilvalitov@gmail.com, I will try to answer to all of them (if such messages imply an answer), however, not immediately, it may take a few days or a week... so, just be patient. 

Note, that I can answer only to questions and problems directly related to PopoverEx widget. Answers to basic questions about the widgetkit nature and simple help about how to use widgets in general or how to use Joomla you can find in appropriate forums:
* [Joomla](http://forum.joomla.org/)
* [Widgetkits](https://yootheme.com/support)
