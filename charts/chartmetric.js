import { Grid, html } from "https://unpkg.com/gridjs?module";
import chartData from "/charts/aa.json" assert { type: "json" };

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
