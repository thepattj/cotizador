<?php
 include("menup.php");
?>
	<div class="centro">
      <div class="div1"><H1>Catálogo de datos</H1></div>
      <div class="div1"></div> 
      <div class="div1"></div>
      <div class="div1"></div>
      <form onsubmit="return false" ="" id="formulariobusq">
        <div class="div1">Busqueda de clientes</div>
        <div class="div2" ><input style="margin-left: 7%;" id="c_nombre" type="text" placeholder="Nombre de cliente"> </div><div class="div2"><button style="margin-left: 5%;"><img src="img/searchm.png" style="width: 12%; height: 75%;"> </button> </div>
      </form>
      <div class="resultado">
          <div class="tabla">
              <div class="div1">Resultados de busqueda ...</div>
              <div class="div1"></div><div class="div1"></div>
              <div class="div65">Empresa Uno SA de CV</div><div class="div35"><div class="div2"></div><div class="div2"><div class="div3"><img style="width: 55%; height: 85%;" src="img/updatem.png"></div><div class="div3"><img style="width: 55%; height: 85%;" src="img/deletem.png"></div><div class="div3"><img style="width:55%; height: 85%;" src="img/viewm.png"></div></div></div>
              
              <div class="div65">Empresa Dos SA de CV</div><div class="div35"><div class="div2"></div><div class="div2"><div class="div3"><img style="width: 55%; height: 85%;" src="img/updatem.png"></div><div class="div3"><img style="width: 55%; height: 85%;" src="img/deletem.png"></div><div class="div3"><img style="width:55%; height: 85%;" src="img/viewm.png"></div></div></div>
          </div>
      </div>
  </div>


<?php
 include("down.php");
?>