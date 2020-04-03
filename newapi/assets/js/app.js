var url = 'http://newsapi.org/v2/top-headlines?country=us&apiKey=c626a1365de948e1860e688ae8e47e6e';
var req = new Request(url);

const btn= document.querySelector("#btn");
const div= document.querySelector("#info")

btn.addEventListener("click", function() {

fetch(req)
    .then(function(response) {
        console.log(response.json());
        return response.json();
    })
        
  
    .then(function(data){
        // console.log(status)


        
    const div= document.createElement("div");    
div.innerHTML= `
    <h1>${data.aricles.title}</h1>
     <p>${data.articles.description}</p> `;  

        console.log($title);
        console.log($description);
});
});




//function ajaxnews(url) {
   // var xmlHttpReq = new XMLHttpRequest();
    //xmlHttpReq.open('GET', url);
   // xmlHttpReq.onreadystatechange = function() {

      //  if (xmlHttpReq.readyState == 4 && xmlHttpReq.status == 200) {
        //    data = JSON.parse(xmlHttpReq.responseText);
         //   dataList = data.articles;



       // function readData(Data){
         //   var obj=new Object();
          //  obj =JSON.parse (Data);
           // alert(obj);
            
        //}
    //}}
   // xmlHttpReq.send(null);


//}