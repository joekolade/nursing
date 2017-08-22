
plugin.tx_nursing_list {
    view {
        # cat=plugin.tx_nursing_list/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:nursing/Resources/Private/Templates/
        # cat=plugin.tx_nursing_list/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:nursing/Resources/Private/Partials/
        # cat=plugin.tx_nursing_list/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:nursing/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_nursing_list//a; type=string; label=Default storage PID
        storagePid =
    }
}
