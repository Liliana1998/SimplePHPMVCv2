<? php 
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
require_once  "modelos / mnt / clientes.model.php" ;
función  ejecutar () {
    $ viewData = array ();
    $ viewData [ "modo" ] = "" ;
    $ viewData [ "modedsc" ] = "" ;
    $ viewData [ "clientid" ] = 0 ;
    $ viewData [ "nombre de cliente" ] = "" ;
    $ viewData [ "clientgender" ] = "FEM" ;
    $ viewData [ "clientphone1" ] = "" ;
    $ viewData [ "clientphone2" ] = "" ;
    $ viewData [ "clientemail" ] = "" ;
    $ viewData [ "clientIdnumber" ] = "" ;
    $ viewData [ "clientbio" ] = "" ;
    $ viewData [ "clientstatus" ] = "ACT" ;
    $ viewData [ "clientgender_FEM" ] = "seleccionado" ;
    $ viewData [ "clientgender_MAS" ] = "" ;
    $ viewData [ "clientstatus_ACT" ] = "seleccionado" ;
    $ viewData [ "clientstatus_INA" ] = "" ;
    $ viewData [ "solo lectura" ] = "" ;
    $ viewData [ "deletemsg" ] = "" ;
  
    $ modedsc = matriz (
      "INS" => "Nuevo Cliente" ,
      "UPD" => "Actualizar Cliente% s" ,
      "DEL" => "Eliminar Cliente% s" ,
      "DSP" => "Detalle de Cliente% s"
    );
    if ( isset ( $ _GET [ "modo" ])) {
        $ viewData [ "modo" ] = $ _GET [ "modo" ];
        $ viewData [ "clientid" ] = intval ( $ _GET [ "clientid" ]);
        if (! isset ( $ modedsc [ $ viewData [ "modo" ]])) {
            redirectWithMessage ( "No se puede realizar esta operación." , "index.php? page = clientes" );
            morir ();
        }
    }

    if ( isset ( $ _POST [ "btnsubmit" ])) {
        mergeFullArrayTo ( $ _POST , $ viewData );
        // Verificación de XSS_Token
        if (! ( isset ( $ _SESSION [ "cln_csstoken" ]) && $ _SESSION [ "cln_csstoken" ] == $ viewData [ "xsstoken" ])) {
            redirectWithMessage ( "No se puede realizar esta operación." , "index.php? page = clientes" );
            morir ();
        }

        // Validaciones de Entrada de Datos


        switch ( $ viewData [ "modo" ]) {
        caso  "INS" :
            $ resultado = addNewClient (
                $ viewData [ "nombre de cliente" ],
                $ viewData [ "clientgender" ],
                $ viewData [ "clientphone1" ],
                $ viewData [ "clientphone2" ],
                $ viewData [ "clientemail" ],
                $ viewData [ "clientIdnumber" ],
                $ viewData [ "clientbio" ],
                $ viewData [ "clientstatus" ]
            );
            if ( $ resultado > 0 ) {
                redirectWithMessage ( "Guardado Exitosamente" , "index.php? page = clientes" );
                morir ();
            }
            romper ;
        caso  "UPD" :
            $ resultado = updateCliente (
                $ viewData [ "nombre de cliente" ],
                $ viewData [ "clientgender" ],
                $ viewData [ "clientphone1" ],
                $ viewData [ "clientphone2" ],
                $ viewData [ "clientemail" ],
                $ viewData [ "clientIdnumber" ],
                $ viewData [ "clientbio" ],
                $ viewData [ "clientstatus" ],
                $ viewData [ "clientid" ]
            );
            if ( $ resultado > = 0 ) {
                redirectWithMessage ( "Actualizado Exitosamente" , "index.php? page = clientes" );
                morir ();
            }
            romper ;
        caso  "DEL" :
            $ resultado = deleteCliente ( $ viewData [ "clientid" ]);
            if ( $ resultado > 0 ) {
                redirectWithMessage ( "Eliminado Exitosamente" , "index.php? page = clientes" );
                morir ();
            }
            romper ;
        }
    }
    if ( $ viewData [ "modo" ] === "INS" ) {
        $ viewData [ "modedsc" ] = $ modedsc [ $ viewData [ "modo" ]];
    } más {
        $ clientDBData = getClienteById ( $ viewData [ "clientid" ]);
        mergeFullArrayTo ( $ clientDBData , $ viewData );
        $ viewData [ "modedsc" ] = sprintf ( $ modedsc [ $ viewData [ "modo" ]], $ viewData [ "nombre de cliente" ]);
        $ viewData [ "clientgender_FEM" ] = ( $ viewData [ "clientgender" ] == "FEM" )? "seleccionado" : "" ;
        $ viewData [ "clientgender_MAS" ] = ( $ viewData [ "clientgender" ] == "MAS" )? "seleccionado" : "" ;
        $ viewData [ "clientstatus_ACT" ] = ( $ viewData [ "clientstatus" ] == "ACT" )? "seleccionado" : "" ;
        $ viewData [ "clientstatus_INA" ] = ( $ viewData [ "clientstatus" ] == "INA" )? "seleccionado" : "" ;
        // Sacar la data de la DB
        if ( $ viewData [ "modo" ]! = 'UPD' ) {
            $ viewData [ "readonly" ] = "readonly" ;
        }
        if ( $ viewData [ "mode" ] == 'DEL' ) {
            $ viewData [ "deletemsg" ] = "Esta seguro de eliminar este registro, es una operación definitiva." ;
        }
    }
    // Crear un token unico
    // Guardar en sesión ese token unico para su verificación posterior
    $ viewData [ "xsstoken" ] = uniqid ( "cln" , verdadero );
    $ _SESSION [ "cln_csstoken" ] = $ viewData [ "xsstoken" ];
    renderizar ( "mnt / cliente" , $ viewData );
}

ejecutar ();
?>