import { Grid, html } from "https://unpkg.com/gridjs?module";

fetch("currents.json")
  .then((response) => response.json())
  .then((fetchedData) => {
    const data = fetchedData.map((item, index) => {
      if (index === 0) {
        return {
          rank: item[0],
          title: item[1],
          artist: item[2],
          spinsLastRange: item[3],
          spinsThisRange: item[4],
          locations: item[5],
          impressions: item[6],
        };
      } else {
        return {
          rank: item[0],
          title: item[1],
          artist: item[2],
          spinsLastRange: item[3],
          spinsThisRange: item[4],
          locations: item[5],
          impressions: Math.round(item[6]),
        };
      }
    });

    // Remove the header row
    data.shift();

    const columns = [
      { id: "rank", name: "Rank" },
      { id: "title", name: "Title", hidden: true },
      { id: "artist", name: "Artist", hidden: true },
      {
        formatter: (_, row) =>
          html(
            `<span class="artist-name"><span>${row.cells[2].data}<p>${row.cells[1].data}</p></span>`
          ),
        name: "Artist/Title",
      },
      { id: "spinsLastRange", name: "Spins LW" },
      { id: "spinsThisRange", name: "Spins TW" },
      { id: "locations", name: "Locations" },
      { id: "impressions", name: "Impressions" },
    ];

    const grid = new Grid({
      columns,
      data,
      fixedHeader: true,
      height: "674px",
      style: {
        table: { "font-size": "11px" },
        th: { padding: "5px" },
        td: { padding: "5px" },
      },
    });

    // Render the grid
    grid.render(document.getElementById("instore-currents"));
  });
