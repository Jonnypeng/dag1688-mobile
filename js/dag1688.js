var browserWidth = window.innerWidth || document.documentELement.ClientWidth || document.body.clientWidth;
var hiddenPc = document.getElementsByTagName("meta")[2];
if(browserWidth < 768){
	hiddenPc.content = "width=device-width, initial-scale=1,user-scalable = no"
};

var pageContent = document.getElementsByClassName("entry-content")[0];
var pageImg = pageContent.getElementsByTagName("img");
for(var i in pageImg){
	pageImg[i].parentElement.className = "wide-img";
};


