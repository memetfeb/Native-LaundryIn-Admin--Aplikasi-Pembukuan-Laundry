function checkLogin(){
	if(sessionStorage.id_admin == null){
		window.location.href = "login.php";
	}
}

function login(username, password){
	var db = firebase.database();
	db.ref("Admin").orderByChild("username").equalTo(username).once("child_added").then(function(snapshot) {
	  	if(snapshot.exists()){
	  		if(password == snapshot.val().password){
			  	sessionStorage.setItem("id_admin", snapshot.key);
			  	sessionStorage.setItem("username", username);
			  	window.location.href = "index.php";
			}else{
				alert("Password salah");
			}
	  	}else{
	  		alert("Username salah");
	  	}
	});
}

function logout(){
	sessionStorage.clear();
	window.location.href = "login.php";
}