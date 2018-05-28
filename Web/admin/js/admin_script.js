'use strict';

function showAdmin(){
	var main = $("main");
	var connect = $("#connexion");
	
	ajaxRequest("GET", "./admin/php/admin_request.php/connexion", function(val){
		connect.style.display = "none";
		main.style.display = "block";
	}, null, function(){
		connect.style.height = "auto";
		
		var mainHeight = connect.style.height;
		mainHeight = parseInt(mainHeight);
		mainHeight = (isNaN(mainHeight))?0:mainHeight;
		
		var newMainHeight = windowHeight() - getHeight($("header")) - getHeight($("nav")) - getHeight($("footer"));
		
		if(mainHeight < newMainHeight){
			connect.style.height = newMainHeight + "px";
		}
		
		if(main.style.display != "none"){
			connect.style.display = "block";
			main.style.display = "none";
			
			window.location.replace("./admin");
		}
	});
}

addOnload(showAdmin);

function reloadGallery() {
	ajaxRequest("GET", "./admin/php/admin_request.php/gallery", function(val){
		var main = $("main");
		setId(main, "gallery");
		main.innerHTML = val;
	
		launchOnloadFunctions();
	}, null, launchOnloadFunctions);
}

function reloadBdd(table) {
	ajaxRequest("GET", "./admin/php/admin_request.php/bdd/"+table, function(val){
		var main = $("main");
		setId(main, "bdd");
		main.innerHTML = val;
	
		launchOnloadFunctions();
	}, null, launchOnloadFunctions);
}

function reloadFiles(path) {
	var paths = path.split("/");
	path = "/";
	
	for(var i = 2; i < paths.length; ++i){
		if(paths[i] != "" && paths[i+1] != ""){
			path += paths[i] + "/";
		} else if(paths[i] != ""){
			path += paths[i];
		}
	}
	
	ajaxRequest("GET", "./admin/php/admin_request.php"+path, function(val){
		var main = $("main");
		setId(main, "files");
		main.innerHTML = val;
		
		launchOnloadFunctions();
	}, null, launchOnloadFunctions);
}

function reloadBackups(){
	ajaxRequest("GET", "./admin/php/admin_request.php/backups", function(val){
		var main = $("main");
		setId(main, "backups");
		
		main.innerHTML = val;
		
		launchOnloadFunctions();
	}, null, launchOnloadFunctions);
}

function reloadAdmin(){
	ajaxRequest("GET", "./admin/php/admin_request.php/admin", function(val){
		setActive($("#admin_tab"));
		
		var main = $("main");
		setId(main, "admin");
		
		main.innerHTML = val;
		
		launchOnloadFunctions();
	}, null, launchOnloadFunctions);
}

function changeTab(e){
	var res = "";
	
	var a = getEventElement(e);
	cancel(e);
	
	if(!isset(a.href)){
		a = a.parentElement;
	}
	
	var href = a.href;
	var params = href.split("?");
	params = params[1];
	params = params.split("&");
	
	for(var i = 0; i < params.length; ++i){
		var param = params[i];
		
		param = param.split("=");
		param = param[1];
		
		if(param != ""){
			res += "/" + param;
		}
	}
	
	ajaxRequest("GET", "./admin/php/admin_request.php"+res, function(val){
		setActive(a.parentElement);
		
		var main = $("main");
		setId(main, params[0].split("=")[1]);
		main.innerHTML = val;
		
		launchOnloadFunctions();
	}, null, launchOnloadFunctions);
}

function deleteImg(file){
	if(confirm("Êtes-vous sûr de vouloir supprimer ?")){
		ajaxRequest("DELETE", "./admin/php/admin_request.php/gallery", function(val){
			reloadGallery();
		}, "file="+file);
	}
}

function deleteFile(file, path, files=true){
	if(confirm("Êtes-vous sûr de vouloir supprimer ?")){
		ajaxRequest("DELETE", "./admin/php/admin_request.php/files", function(val){
			if(files){
				reloadFiles(path);
			} else {
				reloadBackups();
			}
		}, "file="+file);
	}
}

function createDirectory(path){
	var name = $("#directory_name").value;
	
	ajaxRequest("PUT", "./admin/php/admin_request.php/files", function(val){
		reloadFiles(path);
	}, "name="+replace_all("/", "_", replace_all(" ", "_", name))+"&path="+path);
}

function saveSite(){
	disable($("#save_site"));
	
	ajaxRequest("PUT", "./admin/php/admin_request.php/backups", function(val){
		reloadBackups();
	}, "", launchOnloadFunctions, false);
}

function modifyAdmin(){
	var user = $("#username");
	var pass = $("#admin_password");
	var confirm = $("#admin_confirm_password");
	var name = $("#site_name");
	
	if(pass.value != confirm.value){
		confirm.value = "";
		
		confirm.style.border = "2px ridge red";
		confirm.style.borderRadius = "5px";
	} else {
		ajaxRequest("POST", "./admin/php/admin_request.php/admin/modify_pass", function(val){
			reloadAdmin();
			
			if(val == "true"){
				window.location.replace("./admin");
			}
		}, "user="+replace_all("/", "_", replace_all(" ", "_", user.value))+"&pass="+pass.value+"&confirm="+confirm.value+"&site_name="+name.value, launchOnloadFunctions);
	}
}

function connectAdmin(){
	var user = $("#user");
	var pass = $("#pass");
	
	ajaxRequest("POST", "./admin/php/admin_connect.php", function(val){
		window.location.replace("./admin");
	}, "user="+replace_all("/", "_", replace_all(" ", "_", user.value))+"&pass="+pass.value);
}

function logoutAdmin(){
	ajaxRequest("POST", "./admin/php/admin_deconnect.php", function(val){
		window.location.replace("./admin");
	}, "");
}

function chooseDatabase(){
	var select = $("#tables_selection");
	
	ajaxRequest("POST", "./admin/php/admin_request.php/bdd", function(val){
		var main = $("main");
		main.innerHTML = "<div id=\"table_list\">" + $("#table_list").innerHTML + "</div>" + val;
		
		launchOnloadFunctions();
	}, "table=" + $("#tables_selection").value, launchOnloadFunctions);
}

function addDataChoose(event, table){
	cancel(event);
	
	ajaxRequest("PUT", "./admin/php/admin_request.php/bdd", function(val){
		var main = $("main");
		main.innerHTML = "<div id=\"table_list\">" + $("#table_list").innerHTML + "</div>" + val;
		
		launchOnloadFunctions();
	}, "table="+table, launchOnloadFunctions);
}

function addReturn(event, table){
	cancel(event);
	
	ajaxRequest("POST", "./admin/php/admin_request.php/bdd", function(val){
		var main = $("main");
		main.innerHTML = "<div id=\"table_list\">" + $("#table_list").innerHTML + "</div>" + val;
		
		launchOnloadFunctions();
	}, "table=" + table, launchOnloadFunctions);
}

function deleteData(table, index, id){
	ajaxRequest("DELETE", "./admin/php/admin_request.php/bdd", function(val){
		ajaxRequest("POST", "./admin/php/admin_request.php/bdd", function(val){
			var main = $("main");
			main.innerHTML = "<div id=\"table_list\">" + $("#table_list").innerHTML + "</div>" + val;
		
			launchOnloadFunctions();
		}, "table=" + table, launchOnloadFunctions);
	}, "table=" + table + "&index=" + index + "&id=" + id, launchOnloadFunctions);
}

reloadAdmin();
