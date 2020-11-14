<h1>{{modedsc}}</h1>

<section>
    <form method="post" action="index.php?page=comunicacion&mode={{mode}}&cmnid={{cmnid}}">
    <input type="hidden" name="mode" value="{{mode}}"/>
    <input type="hidden" name="cmnid" value="{{cmnid}}"/>
    <input type="hidden" name="xsstoken" value="{{xsstoken}}"/>

    <div>
        <label for="clientid">ID Cliente</label>
        <input type="text" name="clientid" id="clientid" value="{{clientid}}" placeholder="ID Cliente" />
    </div>
    <div>
        <label for="cmnnotas">Notas</label>
        <input type="text" name="cmnnotas" id="cmnnotas" value="{{cmnnotas}}" placeholder="Notas" />
    </div>
    <div>
        <label for="cmntags">Etiquetas</label>
        <input type="text" name="cmntags" id="cmntags" value="{{cmntags}}" placeholder="Etiquetas" />
    </div>
    <div>
        <label for="cmnfching">Fecha comunicación</label>
        <input type="text" name="cmnfching" id="cmnfching" value="{{cmnfching}}" placeholder="Fecha Comunicacion" />
    </div>
    <div>
        <label for="cmnusring">Usuario</label>
        <input type="text" name="cmnusring" id="cmnusring" value="{{cmnusring}}" placeholder="Usuario" />
    </div>
    <div>
        <label for="cmntipo">Tipo</label>
        <select name="cmntipo" id="cmntipo">
            <option value="ADM" {{cmntipo_ADM}}>Administración</option>
            <option value="COM" {{cmntipo_COM}}>Común</option>
        </select>
    </div>

    <button id="btnsubmit" name="btnsubmit" type="submit">Enviar</button>
    <button id="btncancel">Cancelar</button>
    </form>
</section>

<script>
    $().ready(function(){
        $("#btncancel").click(function(e){
            e.preventDefault();
            e.stopPropagation();
            location.assign("index.php?page=comunicaciones");
        });
    });
</script>