
plugin.tx_nursing_list {
    view {
        templateRootPaths.0 = EXT:nursing/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_nursing_list.view.templateRootPath}
        partialRootPaths.0 = EXT:nursing/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_nursing_list.view.partialRootPath}
        layoutRootPaths.0 = EXT:nursing/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_nursing_list.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_nursing_list.persistence.storagePid}
        recursive = 2
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

// @var page PAGE

page.includeCSS {
    tx_nursing = EXT:nursing/Resources/Public/Css/nursing_styles.css
}
page.includeJSFooter {
    tx_nursing = EXT:nursing/Resources/Public/JavaScript/tx_nursing.js
}



# Bootstrap select

page.includeCSS {
    tx_nursing_bootstrap_select = EXT:nursing/Resources/Public/Css/bootstrap-select.css
}
page.includeJSFooterlibs {
    tx_nursing_bootstrap_select = EXT:nursing/Resources/Public/JavaScript/bootstrap-select.js
}
