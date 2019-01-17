    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- I add them -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/editor/editor.js"></script>
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
	<!-- Costum one - I add them -->
    <script src="vendor/bootstrap/js/letterAvatar.js"></script>

    <!-- Costum one - I add them -->
	<script>
	    // Insert new chip
	    $("#chip-input").keyup(function (event) {
	        var data = this.value;
	        if (event.keyCode === 13) {
	            //alert(data);
	            $('<div class="chip"> ' + data + ' <span class="closebtn" >&times;</span></div>').insertBefore(this);
	            $(this).val(null);
	        }
	    });

	    // Remove chip
	    $(document).on('click', '.closebtn', function () {
	        //alert('test');
	        $(this).parent().remove();
	    });
	</script>
	<script>
	    $(document).ready(function () {
	        $('[data-toggle="tooltip"]').tooltip();
	    });
	</script>
	<script>
	    $(document).ready(function () {
	        $("#demo-editor-bootstrap").Editor();
	    });
	</script>