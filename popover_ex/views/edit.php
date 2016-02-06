<?php
/*
PopoverEx plugin for Widgetkit 2.
Author: Ramil Valitov
E-mail: ramilvalitov@gmail.com
Web: http://www.valitov.me/
Git: https://github.com/rvalitov/widgetkit-popover-ex
*/
?>

<div class="uk-grid uk-grid-divider uk-form uk-form-horizontal" data-uk-grid-margin>
    <div class="uk-width-medium-1-4">

        <div class="wk-panel-marginless">
            <ul class="uk-nav uk-nav-side" data-uk-switcher="{connect:'#nav-content'}">
                <li><a href="">Popover</a></li>
                <li><a href="">{{'Media' | trans}}</a></li>
                <li><a href="">{{'Content' | trans}}</a></li>
                <li><a href="">{{'General' | trans}}</a></li>
				<li><a href="">{{'About' | trans}}</a></li>
            </ul>
        </div>

    </div>
    <div class="uk-width-medium-3-4">

        <ul id="nav-content" class="uk-switcher">
            <li>

                <h3 class="wk-form-heading">{{'Popover' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-width">{{'Width (px)' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Width of the popover in pixels."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-width" class="uk-form-width-medium" type="text" ng-model="widget.data['width']">
                    </div>
                </div>

				<div class="uk-form-row" ng-if="widget.data.image == ''">
					<div class="uk-panel uk-panel-box uk-alert-danger">
						<p class="uk-text-center"><i class="uk-icon uk-icon-warning uk-margin-small-right"></i>You must set the main popover image below. Otherwise, the whole widget will be disabled and will not render.</p>
					</div>
				</div>
					
                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Image' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="The main popover image that is used as the background."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <field-media title="item.title" media="widget.data.image"></field-media>
                        <p class="uk-form-controls-condensed">
                            <span><input class="uk-form-width-small" type="text" ng-model="widget.data['image_hero_width']"> {{'Width (px)' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Width of the main popover image in pixels. You can also use <strong>auto</strong> value."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                        </p>
                        <p class="uk-form-controls-condensed">
                            <span><input class="uk-form-width-small" type="text" ng-model="widget.data['image_hero_height']"> {{'Height (px)' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Height of the main popover image in pixels. You can also use <strong>auto</strong> value."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-position">{{'Position' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Defines the position of the dropdowns."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-position" class="uk-form-width-medium" ng-model="widget.data['position']">
                            <option value="top-center">Top</option>
                            <option value="bottom-center">Bottom</option>
                            <option value="left-center">Left</option>
                            <option value="right-center">Right</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-mode">{{'Mode' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Defines when the dropdowns become visible: on mouse hover or on click."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-mode" class="uk-form-width-medium" ng-model="widget.data['mode']">
                            <option value="hover">Hover</option>
                            <option value="click">Click</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-toggle">{{'Toggle Icon' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Choose the toggle icon."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-toggle" class="uk-form-width-medium" ng-model="widget.data['toggle']">
                            <option value="eye">{{'Eye' | trans}}</option>
                            <option value="info">{{'Info' | trans}}</option>
                            <option value="info-circle">{{'Info Circle' | trans}}</option>
                            <option value="search">{{'Search' | trans}}</option>
                            <option value="search-plus">{{'Search Plus' | trans}}</option>
                            <option value="plus">{{'Plus' | trans}}</option>
                            <option value="plus-square">{{'Plus Square' | trans}}</option>
                            <option value="plus-square-o">{{'Plus Square Outlined' | trans}}</option>
                            <option value="plus-circle">{{'Plus Circle' | trans}}</option>
                            <option value="map-marker">{{'Map Marker' | trans}}</option>
                            <option value="">{{'Custom' | trans}}</option>
                        </select>
                    </div>
                </div>
				
				<div class="uk-form-row">
					<span class="uk-form-label" for="wk-toggle_opacity">{{'Opacity' | trans}}<span  data-uk-tooltip title="Opacity of the icon, a value in the range 0.0 (fully transparent) - 1.0 (opaque)."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-toggle_opacity" class="uk-form-width-medium" type="text" ng-model="widget.data['toggle_opacity']">
						<span>Opacity of the icon, a value in the range 0.0 - 1.0</span>
                    </div>
				</div>
				
				<div class="uk-form-row">
                    <span class="uk-form-label">{{'Color' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Use a high-contrast color inside the overlay."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['contrast']"> {{'Use a high-contrast color.' | trans}}</label>
                    </div>
                </div>
				
				<h3 class="wk-form-heading" ng-if="widget.data['toggle'] == ''">{{'Custom Toggle Icon Settings' | trans}}</h3>
				
				<div class="uk-form-row" ng-if="widget.data['toggle'] == ''">
                    <span class="uk-form-label">{{'Image' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Path to an image file that will be used as a custom toggle icon. This setting sets the default icon for all content elements. If this field is left empty, then a default icon (that is distributed with this plugin) will be used. You can set a unique icon for any content element: you can do this by setting a 'Custom Toggle Image' field in the 'Content Settings' tab. This option is available only if you use 'Custom' content source type. The 'Custom Toggle Image' field has a higher priority and if set will override the value of this setting."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <field-media title="item.title" media="widget.data.custom_toggle_path"></field-media>
					</div>
				</div>
				
				<div class="uk-form-row" ng-if="widget.data['toggle'] == ''">
					<span class="uk-form-label" for="wk-custom_toggle_width">{{'Width' | trans}}<span  data-uk-tooltip title="The width of the custom toggle icon in pixels or percents. This field is mandatory and should be specified."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-custom_toggle_width" class="uk-form-width-medium" type="text" ng-model="widget.data['custom_toggle_width']">
                    </div>
				</div>
				
				<div class="uk-form-row" ng-if="widget.data['toggle'] == ''">
					<span class="uk-form-label" for="wk-custom_toggle_height">{{'Height' | trans}}<span  data-uk-tooltip title="The height of the custom toggle icon in pixels or percents. This field is mandatory and should be specified."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-custom_toggle_height" class="uk-form-width-medium" type="text" ng-model="widget.data['custom_toggle_height']">
                    </div>
				</div>
				
				<div class="uk-form-row" ng-if="widget.data['toggle'] == ''">
					<span class="uk-form-label" for="wk-custom_toggle_min_width">{{'Minimum Width (px)' | trans}}<span  data-uk-tooltip title="The minimum width of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to minimum width is applied."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-custom_toggle_min_width" class="uk-form-width-medium" type="text" ng-model="widget.data['custom_toggle_min_width']" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
				</div>
				
				<div class="uk-form-row" ng-if="widget.data['toggle'] == ''">
					<span class="uk-form-label" for="wk-custom_toggle_min_height">{{'Minimum Height (px)' | trans}}<span  data-uk-tooltip title="The minimum height of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to minimum height is applied."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-custom_toggle_min_height" class="uk-form-width-medium" type="text" ng-model="widget.data['custom_toggle_min_height']" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
				</div>
				
				<div class="uk-form-row" ng-if="widget.data['toggle'] == ''">
					<span class="uk-form-label" for="wk-custom_toggle_max_width">{{'Maximum Width (px)' | trans}}<span  data-uk-tooltip title="The maximum width of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to maximum width is applied."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-custom_toggle_max_width" class="uk-form-width-medium" type="text" ng-model="widget.data['custom_toggle_max_width']" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
				</div>
				
				<div class="uk-form-row" ng-if="widget.data['toggle'] == ''">
					<span class="uk-form-label" for="wk-custom_toggle_max_height">{{'Maximum Height (px)' | trans}}<span  data-uk-tooltip title="The maximum height of the custom toggle in pixels. This settings is useful to support responsive design and make dynamic size of the custom toggle icon. If this field is left empty, then no restriction to maximum height is applied."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-custom_toggle_max_height" class="uk-form-width-medium" type="text" ng-model="widget.data['custom_toggle_max_height']" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                    </div>
				</div>

                <h3 class="wk-form-heading">{{'Items' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-panel">{{'Panel' | trans}}<span  data-uk-tooltip title="Select the style of the panel used in dropdowns."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-panel" class="uk-form-width-medium" ng-model="widget.data['panel']">
                            <option value="box">{{'Box' | trans}}</option>
                            <option value="primary">{{'Box Primary' | trans}}</option>
                            <option value="secondary">{{'Box Secondary' | trans}}</option>
                        </select>
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['panel_link']"> {{'Link entire panel, if link exists' | trans}}</label>
                        </p>
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'Media' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Display the image inside the dropdowns."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['media']"> {{'Show media' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Image' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Set the width and height of the image in pixels. Use 'auto' for auto size."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image_width']"> {{'Width (px)' | trans}}</label>
                        <p class="uk-form-controls-condensed">
                            <label><input class="uk-form-width-small" type="text" ng-model="widget.data['image_height']"> {{'Height (px)' | trans}}</label>
                        </p>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Overlay' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-media-overlay">{{'Overlay' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Define what will be displayed inside the overlay or hide the overlay."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-media-overlay" class="uk-form-width-medium" ng-model="widget.data['media_overlay']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="link">{{'Link' | trans}}</option>
                            <option value="icon">{{'Icon' | trans}}</option>
                            <option value="image">{{'Image' | trans}} ({{'If second one exists' | trans}})</option>
                        </select>
                        <p class="uk-form-controls-condensed" ng-if="widget.data.media_overlay == 'icon'">
                            <label>
                                <select class="uk-form-width-small" ng-model="widget.data['overlay_animation']">
                                    <option value="fade">{{'Fade' | trans}}</option>
                                    <option value="slide-top">{{'Slide Top' | trans}}</option>
                                    <option value="slide-bottom">{{'Slide Bottom' | trans}}</option>
                                    <option value="slide-left">{{'Slide Left' | trans}}</option>
                                    <option value="slide-right">{{'Slide Right' | trans}}</option>
                                </select>
                                {{'Animation' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="The animation that will be applied to the overlay when being displayed."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span>
                            </label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-thumbnail-animation">{{'Image Animation' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="The animation that will be applied to the image."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-thumbnail-animation" class="uk-form-width-medium" ng-model="widget.data['media_animation']">
                            <option value="none">{{'None' | trans}}</option>
                            <option value="fade">{{'Fade' | trans}}</option>
                            <option value="scale">{{'Scale' | trans}}</option>
                            <option value="spin">{{'Spin' | trans}}</option>
                            <option value="grayscale">{{'Grayscale' | trans}}</option>
                        </select>
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'Text' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Show or hide title and content."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['title']"> {{'Show title' | trans}}</label>
                        </p>
                        <p class="uk-form-controls-condensed">
                            <label><input type="checkbox" ng-model="widget.data['content']"> {{'Show content' | trans}}</label>
                        </p>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-title-size">{{'Title Size' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Define the font size of the title."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-title-size" class="uk-form-width-medium" ng-model="widget.data['title_size']">
                            <option value="panel">{{'Default' | trans}}</option>
                            <option value="h1">H1</option>
                            <option value="h2">H2</option>
                            <option value="h3">H3</option>
                            <option value="h4">H4</option>
                            <option value="large">{{'Extra Large' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-text-align">{{'Alignment' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Define the text alignment."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-text-align" class="uk-form-width-medium" ng-model="widget.data['text_align']">
                            <option value="left">{{'Left' | trans}}</option>
                            <option value="right">{{'Right' | trans}}</option>
                            <option value="center">{{'Center' | trans}}</option>
                        </select>
                    </div>
                </div>

                <h3 class="wk-form-heading">{{'Link' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Display' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Display the Read More link. The link URL is added to each item in the Content Manager."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['link']"> {{'Show link' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-link-style">{{'Style' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Set the style of the Read More link."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <select id="wk-link-style" class="uk-form-width-medium" ng-model="widget.data['link_style']">
                            <option value="text">{{'Text' | trans}}</option>
                            <option value="button">{{'Button' | trans}}</option>
                            <option value="primary">{{'Button Primary' | trans}}</option>
                            <option value="button-large">{{'Button Large' | trans}}</option>
                            <option value="primary-large">{{'Button Large Primary' | trans}}</option>
                            <option value="button-link">{{'Button Link' | trans}}</option>
                        </select>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-link-text">{{'Text' | trans}}<span  data-uk-tooltip style="margin-top: 5px;" title="Define the link text."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-link-text" class="uk-form-width-medium" type="text" ng-model="widget.data['link_text']">
                    </div>
                </div>

            </li>
            <li>

                <h3 class="wk-form-heading">{{'General' | trans}}</h3>

                <div class="uk-form-row">
                    <span class="uk-form-label">{{'Link Target' | trans}}<span data-uk-tooltip title="Enables/disables opening all links in a new window of the browser. Otherwise, they open in the same window."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input type="checkbox" ng-model="widget.data['link_target']"> {{'Open all links in a new window' | trans}}</label>
                    </div>
                </div>

                <div class="uk-form-row">
                    <span class="uk-form-label" for="wk-class">{{'HTML Class' | trans}}<span data-uk-tooltip title="Adds a custom CSS class to the widget. You can specify several classes using space between them."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span></span>
                    <div class="uk-form-controls">
                        <input id="wk-class" class="uk-form-width-medium" type="text" ng-model="widget.data['class']">
                    </div>
                </div>

            </li>
			<li>

                <h3 class="wk-form-heading">{{'About' | trans}}</h3>

				<div class="uk-grid">
					<div class="uk-text-center uk-width-medium-1-3" id="logo-widgetkit-popover-ex">
					</div>
					<div class="uk-width-medium-2-3">
						<table class="uk-table uk-table-striped">
							<tr>
								<td>
									Widget Name
								</td>
								<td id="name-widgetkit-popover-ex">
									N/A
								</td>
							</tr>
							<tr>
								<td>
									Version
								</td>
								<td id="version-widgetkit-popover-ex">
									N/A
								</td>
							</tr>
							<tr>
								<td>
									Build Date
								</td>
								<td id="build-widgetkit-popover-ex">
									N/A
								</td>
							</tr>
							<tr>
								<td>
									Author<span data-uk-tooltip title="See the complete information about contributors and acknowledgement on the website below."><i class="uk-icon uk-icon-question-circle uk-margin-small-left" style="color:#ffb105"></i></span>
								</td>
								<td>
									<a href="https://valitov.me" target="_blank">Ramil Valitov<i class="uk-icon uk-icon-external-link uk-margin-small-left"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									Website
								</td>
								<td id="website-widgetkit-popover-ex">
									N/A
								</td>
							</tr>
							<tr>
								<td>
									Wiki and Manuals
								</td>
								<td id="wiki-widgetkit-popover-ex">
									N/A
								</td>
							</tr>
						</table>
						<div id="update-widgetkit-popover-ex" class="uk-text-center">
						</div>
					</div>
				<div>

            </li>
        </ul>

    </div>
</div>