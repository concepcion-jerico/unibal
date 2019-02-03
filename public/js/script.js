

window.addEventListener('scroll', function() {
	const logoImage = document.querySelector("#logo");
	const mainNav = document.getElementById("mainNav");

	if(window.pageYOffset > 0) {
		logoImage.style.height = "64px";
		mainNav.classList.add("bg-blue");
		mainNav.classList.add("txt-white");
	} else {
		logoImage.style.height = "84px";
		mainNav.classList.remove("bg-blue");
		mainNav.classList.remove("txt-white");
	}

});