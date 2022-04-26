function initMap() {
    //Ubicacion del instituto
    const ies = {
      lat: 37.54843881630168,
      lng: -5.9673153837468496
    };
    //Ponemos el zoom bastante grande para poder ver nuestro instituto
    //Hemos escogido este ID que viene como prueba
    const map = new google.maps.Map(document.getElementById("map"), {
      mapId: "8e0a97af9386f",
      zoom: 20,
      center: ies,
      zoomControl: false,
      scaleControl: true,
    });
    //Este codigo nos sirve para mostrar el icono rojo de posicion
    const marker = new google.maps.Marker({
      position: ies,
      map: map,
    });
  }