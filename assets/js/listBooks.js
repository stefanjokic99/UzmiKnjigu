/**
* skripta za izlistavanje knjiga i upucivanje asinhronih zahtjeva
*/
window.addEventListener('load',main);

var next = document.getElementById('next');
var previous = document.getElementById('previous');
let numberOfPage = 1;

next.addEventListener('click', () => {
    numberOfPage++;
    console.log(numberOfPage);
    main();
    $('html,body').scrollTop(0);
});
previous.addEventListener('click', () => {
    if(previous.disabled == true) {
        return;
    }

    numberOfPage--;
    main();
    $('html,body').scrollTop(0);
});

/* funkcija koja upucuje asinhroni zahtjev */
function main() {
    let url = 'https://60b3ab524ecdc1001747fb12.mockapi.io/books?page=' + numberOfPage + '&limit=10';

    fetch(url ,{method:'GET', headers:{'Content-Type':'application/json'}})
    .then(res => res.json())
    .then(data => {
        console.log(data);
        generateBookList(data);
    })
    .catch(error => {
        document.getElementById("bookList").innerHTML='Doslo je do greske.';
    })
}

/* generisanje html a na osnovu liste knjiga */
function generateBookList(list) {
    let items = '';
    
    for(book of list) {
        items +=  
        `<div class="col">
            <div class="card h-100 shadow-sm"> <img src="${book.image}" class="card-img-top" loading="lazy" alt="...">
                <div class="card-body">
                    <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">Prvi razred</span> <span class="float-end price-hp">${book.price} $</span> </div>
                    <h5 class="card-title">${book.title}</h5>
                    <div class="text-center my-4"> <a href="#" class="btn btn-warning">Detaljnije</a> </div>
                </div>
            </div>
        </div>`;
        document.getElementById("bookList").innerHTML = items;
        
    }

    document.getElementById("bookList").innerHTML = items;

    if(numberOfPage == 1) { 
        previous.disabled = true;
        previous.classList.add("disabled"); 
        return; 
    }

    previous.disabled = false;
    previous.classList.remove("disabled");
}
