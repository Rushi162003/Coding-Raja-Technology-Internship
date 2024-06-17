fetch("js.json").then((data) => {
    return data.json();
}).then((objectData)=>{
    console.log(objectData[0].title);
    let tableData = "";
    objectData.map((values)=>{
        // if(values.category === "men's clothing"){ 
            tableData+=`<div class="card text-center">
            <h4 class="card-title">${values.title.length <= 0 ? values.title : values.title.slice(0, 20) + '...'}</h4>
          <img style="width:10rem;" class="card-img " src="${values.image}" alt="">
          <div class="card-body">
            <p class="card-desc mt-2">${values.description.length <= 0 ? values.description : values.description.slice(0, 70) + '...'}</p>
            <p class="card-cat">${values.category}</p>
            <p class="card-price">${values.price}</p>
          </div>
        </div>`
        // }
    });
    document.getElementById('table-body').innerHTML=tableData;
}).catch((error)=>{
    console.log(error);
})      

// fetch("https://fakestoreapi.com/products").then((data) => {
//     return data.json();
// }).then((objectData)=>{
//     console.log(objectData[0].title);
//     let tableData = "";
//     objectData.map((values)=>{
//         // if(values.category === "men's clothing"){ 
//             tableData+=`<div class="card text-center">
//             <h4 class="card-title">${values.title.length <= 0 ? values.title : values.title.slice(0, 20) + '...'}</h4>
//           <img style="width:10rem;" class="card-img " src="${values.image}" alt="">
//           <div class="card-body">
//             <p class="card-desc mt-2">${values.description.length <= 0 ? values.description : values.description.slice(0, 70) + '...'}</p>
//             <p class="card-cat">${values.category}</p>
//             <p class="card-price">${values.price}</p>
//           </div>
//         </div>`
//         // }
//     });
//     document.getElementById('table-body').innerHTML=tableData;
// }).catch((error)=>{
//     console.log(error);
// })      
