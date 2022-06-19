<!DOCTYPE html>
<html>

<head>
    <title>directionscreatetransitrouteHTML</title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <style type='text/css'>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Segoe UI', Helvetica, Arial, Sans-Serif
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 2px;
        }

        .flex-container {
            display: flex;
        }

        .flex-child {
            flex: 1;
            border: 2px solid yellow;
        }


        .float-container {
            padding: 1px;
        }

        .float-child.magenta {
            width: 40%;
            float: left;
            padding: 2px;
            border: 2px solid red;
        }

        .float-child.green {
            width: 40%;
            float: left;
            padding: 2px;
            border: 2px solid red;
        }

        .float-parent-element {
            width: 100%;
        }

        .float-child-element {
            float: left;
            width: 50%;
        }

        .red {
            background-color: red;
            margin-left: 0%;
        }

        .yellow {
            margin-left: 100%;
            background-color: yellow;
        }

        .grid-container-element {
            display: grid;
            grid-template-columns: 2fr 1fr;
            grid-gap: 20px;
            border: 1px solid black;
            width: 100%;
        }

        .grid-child-element {
            /* margin: 10px; */
            border: 1px solid red;
            margin-left:2%;
            margin-top: 10px;
            margin-bottom: 10px;
            overflow-y:scroll;
            max-height: 95%;
        }
        .green{
            margin-right:2%;

        }
    </style>
</head>

<body>
    <div class="grid-container-element">



        <div id='myMap' class="grid-child-element purple"></div>

        <div id='printoutPanel' class="grid-child-element green"></div>
    </div>
    <!-- <div class="float-parent-element"> -->


    <!-- <div id='myMap' style='width: 100vw; height: 100vh;' class="grid-child first"></div> -->
    <!-- <div class="float-child-element">
            <div id='myMap' class="red"></div>
        </div>

        <div class="float-child-element">
            <div id='printoutPanel' class="yellow"></div>
        </div>
    </div>  -->
    <script type='text/javascript'>
        function loadMapScenario() {
            var map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                /* No need to set credentials if already passed in URL */
                center: new Microsoft.Maps.Location(47.606209, -122.332071),
                zoom: 12
            });
            Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
                var directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);
                // Set Route Mode to transit
                directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.transit });
                var waypoint1 = new Microsoft.Maps.Directions.Waypoint({ address: 'Ponttor', location: new Microsoft.Maps.Location(51.5136, 7.4653) });
                var waypoint2 = new Microsoft.Maps.Directions.Waypoint({ address: 'Bushof', location: new Microsoft.Maps.Location(50.7773, 6.0902) });
                directionsManager.addWaypoint(waypoint1);
                directionsManager.addWaypoint(waypoint2);
                // Set the element in which the itinerary will be rendered
                directionsManager.setRenderOptions({ itineraryContainer: document.getElementById('printoutPanel') });
                directionsManager.calculateDirections();
            });

        }
    </script>
    <script type='text/javascript'
        src='https://www.bing.com/api/maps/mapcontrol?callback=loadMapScenario&key=AgZ5e0UqujOhm1RPodpyxqoBsENH_E6XZNzQysQfQc_a0IoZBEo8bRD3rsLMadQF'
        async defer></script>
    <!-- <script src="bingMaps.js"></script> -->

</body>

</html>