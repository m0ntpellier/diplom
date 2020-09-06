var map;
    DG.then(function () {
        map = DG.map('map', {
            center: [56.1569154, 101.5941626],
            zoom: 17
        });
        DG.marker([56.1569154, 101.5941626]).addTo(map).bindPopup('Приходите и наслаждайтесь фильмами с нами!');
        DG.geoJson(data, {
                    onEachFeature: function (feature, layer) {
                        layer.bindPopup(feature.properties.info);
                    }
                }).addTo(map);
    });