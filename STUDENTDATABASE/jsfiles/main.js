let toggleNavStatus = true;




let toggleNav = function(){
	let getSidebar = document.querySelector(".nav-sidebar");
	let getSidebarUl = document.querySelector(".nav-sidebar ul");
	let getSidebarTitle = document.querySelector(".nav-sidebar span");
	let getSidebarLinks = document.querySelectorAll(".nav-sidebar a");
	// let getSpan = document.querySelector(".span");
	//let getFieldSet = document.querySelector("fieldset");


// if (toggleNavStatus == false) {
//
// getSidebarUl.style.visibility = "visible";
// getSidebar.style.width = "272px";
// getSidebarTitle.style.opacity = "0.5";
// // getSpan.style.opacity = "0.5";
// // document.getElementById("fieldset").style.width = "300px";
//
// let arrayLength = getSidebarLinks.length;
// for (let i = 0; i < arrayLength; i++) {
//
// getSidebarLinks[i].style.opacity = "1";
//
//
//
// }
// toggleNavStatus = true;
// }

else if(toggleNavStatus == true) {


getSidebar.style.width = "50px";
getSidebarTitle.style.opacity = "0";
// getSpan.style.opacity = "0";
let arrayLength = getSidebarLinks.length;
for (let i = 0; i < arrayLength; i++) {

getSidebarLinks[i].style.opacity = "0";




}
getSidebarUl.style.visibility = "hidden";

toggleNavStatus = false;



}
}
