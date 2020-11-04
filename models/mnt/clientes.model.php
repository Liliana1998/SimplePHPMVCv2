<? php 
require_once  "libs / dao.php" ;
/ *
ID de cliente bigint (15) AI PK
nombre de cliente varchar (128)
charla clientegender (3)
clientphone1 varchar (255)
clientphone2 varchar (255)
clientemail varchar (255)
clientIdnumber varchar (45)
clientbio varchar (5000)
char de estado del cliente (3)
* /
function  getAllClientes () {
    $ sqlstr = "SELECCIONAR * de los clientes;" ;
    $ resultSet = array ();
    $ ConjuntoResultados = obtenerRegistros ( $ sqlstr );
    return  $ resultSet ;
}
function  getClienteById ( $ clientid ) {
    $ sqlstr = "SELECT * de clientes donde clientid =% d;" ;
    return  obtenerUnRegistro ( sprintf ( $ sqlstr , $ clientid ));
}
function  getClientesPorFiltro ( $ filtro ) {
    $ ffiltro = $ filtro . '%' ;
    $ sqlstr = "SELECCIONAR * de clientes donde clientIdnumber como '% s' o nombre de cliente como '% s';" ;
    return  obtenerRegistros ( sprintf ( $ sqlstr , $ ffiltro , $ ffiltro ));
}
function  addNewClient ( $ clientname , $ clientgender , $ clientphone1 , $ clientphone2 , $ clientemail , $ clientIdnumber , $ clientbio , $ clientstatus ) {
    $ insSql = "INSERT INTO` clients` (`clientname`,` clientgender`, `clientphone1`,` clientphone2`,
`clientemail`,` clientIdnumber`, `clientbio`,` clientstatus`, `clientdatecrt`,` clientusercreates`)
VALORES ('% s', '% s', '% s', '% s', '% s', '% s', '% s', '% s', ahora (), 0); " ;
    return  ejecutarNonQuery (
        sprintf (
            $ insSql ,
            $ nombre de cliente ,
            $ clientgender ,
            $ clientphone1 ,
            $ clientphone2 ,
            $ clientemail ,
            $ clientIdnumber ,
            $ clientbio ,
            $ clientstatus
        )
    );
}
function  updateCliente ( $ clientname , $ clientgender , $ clientphone1 , $ clientphone2 , $ clientemail , $ clientIdnumber , $ clientbio , $ clientstatus , $ clientid ) {
    $ updsql = " UPDATE` clients` SET `clientname` = '% s',` clientgender` = '% s',
`clientphone1` = '% s',` clientphone2` = '% s', `clientemail` = '% s',
`clientIdnumber` = '% s',` clientbio` = '% s', `clientstatus` = '% s'
DONDE `clientid` =% d; " ;
    return  ejecutarNonQuery (
        sprintf (
            $ updsql ,
            $ nombre de cliente ,
            $ clientgender ,
            $ clientphone1 ,
            $ clientphone2 ,
            $ clientemail ,
            $ clientIdnumber ,
            $ clientbio ,
            $ clientstatus ,
            $ clientid
        )
    );
}
function  deleteCliente ( $ clientid ) {
    return  ejecutarNonQuery ( sprintf ( "ELIMINAR de los clientes donde clientid =% d;" , $ clientid ));
}
?>