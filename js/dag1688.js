var browserWidth = window.innerWidth || document.documentELement.ClientWidth || document.body.clientWidth;
var hiddenPc = document.getElementsByTagName("meta")[2];
var pageContent = document.getElementsByClassName("entry-content")[0];
var pageImg = pageContent.getElementsByTagName("img");

if(browserWidth < 767){
				hiddenPc.content = "width=device-width, initial-scale=1,user-scalable = no"
								for(var i in pageImg){
												pageImg[i].parentElement.className = "wide-img";
								};
};

if(browserWidth > 767&& browserWidth < 1024){
	alert("不好意思，大光资讯的平板电脑界面正在开发中");
	location.href = "http://www.dag1688.com";
};





