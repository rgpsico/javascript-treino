

var marvel = {

render: function(){
var url = "http://gateway.marvel.com/v1/public/comics?ts=1&apikey=43634ab5f5b50782274a50ec7e7d9811&hash=4761558e45170642234948dc70f24c20";


 var message = document.getElementById('message');
 var footer = document.getElementById('footer');
 var marvelContainer = document.getElementById('marvel-Container');

$.ajax({
url:url,
type: "GET" ,
beforeSend: function() {
	message.innerHTML = "loading";
},
complete: function(){
	message.innerHTML = "loading";
},


success: function(data){
	footer.innerHTML =  data.attributionHTML;
	var string = "";
	string += "<div class='row'>";

for(var i= 0;  i< data.data.results.length;  i++) {
	var element = data.data.results[i];
	console.log(element);
	string += "<div class='col-md-3'>";
	string += "<div class='img-responsible'>";
	string += "<a href="+element.urls[0].url+" target='_blank'>";
	string += "<img src="+element.thumbnail.path +'.jpg'+" width='180px'>";
	string += "</a>";
	string += "</div>";
	string += "<h3>"+ element.title + "</h3>";
    string += "</div>";
    

        if((i+1) % 4 == 0){
        	string += '</div>';
        	string += "<div class='row'>"
        }
     }
     marvelContainer.innerHTML = string;

},
error: function(){
	message.innerHTML = "We are sorry";
}



});

}
};
marvel.render();



