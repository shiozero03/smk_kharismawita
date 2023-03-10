var cari = document.getElementById('menu-cari')
var mententang = document.getElementById('menu-tentang')
var itentang = document.getElementById('i-tentang')
var tentang = document.getElementById('tentang')
var menprofil = document.getElementById('menu-profil')
var iprofil = document.getElementById('i-profil')
var profil = document.getElementById('profil')
var meninfo = document.getElementById('menu-info')
var iinfo = document.getElementById('i-info')
var info = document.getElementById('info')
var mengaleri = document.getElementById('menu-galeri')
var igaleri = document.getElementById('i-galeri')
var galeri = document.getElementById('galeri')

tentang.addEventListener('click', function(){
	if(mententang.style.display === 'none' || mententang.style.display === ''){
		mententang.style.display = 'block'
		menprofil.style.display = 'none'
		meninfo.style.display = 'none'
		mengaleri.style.display = 'none'
		itentang.style.transform = 'rotate(-90deg)'
		itentang.style.transition = '.2s ease'
		iprofil.style.transform = 'rotate(0)'
		iprofil.style.transition = '.2s ease'
		iinfo.style.transform = 'rotate(0)'
		iinfo.style.transition = '.2s ease'
		igaleri.style.transform = 'rotate(0)'
		igaleri.style.transition = '.2s ease'
	} else {
		mententang.style.display = 'none'
		itentang.style.transform = 'rotate(0)'
		itentang.style.transition = '.2s ease'
	}
})
profil.addEventListener('click', function(){
	if(menprofil.style.display === 'none' || menprofil.style.display === ''){
		menprofil.style.display = 'block'
		mententang.style.display = 'none'
		meninfo.style.display = 'none'
		mengaleri.style.display = 'none'
		iprofil.style.transform = 'rotate(-90deg)'
		iprofil.style.transition = '.2s ease'
		itentang.style.transition = '.2s ease'
		itentang.style.transform = 'rotate(0)'
		iinfo.style.transform = 'rotate(0)'
		iinfo.style.transition = '.2s ease'
		igaleri.style.transform = 'rotate(0)'
		igaleri.style.transition = '.2s ease'
	} else {
		menprofil.style.display = 'none'
		iprofil.style.transform = 'rotate(0deg)'
		iprofil.style.transition = '.2s ease'
	}
})
info.addEventListener('click', function(){
	if(meninfo.style.display === 'none' || meninfo.style.display === ''){
		meninfo.style.display = 'block'
		mententang.style.display = 'none'
		menprofil.style.display = 'none'
		mengaleri.style.display = 'none'
		iprofil.style.transform = 'rotate(0deg)'
		iprofil.style.transition = '.2s ease'
		itentang.style.transition = '.2s ease'
		itentang.style.transform = 'rotate(0)'
		iinfo.style.transform = 'rotate(-90deg)'
		iinfo.style.transition = '.2s ease'
		igaleri.style.transform = 'rotate(0)'
		igaleri.style.transition = '.2s ease'
	} else {
		meninfo.style.display = 'none'
		iinfo.style.transform = 'rotate(0deg)'
		iinfo.style.transition = '.2s ease'
	}
})
galeri.addEventListener('click', function(){
	if(mengaleri.style.display === 'none' || mengaleri.style.display === ''){
		mengaleri.style.display = 'block'
		mententang.style.display = 'none'
		menprofil.style.display = 'none'
		meninfo.style.display = 'none'
		iprofil.style.transform = 'rotate(0deg)'
		iprofil.style.transition = '.2s ease'
		itentang.style.transition = '.2s ease'
		itentang.style.transform = 'rotate(0)'
		iinfo.style.transform = 'rotate(0deg)'
		iinfo.style.transition = '.2s ease'
		igaleri.style.transform = 'rotate(-90deg)'
		igaleri.style.transition = '.2s ease'
	} else {
		mengaleri.style.display = 'none'
		igaleri.style.transform = 'rotate(0deg)'
		igaleri.style.transition = '.2s ease'
	}
})
function tampilkanSearch(){
	if(cari.style.display === 'none'){
		cari.style.display = 'block'
	} else {
		cari.style.display = 'none'
	}
}
function tampilkanMenu(){
	document.getElementById('cover-menu-res').classList.remove('nonaktif')
	document.getElementById('cover-menu-res').classList.add('aktif')
	cari.style.display = 'none'
}
function sembunyikanMenu(){
	document.getElementById('cover-menu-res').classList.add('nonaktif')
	document.getElementById('cover-menu-res').classList.remove('aktif')
}
window.onscroll = function() {scrollFunction()}; // saat window di scroll

function scrollFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById("navbar").style.transition = ".5s";
  } else {
    document.getElementById("navbar").style.top = "auto";
    document.getElementById("navbar").style.transition = ".5s";
  }
  // console.log(document.documentElement.scrollTop)
}