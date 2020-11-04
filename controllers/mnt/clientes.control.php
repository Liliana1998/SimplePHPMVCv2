<? php

require_once  "modelos / mnt / clientes.model.php" ;
función  ejecutar () {
    $ viewData = array ();
    $ viewData [ "cln_txtfilter" ] = "" ;
    if ( isset ( $ _SESSION [ "cln_txtfilter" ])) {
        $ viewData [ "cln_txtfilter" ] = $ _SESSION [ "cln_txtfilter" ];
    }
    if ( isset ( $ _POST [ "btnFiltrar" ])) {
        mergeFullArrayTo ( $ _POST , $ viewData );
        $ _SESSION [ "cln_txtfilter" ] = $ viewData [ "cln_txtfilter" ];
    }
    if ( $ viewData [ "cln_txtfilter" ] === "" ) {
        $ viewData [ "clientes" ] = getAllClientes ();
    } más {
        $ viewData [ "clientes" ] = getClientesPorFiltro ( $ viewData [ "cln_txtfilter" ]);
    }

    renderizar ( "mnt / clientes" , $ viewData );
}
ejecutar ();
?>