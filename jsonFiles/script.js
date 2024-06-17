fetch("mens.json").then((data) => {
    return data.json();
}).then((objectData) => {
    let tableData = "";
    objectData.map((values) => {
        tableData +=
            `<div id="card" class="card text-center">
        <img src="${values.image}" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-text description">${values.description}</h6>
          <p class="card-text price"><b>MRP: ${values.price}</b><br></p>
          <p class="card-text rating"><b>${values.rate}</b><br></p>
        </div>
        </div>`
    });
    document.getElementById('flex').innerHTML = tableData;
}).catch((error) => {
    console.log(error);
})