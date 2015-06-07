function preview(container){

	var text = $(container).val();

	if(!text){
		text = "No text entered";
	}

	text = marked(text.replace(/\\/g,"\\\\"),{gfm: true, breaks: true, tables: true});

	$('#preview-content').html(text);

	MathJax.Hub.Queue(["Typeset",MathJax.Hub,"preview-content"]);

	$('#preview').openModal();
}
