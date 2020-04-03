var url = 'http://newsapi.org/v2/top-headlines?country=us&apiKey=c626a1365de948e1860e688ae8e47e6e';
var req = new Request(url);
fetch(req)
    .then(function(response) {
        console.log(response.json());
    })
    const btn= document.querySelector("#btn");