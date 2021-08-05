(function ($) {
  $(window).on("load", function () {
    //Maps Init
    var map1 = L.map("maps").setView(
      [-6.957732994965709, 107.63974526786967],
      18
    );
    // var map2 = L.map("maps-cabang").setView(
    //   [-6.864995905257907, 107.5239654613454],
    //   18
    // );

    // Maps Layer
    L.tileLayer(
      "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1Ijoicm9kYWluZG9uZXNpYSIsImEiOiJjanhoZmgzemEwMTcwM25xanRzYTNsNXNpIn0.IqTDTlUAUCj78ZFscJqBkA",
      {
        attribution:
          'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: "mapbox/streets-v11",
      }
    ).addTo(map1);

    // L.tileLayer(
    //   "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=sk.eyJ1Ijoicm9kYWluZG9uZXNpYSIsImEiOiJjanhoZmgzemEwMTcwM25xanRzYTNsNXNpIn0.IqTDTlUAUCj78ZFscJqBkA",
    //   {
    //     attribution:
    //       'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
    //       'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     id: "mapbox/streets-v11",
    //   }
    // ).addTo(map2);

    // Marker
    var LeafIcon = L.Icon.extend({
      options: {
        iconSize: [20, 40],
        iconAnchor: [10, 40],
      },
    });
    var iconMap = new LeafIcon({ iconUrl: "assets/icon/marker.png" });

    L.marker([-6.957732994965709, 107.63974526786967], { icon: iconMap }).addTo(
      map1
    );
  //   L.marker([-6.864995905257907, 107.5239654613454], { icon: iconMap })
  //     .addTo(map2)
  //     .bindPopup("Roda Indonesia Office Cabang");
  });
})(jQuery);
