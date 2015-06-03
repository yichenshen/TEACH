<div class="container">
	<br />

	<?php require $_SERVER["DOCUMENT_ROOT"]."/layouts/shared/questiondisplay.layout.php"; ?>

	<?php if ($answered): ?>	
		<br />

		<?php require $_SERVER["DOCUMENT_ROOT"]."/layouts/shared/questionanswer.layout.php"; ?>

		<a 	href="/pages/staff/question/edit.php?id=<?php echo $qID; ?>" 
			class="btn-floating btn-large waves-effect waves-light waves-circle blue lighten-1 right tooltipped"
			data-position="left" data-delay="10" data-tooltip="Edit">
			<i class="mdi-editor-border-color right"></i>
		</a>
	<?php elseif($unaccepted): ?>
		<form action="/pages/staff/question/index.php">
			<button type="submit" 
					class="right btn-floating btn-large orange waves-effect waves-circle waves-light tooltipped"
					data-position="left" data-delay="10" data-tooltip="Accept this Question">
				<i class="mdi-av-playlist-add"></i>
			</button>
		</form>
	<?php else: ?>
		<a 	href="/pages/staff/question/edit.php?id=<?php echo $qID; ?>" 
			class="btn waves-effect waves-light green lighten-1 right">
			Answer <i class="mdi-editor-mode-edit right"></i>
		</a>
	<?php endif; ?>
</div>

<script type="text/javascript" src="/bower_components/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script type="text/x-mathjax-config">
	MathJax.Hub.Config({
	    tex2jax: {
	    	inlineMath: [['$', '$'], ['\\(','\\)']]
		}
	});
</script>