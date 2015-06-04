function preview(container){

	var text = $(container).val();

	if(!text){
		text = "No text entered";
	}

	text = markdown.toHTML(text.replace(/\\/g,"\\\\"));

	$('#preview-content').html(text);

	MathJax.Hub.Queue(["Typeset",MathJax.Hub,"preview-content"]);

	$('#preview').openModal();
}
