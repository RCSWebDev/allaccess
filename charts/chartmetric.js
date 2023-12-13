import { Grid, html } from "https://unpkg.com/gridjs?module";

var tokenID;
var myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");

var raw = JSON.stringify({
  refreshtoken:
    "SbfZLFnHhK2m2PWSzYgShdYhLHJOj9xJ0iJX2HvKoL44Ng95vggZA2NELGtcxrPG",
});

var requestOptions = {
  method: "POST",
  headers: myHeaders,
  body: raw,
  redirect: "follow",
};

function currenttoken() {
  return fetch("https://api.chartmetric.com/api/token", requestOptions)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      return data.token;
      //console.log(tokenID);
    });
}

let newToken = await currenttoken();
//console.log("Authorization", "Bearer " + newToken);

var myHeaders1 = new Headers();
myHeaders1.append("Authorization", "Bearer " + newToken);

var requestOptions1 = {
  method: "GET",
  headers: myHeaders1,
  redirect: "follow",
};

function getChart() {
  return fetch(
    "https://api.chartmetric.com/api/artist/list/filter?limit=100&sortOrderDesc=false",
    requestOptions1
  )
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      return data;
      //console.log(tokenID);
    });
}

//console.log("test");
let chartData = await getChart();
//console.log(chartData);
const data = chartData.obj.obj.map((artist) => ({
  cm_artist_rank: artist.cm_artist_rank,
  name: artist.name,
  artist: artist.image_url,
  cm_artist_rank: artist.cm_artist_rank,
  code2: artist.code2,
  cm_artist_score: artist.cm_artist_score,
  rank_eg: artist.rank_eg,
  rank_fb: artist.rank_fb,
}));

// Define the columns
// Define the columns
// Define the columns
const columns = [
  { id: "cm_artist_rank", name: "#" },
  { id: "name", name: "Name", hidden: true },
  {
    formatter: (_, row) =>
      html(
        `<img src=${row.cells[2].data} style="width:50px;height:60px;"><span>${row.cells[1].data}</span>`
      ),
    name: "Artist",
  },
  { id: "code2", name: "Country" },
  { id: "rank_eg", name: "Engagement Rank" },
  { id: "rank_fb", name: "Fan Base Rank" },
];

// Create the grid
const grid = new Grid({
  columns,
  data,
  pagination: {
    limit: 50,
    summary: false,
  },
  fixedHeader: true,
  style: {
    table: {
      "font-size": "11px",
    },
    th: {
      padding: "5px",
    },
    td: {
      padding: "5px",
    },
  },
});

// Render the grid

// Render the grid
grid.render(document.getElementById("wrapper"));
//console.log(Object.entries(chartData));
