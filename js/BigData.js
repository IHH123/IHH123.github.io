
var BUTTONLIGHT = (e) => { 

	var title=e.target.getAttribute("title");
	var halaman=Halaman.innerHTML;

		if(title=="Dark") {

			Content.style.color="white";
			Content.style.backgroundColor="black";
			GarisJudulAtas.style.backgroundColor="white";
			GarisJudulBawah.style.backgroundColor="white";

			buttonlight.setAttribute("src","js/sun.png");
			ButtonLight.setAttribute("title","Light");
			buttonlight.setAttribute("title","Light");

		} else {

			if(halaman==="Data Lake") {

					Content.style.backgroundColor="darksalmon";
					Content.style.color="black";
					GarisJudulAtas.style.backgroundColor="black";
					GarisJudulBawah.style.backgroundColor="black";

				buttonlight.setAttribute("src","js/moon.png");
				ButtonLight.setAttribute("title","Dark");
				buttonlight.setAttribute("title","Dark");				

			} else if (halaman==="Big Data") {

					Content.style.backgroundColor="darkred";
					Content.style.color="white";
					GarisJudulAtas.style.backgroundColor="white";
					GarisJudulBawah.style.backgroundColor="white";

				buttonlight.setAttribute("src","js/moon.png");
				ButtonLight.setAttribute("title","Dark");
				buttonlight.setAttribute("title","Dark");				

			} else if (halaman==="Data Warehouse") {

					Content.style.backgroundColor="darkseagreen";
					Content.style.color="black";
					GarisJudulAtas.style.backgroundColor="black";
					GarisJudulBawah.style.backgroundColor="black";

				buttonlight.setAttribute("src","js/moon.png");
				ButtonLight.setAttribute("title","Dark");
				buttonlight.setAttribute("title","Dark");				

			} else {

					Content.style.backgroundColor="silver";
					Content.style.color="black";
					GarisJudulAtas.style.backgroundColor="black";
					GarisJudulBawah.style.backgroundColor="black";

				buttonlight.setAttribute("src","js/moon.png");
				ButtonLight.setAttribute("title","Dark");
				buttonlight.setAttribute("title","Dark");				
			}
		}
}

var ButtonLight=document.querySelector("button[title='Dark']");

	if(ButtonLight!=null) {

		ButtonLight.addEventListener("click",BUTTONLIGHT);
	}

var buttonlight=document.querySelector("img[title='Dark']");
var Halaman=document.querySelector("li[aria-current='page'] a.page-link");
var Content=document.querySelector("div.content");
var GarisJudulAtas=document.querySelector("hr.over-line");
var GarisJudulBawah=document.querySelector("hr.under-line");

// $(function() {$('[data-toggle="popover"]').popover()});