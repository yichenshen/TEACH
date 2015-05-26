$('#fileInput').change( function(event) {
	var tmppath = event.target.files.length;

	if(tmppath===0){
		tmppath = "No"
	}

	$('#output').val(tmppath + " file(s) uploaded");
});
