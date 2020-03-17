<!DOCTYPE html>
<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.japan-map.min.js"></script>
<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function(){
        var areas = [
            {code : 1, name: "北海道", color: "#7f7eda", hoverColor: "#b3b2ee", prefectures: [1]},
            {code : 2, name: "東北",   color: "#759ef4", hoverColor: "#98b9ff", prefectures: [2,3,4,5,6,7]},
            {code : 3, name: "関東",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [8,9,10,11,12,13,14]},
            {code : 4, name: "中部",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [15,16,17,18,19,20,21,22,23]},
            {code : 5, name: "関西",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [24,25,26,27,28,29,30]},
            {code : 6, name: "中国",   color: "#ffcc66", hoverColor: "#ffe0a3", prefectures: [31,32,33,34,35]},
            {code : 7, name: "四国",   color: "#fb9466", hoverColor: "#ffbb9c", prefectures: [36,37,38,39]},
            {code : 8, name: "九州",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [40,41,42,43,44,45,46]},
            {code : 9, name: "沖縄",   color: "#eb98ff", hoverColor: "#f5c9ff", prefectures: [47]},
        ];
    
        $("#map-smartphone-container").japanMap({
            width:330,
            areas  : areas,
            selection : "area",
            borderLineWidth: 0.25,
            drawsBoxLine : false,
            movesIslands : true,
            showsAreaName : true,
            font : "MS Mincho",
            fontSize : 13,
            fontColor :"#777",
            fontShadowColor : "white",
            onSelect : function(data){
                location.href = [data.area.code];
            }
        });

        $("#map-container").japanMap({
            width:800,
            areas  : areas,
            selection : "area",
            borderLineWidth: 0.25,
            drawsBoxLine : false,
            movesIslands : true,
            showsAreaName : true,
            font : "MS Mincho",
            fontSize : 13,
            fontColor :"#777",
            fontShadowColor : "white",
            onSelect : function(data){
                location.href = 'search_prefecture/' + [data.area.code];
            }
        });

    });
</script>
</head>
<body>
<?php debug($area); ?> 
<?= $this->element('smartphone_judgement') ?>
<?php if(issmartphone() == true) { ?>
    <div id="map-smartphone-container" style = "margin: auto; text-align:center; width: 100%; display: inline-block;"></div>
<?php } else { ?>
    <div id="map-container" style = "margin: auto;  text-align:center; width: 100%; display: inline-block;"></div>
<?php } ?>

</body>