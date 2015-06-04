<div id="preview" class="modal bottom-sheet">
	<div class="modal-content">
		<div class="container">
			<h5 class="section">Content Preview</h5>
			<div class="divider"></div>
			<div id="preview-content" class="section">No text entered!</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function preview(container){

		var text = $(container).val();

		if(!text){
			text = "No text entered";
		}

		$('#preview-content').html(text);

		MathJax.Hub.Queue(["Typeset",MathJax.Hub,"preview-content"]);

		$('#preview').openModal();
	}
</script>