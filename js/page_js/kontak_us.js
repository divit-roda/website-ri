    //Maps Init
    var map1 = L.map('maps').setView([1.4547428, 124.8155885], 18);

    // Maps Layer
    L.tileLayer(
      "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1Ijoicm9kYWluZG9uZXNpYSIsImEiOiJjanhoZmgzemEwMTcwM25xanRzYTNsNXNpIn0.IqTDTlUAUCj78ZFscJqBkA",
        {attribution:
          'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: "mapbox/streets-v11",
        }).addTo(map1);

    // Marker
    var LeafIcon = L.Icon.extend({
      options: {
        iconSize: [20, 40],
        iconAnchor: [10, 40],
      },
    });
    var iconMap = new LeafIcon({ iconUrl: "assets/icon/marker.png" });

    L.marker([1.4547428, 124.8155885], { icon: iconMap }).addTo(
      map1
    );