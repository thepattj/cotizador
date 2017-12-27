<?php
 include("menup.php");
?>
	<div class="centro">
            <div class="div1"><H1>Agrega los datos de la nueva empresa</H1></div>

            <form id="formulariolta" onsubmit="return false">
                  <div class="div1"></div>
                  <div class="div1"></div>
                  <div class="div2">Nombre de la empresa: </div><div class="div2">Giro de la empresa:</div>
                  <div class="div2" style="margin-left: 1%;"><input type="text" id="nombre"> </div><div class="div2"><input type="text" id="giro"> </div>
                  <div class="div2">Nombre de contacto: </div><div class="div2">Teléfono de contacto:</div>
                  <div class="div2" style="margin-left: 1%;"><input type="text" id="nombrec"> </div><div class="div2"><input type="text" id="telefono"> </div>
                  <div class="div2">Correo de contacto: </div><div class="div2">Puesto de contacto:</div>
                  <div class="div2" style="margin-left: 1%;"><input type="text" id="correo"> </div><div class="div2"><input type="text" id="puesto"> </div>
                  <div class="div1"></div>
                  <div class="div1"><H1>Datos Para Cotización</H1></div>
                  <div class="div2">Dato1: </div><div class="div2">Dato2:</div>
                  <div class="div2" style="margin-left: 1%;"><input type="text" id="nombre"> </div><div class="div2"><input type="text" id="giro"> </div> 
                  <div class="div2">Dato3: </div><div class="div2">Dato4:</div>
                  <div class="div2" style="margin-left: 1%;"><input type="text" id="nombre"> </div><div class="div2"><input type="text" id="giro"> </div> 
                  <div class="div2">Dato5: </div><div class="div2">Dato6:</div>
                  <div class="div2" style="margin-left: 1%;"><input type="text" id="nombre"> </div><div class="div2"><input type="text" id="giro"></div> 
                  <div class="div2" style="margin-left: 1%;"><button onclick="guardarform" style="background: rgba(54,181,73,.7)">Guardar</button></div><div class="div2"><button onclick="limpiarform" style="background: rgba(255,0,0,.7)">Cancelar</button> </div> 
            </form>

            <div class="div1"></div>
    </div>


<?php
 include("down.php");
?>
