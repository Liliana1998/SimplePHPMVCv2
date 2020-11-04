<? php 
require_once  "libs / dao.php" ;
/ *
catecod bigint (10) AI PK
catenom varchar (128)
cateest char (3)
* /
function  getAllcategorias () {
    $ sqlstr = "SELECCIONAR * de Categorías;" ;
    $ resultSet = array ();
    $ ConjuntoResultados = obtenerRegistros ( $ sqlstr );
    return  $ resultSet ;
}
function  getcategoriaById ( $ catecod ) {
    $ sqlstr = "SELECT * from Categorias donde catecod =% d;" ;
    return  obtenerUnRegistro ( sprintf ( $ sqlstr , $ catecod ));
}
function  getcategoriasPorFiltro ( $ filtro ) {
    $ ffiltro = $ filtro . '%' ;
    $ sqlstr = "SELECT * de Categorías donde catecod como '% s' o catenom como '% s';" ;
    return  obtenerRegistros ( sprintf ( $ sqlstr , $ ffiltro , $ ffiltro ));
}
function  addNewcategoria ( $ catenom , $ cateest ) {
    $ insSql = "INSERT INTO` Categorias` (`catenom`,` cateest`)
VALORES ('% s', '% s'); " ;
    return  ejecutarNonQuery (
        sprintf (
            $ insSql ,
            $ catenom ,
            $ cateest
        )
    );
}
function  updateCategoria ( $ catenom , $ cateest , $ catecod ) {
    $ updsql = "ACTUALIZAR` Categorias` SET `catenom` = '% s',` cateest` = '% s',
    DONDE `catecod` =% d; " ;
    return  ejecutarNonQuery (
        sprintf (
            $ updsql ,
            $ catenom ,
            $ cateest ,
            $ catecod
        )
    );
}
function  deleteCategoria ( $ catecod ) {
    return  ejecutarNonQuery ( sprintf ( "ELIMINAR de categorías donde catecod =% d;" , $ catecod ));
}
?>