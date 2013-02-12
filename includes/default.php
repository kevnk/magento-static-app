<?php
    global $app;
    global $handle;
    
    // TODO: Check if files exists, otherwise, stop and display svn script to run
/*  
    $ cd static/;
    $ svn checkout http://svn.magentocommerce.com/source/branches/1.7/js/ js
    $ svn checkout http://svn.magentocommerce.com/source/branches/1.7/app/design/frontend/base/default/template/ app/default/template
    $ svn checkout http://svn.magentocommerce.com/source/branches/1.7/skin/frontend/base/default/ skin/default
    $ find . -type d -name .svn -print0 | xargs -0 rm -rf
    $ svn checkout http://svn.magentocommerce.com/source/branches/1.7/skin/frontend/default/default/css skin/default/css
    $ svn checkout http://svn.magentocommerce.com/source/branches/1.7/skin/frontend/default/default/images skin/default/images --force
    $ find . -type d -name .svn -print0 | xargs -0 rm -rf
*/
    
    
    // Set global fallback template
    $app->setTemplate('page/1column.phtml', true);

    // Add Default Blocks
    $app->addBlock( 'page/html/head.phtml', 'head', '', 'page/html_head', true )
        ->addBlock( 'page/html/header.phtml', 'header', '', 'page/html', true )
            ->addBlock( 'catalogsearch/form.mini.phtml', 'top.search', 'topSearch', 'core/template', true )
            // ->addBlock( 'page/switch/languages.phtml', 'store_language', 'store_language', 'page/switch', true )
            ->addContentBlock( 'topMenu', 'page/html/topmenu.phtml', 'catalog.topnav', '', 'page/html_topmenu', true )
        ->addBlock( 'page/html/footer.phtml', 'footer', '', 'page/html', true );
    
    if (isset($_GET['msg'])) {
        $msgType = $_GET['msg'];
        // TODO: add global messages when url has params
    }

    // Add Custom JS
    // Add Custom CSS 
    

    // Home Page
    if ($handle == 'cms_index_index') {
        
    }


    