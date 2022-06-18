var map = new window.Microsoft.Maps.Map(document.getElementById('myMap'), {
    /* No need to set credentials if already passed in URL */
    center: new Microsoft.Maps.Location(47.606209, -122.332071),
    zoom: 12
});
Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
    var directionsManager = new window.Microsoft.Maps.Directions.DirectionsManager(map);
    // Set Route Mode to transit
    directionsManager.setRequestOptions({ routeMode: Microsoft.Maps.Directions.RouteMode.transit });
    var waypoint1 = new Microsoft.Maps.Directions.Waypoint({ address: 'Redmond', location: new Microsoft.Maps.Location(47.67683029174805, -122.1099624633789) });
    var waypoint2 = new Microsoft.Maps.Directions.Waypoint({ address: 'Seattle', location: new Microsoft.Maps.Location(47.59977722167969, -122.33458709716797) });
    directionsManager.addWaypoint(waypoint1);
    directionsManager.addWaypoint(waypoint2);
    // Set the element in which the itinerary will be rendered
    directionsManager.setRenderOptions({ itineraryContainer: document.getElementById('printoutPanel') });
    directionsManager.calculateDirections();
});
