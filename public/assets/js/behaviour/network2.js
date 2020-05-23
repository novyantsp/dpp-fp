    var t = new NetChart({
        container: document.getElementById("demo"),
        area: { height: 1080 },
        data: { url: "peta-sebaran/network-ii/data" },
        info:{
            enabled: true,
            nodeContentsFunction: function(itemData, item){
                return "<div>" +
                            "<h5 style='padding-left:5px;padding-right:5px'>"+ itemData.nama +"</h5>" +
                            "<h6 style='padding-left:5px;padding-right:5px'>" + itemData.kode + "</h6>" +
                            "<h6 style='padding-left:5px;padding-right:5px'>" + itemData.usia + "</h6>" +
                            "<h6 style='padding-left:5px;padding-right:5px'>" + itemData.status + "</h6>" +
                            "<h6 style='padding-left:5px;padding-right:5px'>" + itemData.koordinat + "</h6>" +
                            "<h6 style='padding-left:5px;padding-right:5px'>" + itemData.kecamatan + "</h6>" +
                       "</div>";
          },
            linkContentsFunction: function(itemData, item){
                //console.log(item);
                return  "<p style='padding-left:5px;padding-right:5px;'>" + " Hubungan " + item.from.data.title + " dan " + item.to.data.title + " " +itemData.hubungan + "</p></div>";
            }
        },
        style:{
            nodeLabel:{
                backgroundStyle:{fillColor:"#93B17F", lineColor:"blue"}
            },
            linkLabel:{
                backgroundStyle:{fillColor:"#93B17F", lineColor:"blue"}
            },
            nodeStyleFunction: nodeStyle,
            link:{fillColor:"#93B17F"}
        }
    });

    function nodeStyle(node) {
        if (node.data.status.includes('Meninggal')){
            node.fillColor = "black";
        } else if (node.data.title.includes('Pasien')) {
            node.fillColor = "red";
        } else if (node.data.title.includes('OTG')){
            node.fillColor = "orange";
        } 

        node.label = node.data.title;
    }

