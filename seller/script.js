function init() {
    const initialPosition = { lat: 21.1521, lng: 72.8717 };
  
    const map = new google.maps.Map(document.getElementById('map'), {
      center: initialPosition,
      zoom: 15
    });
  
    const marker = new google.maps.Marker({ map, position: initialPosition });
  }