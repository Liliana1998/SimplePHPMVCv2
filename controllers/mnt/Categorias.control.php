<? php

require_once  "modelos / mnt / Categorias.model.php" ;
función  ejecutar () {
    $ viewData = array ();
    $ viewData [ "cat_txtfilter" ] = "" ;
    if ( isset ( $ _SESSION [ "cat_txtfilter" ])) {
        $ viewData [ "cat_txtfilter" ] = $ _SESSION [ "cat_txtfilter" ];
    }
    if ( isset ( $ _POST [ "btnFiltrar" ])) {
        mergeFullArrayTo ( $ _POST , $ viewData );
        $ _SESSION [ "cat_txtfilter" ] = $ viewData [ "cat_txtfilter" ];
    }
    if ( $ viewData [ "cat_txtfilter" ] === "" ) {
        $ viewData [ "Categorias" ] = getAllCategorias ();
    } más {
        $ viewData [ "Categorias" ] = getCategoriasPorFiltro ( $ viewData [ "cat_txtfilter" ]);
    }
    renderizar ( "mnt / Categorias" , $ viewData );
}
ejecutar ();
?>