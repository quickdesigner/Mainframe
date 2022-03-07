$(document).ready(function(){

	function openNav() {
	  document.getElementById("mobile_menu_container").style.height = "100%";
	}

	function closeNav() {
	  document.getElementById("mobile_menu_container").style.height = "0%";
	}

	var menu_state = 'closed';

	$('#main_bar_menu_toggle').click(function(){
		if (menu_state == 'closed'){
			openNav();
			menu_state = 'open';
		}
		else {
			closeNav();
			menu_state = 'closed';
		}
	});

	$('#mobile_menu_close').click(function(){
		closeNav();
		menu_state = 'closed';
	});
});
