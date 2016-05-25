var browserWidth = window.innerWidth || document.documentELement.ClientWidth || document.body.clientWidth;
var hiddenPc = document.getElementsByTagName("meta")[2];
var pageContent = document.getElementsByClassName("entry-content")[0];
var pageImg = pageContent.getElementsByTagName("img");
var header = document.getElementById("header");

if(browserWidth < 1000){
				hiddenPc.content = "width=device-width, initial-scale=1,user-scalable = no"
								for(var i in pageImg){
												pageImg[i].parentElement.className = "wide-img";
								};
};

if(browserWidth > 1000){
	window.onscroll = function (){
				var st = document.documentElement.scrollTop || document.body.scrollTop;
				if(st>700){
			header.className = "header";
}else{
			header.className = "";
};	
								
};
}






