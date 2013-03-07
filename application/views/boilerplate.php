<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BoilerplateJS - JavaScript Reference Architecture</title>
    <!--[if lt IE 9]>
    <script type="text/javascript" charset="utf-8" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://cdnjs.cloudflare.com/ajax/libs/json2/20110223/json2.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://explorercanvas.googlecode.com/svn/trunk/excanvas.js"></script>
    <![endif]-->
    <link rel="icon" href="<?php echo base_url(); ?>/public/favicon.ico" type="image/x-icon">
        <!-- optional static style definition to render the presentation fast, before styling get applied via JS code.
        see 'src/modules/baseModule/theme/component.js' to see dynamic stylesheet setup on themes, TODO find a better way to supportstyles -->
    <link rel="stylesheet" type="text/css" id="themeStylesheet" href="<?php echo base_url(); ?>public/app/modules/baseModule/theme/gray/common.css"/>
</head>

    <body>

        <section id="page-content">
            <header>
                <a href="#" class="site-logo"> </a>
                <section class="theme"></section>
                <section class="language"></section>
            </header>
            <section class="lower-header-content">
                <aside>
                    <section class="main-menu"></section>
                </aside>
                <section class="appcontent"></section>
            </section>
            <footer>
                <section class="footer"></section>
            </footer>
        </section>

        <!-- we use jquery and underscore as 2 utilities in the BoilerplateJS core -->
        <script src="<?php echo base_url(); ?>public/libs/jquery/jquery-min.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>public/libs/underscore/underscore-1.3.3.js" type="text/javascript" charset="utf-8"></script>
        <!-- following libraries are used by the UrlController for client routing and browser history --> 
        <script src="<?php echo base_url(); ?>public/libs/signals/signals.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>public/libs/crossroads/crossroads.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>public/libs/hasher/hasher.min.js" type="text/javascript" charset="utf-8"></script>
        <!-- following library is used by the Mediator class for pub-sub event handling -->
        <script src="<?php echo base_url(); ?>public/libs/pubsub/pubsub-20120708.js" type="text/javascript" charset="utf-8"></script>
        <!-- sample UI component implementations use knockout for MVVM bindings, but not necessary for BPJS core --> 
        <script src="<?php echo base_url(); ?>public/libs/knockout/knockout-2.1.0pre.js" type="text/javascript" charset="utf-8"></script>
        <!-- backboneTodo sample UI component use following library, not necessary for BPJS core -->
        <script src="<?php echo base_url(); ?>public/libs/backbone/backbone-min-0.9.2.js" type="text/javascript" charset="utf-8"></script>
        <!-- following are used by complex UI component, salesDashboard. not needed by BPJS core -->
        <script src="<?php echo base_url(); ?>public/libs/jquery/jstree/jstree-1.0-rc3.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>public/libs/flot/jquery.flot.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>public/libs/flot/jquery.flot.resize.js" type="text/javascript" charset="utf-8"></script>
        <!-- BPJS initializer scripts-->
        <script src="<?php echo base_url(); ?>public/libs/boilerplate/groundwork.js" type="text/javascript" charset="utf-8"></script>
        
        <!-- following is the main entry script to the application code. we use requirejs to load main.js -->
        <script type="text/javascript" data-main="<?php echo base_url(); ?>public/main.js" src="<?php echo base_url(); ?>public/libs/require/require.js"></script>
    </body>
</html>
<!-- BoilerplateJS v0.3rc -->
