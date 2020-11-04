<? php 
/ *
catecod bigint (10) AI PK
catenom varchar (128)
cateest char (3)
 * /
require_once  "modelos / mnt / categorias.model.php" ;
función  ejecutar () {
    $ viewData = array ();
    $ viewData [ "modo" ] = "" ;
    $ viewData [ "modedsc" ] = "" ;
    $ viewData [ "catecod" ] = 0 ;
    $ viewData [ "catenom" ] = "" ;
    $ viewData [ "cateest" ] = "ACT" ;
    $ viewData [ "cateest_ACT" ] = "seleccionado" ;
    $ viewData [ "cateest_INA" ] = "" ;
    $ viewData [ "cateest_EST" ] = "" ;
    $ viewData [ "solo lectura" ] = "" ;
    $ viewData [ "deletemsg" ] = "" ;
  
    $ modedsc = matriz (
      "INS" => "Nueva Categoria" ,
      "UPD" => "Actualizar categoría% s" ,
      "DEL" => "Eliminar Categoria% s" ,
      "DSP" => "Detalle de categoría% s"
    );
    if ( isset ( $ _GET [ "modo" ])) {
        $ viewData [ "modo" ] = $ _GET [ "modo" ];
        $ viewData [ "catecod" ] = intval ( $ _GET [ "catecod" ]);
        if (! isset ( $ modedsc [ $ viewData [ "modo" ]])) {
            redirectWithMessage ( "No se puede realizar esta operación." , "index.php? page = categorias" );
            morir ();
        }
    }

    if ( isset ( $ _POST [ "btnsubmit" ])) {
        mergeFullArrayTo ( $ _POST , $ viewData );
       
        if (! ( isset ( $ _SESSION [ "cln_csstoken" ]) && $ _SESSION [ "cln_csstoken" ] == $ viewData [ "xsstoken" ])) {
            redirectWithMessage ( "No se puede realizar esta operación." , "index.php? page = categorias" );
            morir ();
        }


        switch ( $ viewData [ "modo" ]) {
        caso  "INS" :
            $ resultado = addNewcategoria (
                $ viewData [ "catenom" ],
                $ viewData [ "cateest" ]
               
            );
            if ( $ resultado > 0 ) {
                redirectWithMessage ( "Guardado Exitosamente" , "index.php? page = categorias" );
                morir ();
            }
            romper ;
        caso  "UPD" :
            $ resultado = updateCategoria (
                $ viewData [ "catenom" ],
                $ viewData [ "cateest" ],
                $ viewData [ "catecod" ]
            );
            if ( $ resultado > = 0 ) {
                redirectWithMessage ( "Actualizado Exitosamente" , "index.php? page = categorias" );
                morir ();
            }
            romper ;
        caso  "DEL" :
            $ resultado = deleteCategoria ( $ viewData [ "catecod" ]);
            if ( $ resultado > 0 ) {
                redirectWithMessage ( "Eliminado Exitosamente" , "index.php? page = categorias" );
                morir ();
            }
            romper ;
        }
    }
    if ( $ viewData [ "modo" ] === "INS" ) {
        $ viewData [ "modedsc" ] = $ modedsc [ $ viewData [ "modo" ]];
    } más {
        $ categoriaDBData = getcategoriaById ( $ viewData [ "catecod" ]);
        mergeFullArrayTo ( $ categoriaDBData , $ viewData );
        $ viewData [ "modedsc" ] = sprintf ( $ modedsc [ $ viewData [ "modo" ]], $ viewData [ "catenom" ]);
        $ viewData [ "cateest_ACT" ] = ( $ viewData [ "cateest" ] == "ACT" )? "seleccionado" : "" ;
        $ viewData [ "cateest_INA" ] = ( $ viewData [ "cateest" ] == "INA" )? "seleccionado" : "" ;
        $ viewData [ "cateest_EST" ] = ( $ viewData [ "cateest" ] == "EST" )? "seleccionado" : "" ;
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
    renderizar ( "mnt / categoria" , $ viewData );
}

ejecutar ();
?>