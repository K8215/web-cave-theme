const header = document.querySelector('header');
const toggler = document.querySelector('#mobile-toggler');
const links = document.querySelector('#navigation');

let scrollpos = window.scrollY

//SMOOTH SCROLL ANCHOR LINKS
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		e.preventDefault();

		document.querySelector(this.getAttribute('href')).scrollIntoView({
			behavior: 'smooth'
		});
	});
});

//MOBILE NAV
toggler.addEventListener('click', function (e) {
	if (header.classList.contains('open')) {
		header.classList.remove('open');
		toggler.classList.remove('is-active');
	} else {
		header.classList.add('open');
		toggler.classList.add('is-active');
	}
});

links.addEventListener('click', function (e) {
	header.classList.remove('open');
	toggler.classList.remove('is-active');
});

//FIXED HEADER STYLES ON SCROLL
window.addEventListener('scroll', function () {
	scrollpos = window.scrollY;

	if (scrollpos >= 100) {
		header.classList.add("scrolled")
	} else {
		header.classList.remove("scrolled")
	}
});