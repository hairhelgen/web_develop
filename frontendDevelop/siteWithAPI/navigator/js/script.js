"use strict";

fetch("https://api.mapbox.com/v4/mapbox.mapbox-streets-v8/12/1171/1566.mvt?style=mapbox://styles/mapbox/streets-v11@00&access_token=pk.eyJ1IjoiYWxiZXJ0LXN1bHRhbm92IiwiYSI6ImNrd3Y0dW44bTAwOWszMHM4MWx4N2Jib2EifQ.NFop9tk6l6NPKZTJ5LGqVg")
  .then((response) => response.json())
  .then((body) => {
    // console.log(body?.data);
  })