var req = new XMLHttpRequest();


function getPost() {
	var url = "getPost.php";
	req.open("GET", url, true);
	req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	req.onreadystatechange = function(){
		if (req.readyState == 4 && req.status == 200) {
			document.getElementById("post-content").innerHTML =req.responseText;
		}
	}
	req.send(null);
}


