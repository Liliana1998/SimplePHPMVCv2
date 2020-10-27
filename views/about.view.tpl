<h1> Ficha de Desarollo </h1>
<section>
    <h2>{{Cuenta}} {{Nombre}}</h2>
    <em> Correo: {{Correo}} </em>
</section>
<section>
    <h2> Proyectos </h2>
    <table>
        <tr>
            <td>
                Codigo
            </td>
            <td>
                Proyecto
            </td>
        </tr>
        {{foreach Proyectos}}
        <tr>
            <td>
                {{id}}
            </td>
            <td>
                {{name}}
            </td>
        </tr>
        {{endfor Proyectos}}
    </table>
</section>

<section>
    <h1> CURRICULUM VITAE </h1>
    <h2> Liliana Gabriela Ochoa Banegas</h2>
   
    <table>
        <tr>
            <td>
                
            </td>
            <td>
               <h3> Datos Personales </h3>
            </td>
        </tr>
        {{foreach DatosPersonales}}
        <tr>
            <td>
                {{id}}
            </td>
            <td>
                {{name}}
            </td>
        </tr>
        {{endfor DatosPersonales}}
    </table>
</section>

<section>
    <h2> FORMACIÓN ACADEMICA </h2>
    <table>
        <tr>
            <td>
              
            </td>
            <td>
                
            </td>
        </tr>
        {{foreach EstudiosAcademicos}}
        <tr>
            <td>
                {{id}}
            </td>
            <td>
                {{name}}
            </td>
        </tr>
        {{endfor EstudiosAcademicos}}
    </table>
</section>

<section>
<h2> Documentación </h2>
   <img src= "image/foto1.jpg" alt="Mis foto">
   <img src= "image/foto2.jpg" alt="Mis foto">
   <img src= "image/foto3.jpg" alt="Mis foto">
   <img src= "image/foto4.jpg" alt="Mis foto">
</section>