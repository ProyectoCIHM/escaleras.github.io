<?php

class modelo_vista
{

   public function agregar_escalera(){

   $agregar_Escalera = <<< agregar_Escalera
  <h4> Agregar Escalera </h4>
  <div class="row">
        <div class="col-md-3">
            <form id="formEscalera" method="POST" name="form_escalera">
                <label for="linea" class="form-label m-1">Línea</label>
                <input type="text" class="form-control m-1" id="linea" name="linea" placeholder="">

                <label for="nom_estacion" class="form-label m-1">Estación</label>
                <input type="text" class="form-control m-1" name="nom_estacion " placeholder="">

                <label for="num_equipo" class="form-label m-1">N° de Equipo</label>
                <input type="text" class="form-control m-1"  name="num_equipo" placeholder="">

                <label for="marca" class="form-label m-1">Marca </label>
                <input type="text" class="form-control m-1"  name="marca" placeholder="">

                <label for="modelo" class="form-label m-1">Modelo</label>
                <input type="text" class="form-control m-1"  name="modelo" placeholder="">

                <label for="altura" class="form-label m-1">Altura </label>
                <input type="text" class="form-control m-1"  name="altura" placeholder="">

                <label for="sentido" class="form-label m-1">Sentido</label>
                <input type="text" class="form-control m-1"  name="sentido" placeholder="">

                <label for="desnivel" class="form-label m-1">Desnivel</label>
                <input type="text" class="form-control m-1"  name="desnivel" placeholder="">
        </div>

        <div class="col-md-3">
            <label for="velocidad" class="form-label m-1">Velocidad </label>
            <input type="text" class="form-control m-1"  name="velocidad" placeholder="">

            <label for="inclinacion" class="form-label m-1">Inclinación</label>
            <input type="text" class="form-control m-1"  name="inclinacion" placeholder="">

            <label for="balaustrada" class="form-label m-0">Balaustrada</label>
            <input type="text" class="form-control m-1" name="balaustrada" placeholder="">

            <label for="num_anterior" class="form-label m-1">N° de Anterior</label>
            <input type="text" class="form-control m-1"  name="num_anterior" placeholder="">

            <label for="num_inventario" class="form-label m-1">Número de Inventario</label>
            <input type="text" class="form-control m-1"  name="num_inventario" placeholder="">

            <label for="año" class="form-label m-1">Año</label>
            <input type="text" class="form-control m-1"  name="año" placeholder="">

            <label for="antiguedad" class="form-label m-1">Antigüedad</label>
            <input type="text" class="form-control m-1" name="antiguedad" placeholder="">

            <label for="c_mantenimiento" class="form-label m-1">Compañia de Mantenimento</label>
            <input type="text" class="form-control m-1"  name=" c_mantenimiento" placeholder="">
        </div>

        <div class="col-md-3">
            <label for="proteccion" class="form-label m-1">Protección</label>
            <input type="text" class="form-control m-1"  name="proteccion" placeholder="">

            <label for="alimentacion" class="form-label m-1">Alimentación</label>
            <input type="text" class="form-control m-1" name="aliemntacion" placeholder="">

            <label for="c_plena_carga" class="form-label m-1">Corriente a plena Carga</label>
            <input type="text" class="form-control m-1" name=" c_plena_carga" placeholder="">

            <label for="c_arranque" class="form-label m-1">Corriente de arranque</label>
            <input type="text" class="form-control m-1"  name="c_arranque" placeholder="">

            <label for="nom_contrato" class="form-label m-1">Nombre del Contrato</label>
            <input type="text" class="form-control m-1"  name="nom_contrato " placeholder="">

            <label for="potencia_motor" class="form-label m-1">Potencia del motor</label>
            <input type="text" class="form-control m-1"  name="potencia_motor" placeholder="">

            <label for="num_contrato" class="form-label m-1">Número de Contrato</label>
            <input type="text" class="form-control m-1"  name="num_contrato" placeholder="">
        </div>
        </form>

        <div class="col-md-3" style="margin-top:525px;">
            <button type="button" class="btn btn-primary btn-sm m-1" onclick="enviar_formEsca()">Agregar</button>
            <button type="button" class="btn btn-secondary btn-sm m-1">Regresar</button>
        </div>
    </div>

    <script>
        function enviar_formEsca() {
            var url = "/prueba/EM/controlador/Controlador.php"; //dirección url del archivo que ejecuta datos
            //console.log('entre');
            datos = $('#formEscalera').serialize();
            console.log(variables);
            $.ajax({
                data: { variables: variables },
                dataType: "json",
                url: url,
                type: "post",
                success: resulta,
                error: function (xhr, ajaxoptions, throwerror) {
                    console.log(xhr.status);
                    console.log(throwerror);

                }
            });

        }

        function resulta(datos, textStatus, jq_XHR) {
            console.log("entre a result");
            console.log(datos);
            $("#contenedor_secundario").append(datos);
            $("#contenedor_principal").remove();

        }
    </script>




agregar_Escalera;

            return $agregar_Escalera;

   }


    public function escaleras_form()
    {

        $escaleras_form = <<<escaleras_Principal
      
        <ul class="nav nav-tabs pestania">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#nav-equipos">Equipos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#nav-averias">Averias</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#nav-personal">Personal</a>
        </li>
        </ul>
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-equipos" role="tabpanel" aria-labelledby="nav-equipos-tab"><table class="table"><thead>
        
        <div class="row">
        <div class="col-md-6">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
        <button class="btn btn-outline-secondary" type="button">Buscar</button>
        </div>
        </div>
        <div class="col-md-3">
        <button type="button" class="btn btn-primary" id="agregar_escalera" onclick="agregar_escalera()"
        value="agregar_escalera">Agregar Escalera</button>
        </div>
        </div>
        </div>
        
<tr>
            <th scope="col">N° de la Escalera</th>
            <th scope="col">Línea</th>
            <th scope="col">Estación</th>
            <th scope="col">N° Anterior</th>
            <th scope="col">N°Equipo</th>
            <th scope="col">N°Inventario</th>
            <th scope="col">N°Contrato</th>
            <th scope="col"></th>

        </tr>
        </thead>
        </table>
        </div>
        <div class="tab-pane fade" id="nav-averias" role="tabpanel" aria-labelledby="nav-averias-tab">aimee</div>
        <div class="tab-pane fade" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">amairani</div>
        <script>
            $(document).ready(function () {
            $(".pestania a").on('click', function (evt) {
                evt.preventDefault();
                $(this).tab("show")
            })
        });
       </script>
        
escaleras_Principal;

        return $escaleras_form;
    }
}
