<?php
$html = null;
$css = null;
$js = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST'  && !empty($_POST['pphhpp']) || $_SERVER['REQUEST_METHOD'] === 'POST'  && !empty($_POST['ccsssss']) || $_SERVER['REQUEST_METHOD'] === 'POST'  && !empty($_POST['jjss'])) {
	$html = $_POST['pphhpp'];
	$css = $_POST['ccsssss'];
	$js = $_POST['jjss'];
}
?>
<div class="Dashboard h-100">
	<div class="d-flex flex-row">
	  <div class="side-nav h-100 shadow">
	  	<ul class="list-group">
		  <li class="list-group-item list-active"><i class="material-icons">dashboard</i></li>
		</ul>
	  </div>
	  <div class="page-box pt-4 w-100">
	  	
	  	<div class="ml-4 mr-4" style="padding-top: 100px;">
	  		<iframe class="w-100" src="<?php echo $html?>"></iframe>
	  		
	  		<form id="preview-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  		<button type="submit" class="btn btn-default float-right mr-4 mb-4" id="run_button">Run</button>
	  		<div class="row mt-4">
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>PHP</h6>
		  				</div>
		  				<textarea name="pphhpp" id="PHP_input" class="asd w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>CSS</h6>
		  				</div>
		  				<textarea name="ccsssss" id="CSS_input" class="w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  			<div class="col-4">
	  				<div class="card-ide shadow-super-light ">
	  					<div class="p-2 header-ide text-light">
	  						<h6>Javascript</h6>
		  				</div>
		  				<textarea name="jjss" id="JS_input" class="w-100 border-0 text-ide" style="height: 250px"></textarea>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  	</form>
	  </div>
	</div>
</div>
<script type="text/javascript">

	var editor = CodeMirror.fromTextArea(document.getElementById('JS_input'), {
  mode:  "javascript",
  matchBrackets: true,
  lineNumbers : true
});
	var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('PHP_input'), {
  mode:  "xml",
  matchBrackets: true,
   lineNumbers : true
});
	var myCodeMirror1 = CodeMirror.fromTextArea(document.getElementById('CSS_input'), {
  mode:  "css",
  matchBrackets: true,
   lineNumbers : true
}); 
</script>
