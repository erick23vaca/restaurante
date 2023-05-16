<h1 class="text-center">ESTAMOS UBICADOS EN:</h1>
<div class="row">
  <div class="col-md-8">
            <div id="mapaDireccion"style="width:200%; height:300px;"></div>

          </div>
</div>

  <script type="text/javascript">
    function initMap() {
      // creacion del punto central del mapa
      var coordenadaCentral=new google.maps.LatLng(-1.0381424282304352, -78.58096754540446);
      // creando el mapaD
      var mapa1=new google.maps.Map(document.getElementById('mapaDireccion'),
        {
          center:coordenadaCentral,
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        }
      );
    }
  </script>
  <br><br><br>
