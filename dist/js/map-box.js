mapboxgl.accessToken =
  'pk.eyJ1Ijoiam9obnloYW5uYSIsImEiOiJjbHNjd3ozM3Awb3FvMmpvNmJuNTR5eHhpIn0.W95HUUpAzHvT1u6PkArOIA';
import countries from './countries.js';

// const countryNames = document.querySelectorAll('.country-name');
// const resetMapButton = document.getElementById('reset-map');
// const countriesTabPans = document.querySelectorAll('.country-tab-pan');

let mapCounter = 0;

const mapId = document.getElementById('map');

if (mapId) {
  // resetMapButton.classList.add('display-none');
  const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/johnyhanna/clscxactz01ab01qscgdxeif3',
    center: [55.282726, 25.2205396], // starting position [lng, lat]
    zoom: 5,
    pitch: 50,
    attributionControl: false,
    dragPan: false,
    // bearing: -60,
    // maxZoom: 10,
    // minZoom: 4,
  });
  map.scrollZoom.disable();

  // add markers to map
  for (const country of countries) {
    // create a HTML element for each feature
    const el = document.createElement('div');
    el.className = 'marker';

    // make a marker for each country and add it to the map
    const marker = new mapboxgl.Marker(el)
      .setLngLat(country.coordinates)
      .addTo(map);

    marker.getElement().addEventListener('click', (e) => {
      mapCounter++;
      var lngLat = marker.getLngLat();

      resetMapButton.classList.remove('display-none');

      const selectedTab = document.querySelector(
        `[data-code="${country.code}"]`
      );

      const selectedTabContent = document.querySelector(
        `[data-tab-code="${country.code}"]`
      );

      countriesTabPans.forEach((tab) => {
        tab.classList.remove('show', 'active');
      });

      selectedTabContent.classList.add('show', 'active');

      countryNames.forEach((country) => {
        country.classList.remove('tab-active');
      });

      selectedTab.classList.add('tab-active');

      map.addLayer(
        {
          id: `country-color-${mapCounter}`,
          source: {
            type: 'vector',
            url: 'mapbox://mapbox.country-boundaries-v1',
          },
          'source-layer': 'country_boundaries',
          type: 'fill',
          paint: {
            'fill-color': '#222e34',
            'fill-opacity': 1,
          },
        },
        'country-label'
      );

      map.setFilter(`country-color-${mapCounter}`, [
        'in',
        'iso_3166_1_alpha_3',
        country.code,
      ]);

      flyTo(lngLat.lng, lngLat.lat);

      // * Remove layer
      if (mapCounter > 1) {
        map.removeLayer(`country-color-${mapCounter - 1}`);
      }
    });
  }

  map.on('load', function () {
    map.addLayer(
      {
        id: 'country-boundaries',
        source: {
          type: 'vector',
          url: 'mapbox://mapbox.country-boundaries-v1',
        },
        'source-layer': 'country_boundaries',
        type: 'fill',
        paint: {
          'fill-color': '#222e34',
          'fill-opacity': 0.3,
        },
      },
      'country-label'
    );

    map.setFilter('country-boundaries', ['in', 'iso_3166_1_alpha_3', 'ARE']);

    mapCounter++;

    map.addLayer(
      {
        id: `country-color-${mapCounter}`,
        source: {
          type: 'vector',
          url: 'mapbox://mapbox.country-boundaries-v1',
        },
        'source-layer': 'country_boundaries',
        type: 'fill',
        paint: {
          'fill-color': '#222e34',
          'fill-opacity': 1,
        },
      },
      'country-label'
    );

    map.setFilter(`country-color-${mapCounter}`, [
      'in',
      'iso_3166_1_alpha_3',
      'ARE',
    ]);
  });

  const flyTo = (lng, lat) => {
    map.flyTo({
      center: [lng, lat],
      duration: 2000,
      speed: 3,
      essential: true,
      zoom: 5,
      pitch: 50,
    });
  };

  // resetMapButton.addEventListener('click', () => {
  //   resetMapButton.classList.add('display-none');
  //   map.flyTo({
  //     center: [55.282726, 25.2205396],
  //     zoom: 3,
  //     pitch: 40,
  //     duration: 1000,
  //     speed: 3,
  //     essential: true,
  //   });
  // });

  // countryNames.forEach((country) => {
  //   country.addEventListener('click', function (event) {
  //     if (this.classList.contains('tab-active')) {
  //       return;
  //     }

  //     resetMapButton.classList.remove('display-none');

  //     countryNames.forEach((country) => {
  //       country.classList.remove('tab-active');
  //     });
  //     const countryCode = this.dataset.code;

  //     this.classList.add('tab-active');

  //     let c = countries.find((country) => {
  //       return country.code === countryCode;
  //     });

  //     const selectedTabContent = document.querySelector(
  //       `[data-tab-code="${countryCode}"]`
  //     );

  //     countriesTabPans.forEach((tab) => {
  //       tab.classList.remove('show', 'active');
  //     });

  //     selectedTabContent.classList.add('show', 'active');

  //     mapCounter++;

  //     map.addLayer(
  //       {
  //         id: `country-color-${mapCounter}`,
  //         source: {
  //           type: 'vector',
  //           url: 'mapbox://mapbox.country-boundaries-v1',
  //         },
  //         'source-layer': 'country_boundaries',
  //         type: 'fill',
  //         paint: {
  //           'fill-color': '#222e34',
  //           'fill-opacity': 1,
  //         },
  //       },
  //       'country-label'
  //     );

  //     map.setFilter(`country-color-${mapCounter}`, [
  //       'in',
  //       'iso_3166_1_alpha_3',
  //       c.code,
  //     ]);

  //     flyTo(c.coordinates[0], c.coordinates[1]);

  //     // * Remove layer
  //     if (mapCounter > 1) {
  //       map.removeLayer(`country-color-${mapCounter - 1}`);
  //     }
  //   });
  // });
}
