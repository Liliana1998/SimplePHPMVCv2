< sección > < h1 > Mantenimiento de Clientes </ h1 > </ sección >
< h />
< form  action = " index.php? page = clientes "  method = " post " >
< section  class = " fila " >
  < h2 > Filtrar por </ h2 >
  < div  class = " col-sm-12 col-md-10 " >
    < label  class = " col-sm-12 col-md-3 "  for = " cln_txtfilter " > Identidad | Nombre </ label >
    < input  type = " text "  name = " cln_txtfilter "  id = " cln_txtfilter "  value = " { { cln_txtfilter } } "
      placeholder = " Identidad | Nombre "  class = " col-sm-12 col-md-9 " />
  </ div >
  < div  class = " col-sm-12 col-md-2 " >
    < button  type = " submit "  name = " btnFiltrar " > Actualizar </ button >
  </ div >
</ sección >
</ formulario >
< h />
< section  class = " fila " >
  < table  class = " col-sm-12 " >
    < thead  class = " zebra " >
      < tr >
        < th >
          Código
        </ th >
        < th >
          Nombre
        </ th >
        < th >
          Telefono
        </ th >
        < th >
          Correo
        </ th >
        < th >
              < Una  clase = " btn profundidad-1 s-margen "  href = " index.php? Page = cliente & mode = INS y ClientID = 0 " > < lapso de  clase = " -más-rodeó ion " > </ lapso > </ una >
        </ th >
      </ tr >
    </ thead >
    < tbody >
      { { clientes foreach } }
        < tr >
          < td >
            { {clientid } }
          </ td >
          < td >
            { {nombre de cliente } }
          </ td >
          < td >
            { {clientphone1 } } { {clientphone2 } }
          </ td >
          < td >
            { {clientemail } }
          </ td >
              < td  class = " centro " >
            < Una  clase = " btn profundidad-1 s-margen "  href = " index.php page = cliente & mode = UPD y ClientID = { { ClientID } } " > < lapso de  clase = " ion-edit " > </ una > y nbsp ;
            < Una  clase = " btn profundidad-1 s-margen "  href = " index.php page = cliente & mode = DSP y ClientID = { { ClientID } } " > < lapso de  clase = " -ojo ion " > </ una > y nbsp ;
            < Una  clase = " btn profundidad-1 s-margen "  href = " index.php? Page = cliente & mode = DEL y ClientID = { { ClientID } } " > < lapso de  clase = " ion-basura-a " > </ una >
          </ td >
        </ tr >
        { {endfor clientes } }
    </ tbody >
    < tfoot >
    </ tfoot >
  </ tabla >
</ sección >