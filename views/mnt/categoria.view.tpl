<h1>Ficha de desarrollo</h1>
<section>
    <h2>{{cuenta}} {{nombre}}</h2>
    <em>Correo: {{correo}}</em>
</section>    
<section>
    <h2>Categoria</h2>
    <table>
        <tr>
            <td>
                Código
            </td>
            <td>
                Proyecto
            </td>
        </tr>
        {{foreach proyectos}}
        <tr>
            <td>
                {{id}}
            </td>
            <td>
                {{name}}
            </td>
        </tr>
        {{endfor proyectos}}
    </table>    
</section>