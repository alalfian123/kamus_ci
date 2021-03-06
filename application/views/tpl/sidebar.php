<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url();?>assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li id="sb_dashboard">
                        <a href="<?php echo base_url();?>dashboard">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li id="sb_typography">
                        <a href="<?php echo base_url();?>typography">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li id="sb_helper_cls">
                        <a href="<?php echo base_url();?>helper_classes">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li>
                    <li  id="sb_widgets">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Widgets</span>
                        </a>
                        <ul class="ml-menu">
                            <li  id="sb_cards">
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Cards</span>
                                </a>
                                <ul class="ml-menu">
                                    <li id="sb_cards_basic">
                                        <a href="<?php echo base_url();?>widgets/cards_basic">Basic</a>
                                    </li>
                                    <li id="sb_cards_colored">
                                        <a href="<?php echo base_url();?>widgets/cards_colored">Colored</a>
                                    </li>
                                    <li id="sb_cards_noheader">
                                        <a href="<?php echo base_url();?>widgets/cards_noheader">No Header</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="sb_infobox"> 
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Infobox</span>
                                </a>
                                <ul class="ml-menu">
                                    <li id="sb_infobox1">
                                        <a href="<?php echo base_url();?>widgets/infobox_1">Infobox-1</a>
                                    </li>
                                    <li id="sb_infobox2">
                                        <a href="<?php echo base_url();?>widgets/infobox_2">Infobox-2</a>
                                    </li>
                                    <li id="sb_infobox3">
                                        <a href="<?php echo base_url();?>widgets/infobox_3">Infobox-3</a>
                                    </li>
                                    <li id="sb_infobox4">
                                        <a href="<?php echo base_url();?>widgets/infobox_4">Infobox-4</a>
                                    </li>
                                    <li id="sb_infobox5">
                                        <a href="<?php echo base_url();?>widgets/infobox_5">Infobox-5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li id="sb_ui">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li id="sb_ui_alerts">
                                <a href="<?php echo base_url();?>User_interface/alerts">Alerts</a>
                            </li>
                            <li id="sb_ui_animations">
                                <a href="<?php echo base_url();?>User_interface/animations">Animations</a>
                            </li>
                            <li id="sb_ui_badges">
                                <a href="<?php echo base_url();?>User_interface/badges">Badges</a>
                            </li>

                            <li id="sb_ui_breadcrumbs">
                                <a href="<?php echo base_url();?>User_interface/breadcrumbs">Breadcrumbs</a>
                            </li>
                            <li id="sb_ui_buttons">
                                <a href="<?php echo base_url();?>User_interface/buttons">Buttons</a>
                            </li>
                            <li id="sb_ui_collapse">
                                <a href="<?php echo base_url();?>User_interface/collapse">Collapse</a>
                            </li>
                            <li id="sb_ui_colors">
                                <a href="<?php echo base_url();?>User_interface/colors">Colors</a>
                            </li>
                            <li id="sb_ui_dialogs">
                                <a href="<?php echo base_url();?>User_interface/dialogs">Dialogs</a>
                            </li>
                            <li id="sb_ui_icons">
                                <a href="<?php echo base_url();?>User_interface/icons">Icons</a>
                            </li>
                            <li id="sb_ui_labels">
                                <a href="<?php echo base_url();?>User_interface/labels">Labels</a>
                            </li>
                            <li id="sb_ui_list_grp">
                                <a href="<?php echo base_url();?>User_interface/list_group">List Group</a>
                            </li>
                            <li id="sb_ui_media_obj">
                                <a href="<?php echo base_url();?>User_interface/media_object">Media Object</a>
                            </li>
                            <li id="sb_ui_modals">
                                <a href="<?php echo base_url();?>User_interface/modals">Modals</a>
                            </li>
                            <li id="sb_ui_notif">
                                <a href="<?php echo base_url();?>User_interface/notifications">Notifications</a>
                            </li>
                            <li id="sb_ui_pagination">
                                <a href="<?php echo base_url();?>User_interface/pagination">Pagination</a>
                            </li>
                            <li id="sb_ui_preloaders">
                                <a href="<?php echo base_url();?>User_interface/preloaders">Preloaders</a>
                            </li>
                            <li id="sb_ui_progres_bar">
                                <a href="<?php echo base_url();?>User_interface/progressbars">Progress Bars</a>
                            </li>
                            <li id="sb_ui_range_slider">
                                <a href="<?php echo base_url();?>User_interface/range_sliders">Range Sliders</a>
                            </li>
                            <li id="sb_ui_sortable_nestable">
                                <a href="<?php echo base_url();?>User_interface/sortable_nestable">Sortable & Nestable</a>
                            </li>
                            <li id="sb_ui_tabs">
                                <a href="<?php echo base_url();?>User_interface/tabs">Tabs</a>
                            </li>
                            <li id="sb_ui_thumbnails">
                                <a href="<?php echo base_url();?>User_interface/thumbnails">Thumbnails</a>
                            </li>
                            <li id="sb_ui_tooltips_popover">
                                <a href="<?php echo base_url();?>User_interface/tooltips_popovers">Tooltips & Popovers</a>
                            </li>
                            <li id="sb_ui_waves">
                                <a href="<?php echo base_url();?>User_interface/waves">Waves</a>
                            </li>
                        </ul>
                    </li>
                    <li id="sb_forms">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li id="sb_forms_basic">
                                <a href="<?php echo base_url();?>forms/basic_form_elements">Basic Form Elements</a>
                            </li>
                            <li id="sb_forms_advance">
                                <a href="<?php echo base_url();?>forms/advanced_form_elements">Advanced Form Elements</a>
                            </li>
                            <li id="sb_forms_examples">
                                <a href="<?php echo base_url();?>forms/form_examples">Form Examples</a>
                            </li>
                            <li id="sb_forms_validation">
                                <a href="<?php echo base_url();?>forms/form_validation">Form Validation</a>
                            </li>
                            <li id="sb_forms_wizard">
                                <a href="<?php echo base_url();?>forms/form_wizard">Form Wizard</a>
                            </li>
                            <li id="sb_forms_editors">
                                <a href="<?php echo base_url();?>forms/editors">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="pages/tables/jquery-datatable.html">Jquery Datatables</a>
                            </li>
                            <li>
                                <a href="pages/tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">perm_media</i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="pages/medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="pages/charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="pages/charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="pages/charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="pages/charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">map</i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="pages/maps/yandex.html">YandexMap</a>
                            </li>
                            <li>
                                <a href="pages/maps/jvectormap.html">jVectorMap</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>