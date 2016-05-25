var browserWidth = window.innerWidth || document.documentELement.ClientWidth || document.body.clientWidth;
var hiddenPc = document.getElementsByTagName("meta")[2];
var pageContent = document.getElementsByClassName("entry-content")[0];
var pageImg = pageContent.getElementsByTagName("img");
var header = document.getElementById("header");
var nav = document.getElementById("menu-%e4%b8%bb%e7%9b%ae%e5%bd%95");
var navLi = nav.getElementsByTagName("li");


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

for(var i in navLi){
	navLi[i].onmouseover = function (){
		this.getElementsByTagName("ul")[0].style.display = "block";
};
	navLi[i].onmouseout = function (){
		this.getElementsByTagName("ul")[0].style.display = "none";
};
};






