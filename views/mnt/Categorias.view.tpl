< sección > < h1 > Mantenimiento de Categorías </ h1 > </ sección >
< h />
< form  action = " index.php? page = categorias "  method = " post " >
< section  class = " fila " >
  < h2 > Filtrar por </ h2 >
  < div  class = " col-sm-12 col-md-10 " >
    < label  class = " col-sm-12 col-md-3 "  for = " cat_txtfilter " > Nombre </ label >
    < input  type = " text "  name = " cat_txtfilter "  id = " cat_txtfilter "  value = " { { cat_txtfilter } } "
      placeholder = " Nombre "  class = " col-sm-12 col-md-9 " />
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
              < Una  clase = " btn profundidad-1 s-margen "  href = " index.php? Page = categoria & mode = Ins y catecod = 0 " > < lapso  de clase = " ion-más-círculo " > </ lapso > </ una >
        </ th >
      </ tr >
    </ thead >
    < tbody >
      { { categorías de foreach } }
        < tr >
          < td >
            { {catecod } }
          </ td >
          < td >
            { {catenom } }
          </ td >
        < td  class = " centro " >
            < Una  clase = " btn profundidad-1 s-margen "  href = " index.php page = categoria & mode = UPD y catecod = { { catecod } } " > < lapso de  clase = " ion-edit " > </ una > y nbsp ;
            < Una  clase = " btn profundidad-1 s-margen "  href = " index.php page = categoria & mode = DSP y catecod = { { catecod } } " > < lapso de  clase = " -ojo ion " > </ una > y nbsp ;
            < Una  clase = " btn profundidad-1 s-margen "  href = " index.php? Page = categoria & mode = DEL y catecod = { { catecod } } " > < lapso de  clase = " ion-basura-a " > </ una >
          </ td >
        </ tr >
        { {endfor categorias } }
    </ tbody >
    < tfoot >
    </ tfoot >
  </ tabla >
</ sección >