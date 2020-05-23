var OSMPICKER = (function(){
    var app = {};

    var map;
    var marker;
    var circle;
    app.initmappicker = function(lat, lon, r, option){
        try{
            map = new L.Map(option.locationPickerId);
        }catch(e){
            console.log(e);
        }
        var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
        var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});
        map.setView([lat, lon], 10);
        map.addLayer(osm);
        if(!marker){
            marker = new L.marker([lat, lon], {draggable:'true'});
            circle = new L.circle([lat, lon], r, {
                weight: 2
            });
        }else{
            marker.setLatLng([lat, lon]);
            circle.setLatLng([lat, lon]);
        }

        marker.on('dragend', function(e){
            circle.setLatLng(e.target.getLatLng());
            map.setView(e.target.getLatLng());
            $("#"+option.koordinatId).val(e.target.getLatLng().lat.toFixed(6) + ',' + e.target.getLatLng().lng.toFixed(6));
        });
        map.addLayer(marker);
        map.addLayer(circle);
    };

    return app;
})();
var OSMPICKER2 = (function(){
    var app2 = {};

    var map2;
    var marker2;
    var circle2;
    app2.initmappicker = function(lat, lon, r, option){
        try{
            map2 = new L.Map(option.locationPickerId);
        }catch(e){
            console.log(e);
        }
        var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
        var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});
        map2.setView([lat, lon], 10);
        map2.addLayer(osm);
        if(!marker2){
            marker2 = new L.marker([lat, lon], {draggable:'true'});
            circle2 = new L.circle([lat, lon], r, {
                weight: 2
            });
        }else{
            marker2.setLatLng([lat, lon]);
            circle2.setLatLng([lat, lon]);
        }

        marker2.on('dragend', function(e){
            circle2.setLatLng(e.target.getLatLng());
            map2.setView(e.target.getLatLng());
            $("#"+option.koordinatId).val(e.target.getLatLng().lat.toFixed(6) + ',' + e.target.getLatLng().lng.toFixed(6));
        });
        map2.addLayer(marker2);
        map2.addLayer(circle2);
    };

    return app2;
})();
var OSMPICKER3 = (function(){
    var app3 = {};

    var map3;
    var marker3;
    var circle3;
    app3.initmappicker = function(lat, lon, r, option){
        try{
            map3 = new L.Map(option.locationPickerId);
        }catch(e){
            console.log(e);
        }
        var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
        var osm = new L.TileLayer(osmUrl, {minZoom: 1, maxZoom: 20, attribution: osmAttrib});
        map3.setView([lat, lon], 10);
        map3.addLayer(osm);
        if(!marker3){
            marker3 = new L.marker([lat, lon], {draggable:'true'});
            circle3 = new L.circle([lat, lon], r, {
                weight: 2
            });
        }else{
            marker3.setLatLng([lat, lon]);
            circle3.setLatLng([lat, lon]);
        }

        marker3.on('dragend', function(e){
            circle3.setLatLng(e.target.getLatLng());
            map3.setView(e.target.getLatLng());
            $("#"+option.koordinatId).val(e.target.getLatLng().lat.toFixed(6) + ',' + e.target.getLatLng().lng.toFixed(6));
        });
        map3.addLayer(marker3);
        map3.addLayer(circle3);
    };

    return app3;
})();
