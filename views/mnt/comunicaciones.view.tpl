<section><h1>Comunicaciones Clientes</h1></section>
<hr/>
<form action="index.php?page=comunicaciones" method="post">
<section class="row">
  <h2>Filtrar por</h2>
  <div class="col-sm-12 col-md-8">
    <label class="col-sm-12 col-md-3" for="com_txtfilter">Código</label>
    <input type="text" name="com_txtfilter" id="com_txtfilter" value="{{com_txtfilter}}"
      placeholder="Código" class="col-sm-12 col-md-9"/>
  </div>
  <div class="col-sm-12 col-md-2">
    <button type="submit" name="btnFiltrar">Actualizar</button>
  </div>
</section>
</form>
<hr/>
<section class="row">
  <table class="col-sm-12">
    <thead class="zebra">
      <tr>
        <th>
          Código
        </th>
        <th>
          Fecha Comunicación
        </th>
        <th>
          Usuario
        </th>
        <th>
          Tipo
        </th>
        <th>
          <a class="btn depth-1 s-margin" href="index.php?page=comunicacion&mode=INS&cmnid=0"><span class="ion-plus-circled"></span></a>
        </th>
      </tr>
    </thead>
    <tbody>
      {{foreach comunicaciones}}
        <tr>
          <td>
            {{cmnid}}
          </td>
          <td>
            {{cmnfching}}
          </td>
          <td>
            {{cmnusring}}
          </td>
          <td>
            {{cmntipo}}
          </td>
          <td class="center">
            <a class="btn depth-1 s-margin" href="index.php?page=comunicacion&mode=DSP&cmnid={{cmnid}}"><span class="ion-eye"></a>
          </td>
        </tr>
        {{endfor comunicaciones}}
    </tbody>
    <tfoot>

    </tfoot>
  </table>
</section>