<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>TOEIC PSU Phuket Test Online System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
    <style>
        .box{
          margin-top: 10px;
          margin-bottom: 10px;
            border: 5px solid black;
            text-align: left;
        }
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    color: inherit;
    font-family:"Raleway", sans-serif;
    font-weight: 300;
    line-height: 1.1;
}

.title h1, .title h2, .title h3, .title h4 { margin: 5px; }
.title {
    position: relative;
    display: block;
    padding-bottom: 0;
    border-bottom: 3px double #dcdcdc;
    margin-bottom: 30px;
}
	.title::before {
		width: 15%;
		height: 3px;
		background: #53bdff;
		position: absolute;
		bottom: -3px;
		content:'';
	}
a {
    color: #53bdff;
    text-decoration: none;
    outline: 0;
}
	a:hover {
		color: #06a0ff;
		text-decoration: none;
	}
p { margin: 10px 0; }
#editor {
	resize: vertical;
	overflow: auto;
	line-height: 1.5;
	background-color: #fafafa;
  background-image: none;
	border: 0;
  border: 2px solid black;
	min-height: 150px;
	box-shadow: none;
	padding: 8px 16px;
	margin: 0 auto;
	font-size: 14px;
	transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
}
	#editor:focus {
		background-color: #f0f0f0;
		border-color: black;
		box-shadow: none;
		outline: 0 none;
	}
    </style>
  </head>
  <body>
    <div>
        <div>
            <h1 class="display-2">Add news</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="box col-md-6">
              <form action="addNews2.php" method="post" enctype="multipart/form-data">
                <br>
              <div id="editparent">
              <div class="form-group">
				                <label class="control-label col-sm-4">Head news:</label>
				                <div class="col-sm-10">          
					                <h3><input type="text" name="head" required ></h3>
				                </div>
                            </div>
		<div id="editControls">
			<div class="btn-group">
				<a class="btn btn-xs btn-default" data-role="undo" href="#" title="Undo"><i class="fa fa-undo"></i></a>
				<a class="btn btn-xs btn-default" data-role="redo" href="#" title="Redo"><i class="fa fa-repeat"></i></a>
			</div>
			<div class="btn-group">
				<a class="btn btn-xs btn-default" data-role="bold" href="#" title="Bold"><i class="fa fa-bold"></i></a>
				<a class="btn btn-xs btn-default" data-role="italic" href="#" title="Italic"><i class="fa fa-italic"></i></a>
				<a class="btn btn-xs btn-default" data-role="underline" href="#" title="Underline"><i class="fa fa-underline"></i></a>
				<a class="btn btn-xs btn-default" data-role="strikeThrough" href="#" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
			</div>
			<div class="btn-group">
				<a class="btn btn-xs btn-default" data-role="indent" href="#" title="Blockquote"><i class="fa fa-indent"></i></a>
				<a class="btn btn-xs btn-default" data-role="insertUnorderedList" href="#" title="Unordered List"><i class="fa fa-list-ul"></i></a>
				<a class="btn btn-xs btn-default" data-role="insertOrderedList" href="#" title="Ordered List"><i class="fa fa-list-ol"></i></a>
			</div>
			<div class="btn-group">
				<a class="btn btn-xs btn-default" data-role="h1" href="#" title="Heading 1"><i class="fa fa-header"></i><sup>1</sup></a>
				<a class="btn btn-xs btn-default" data-role="h2" href="#" title="Heading 2"><i class="fa fa-header"></i><sup>2</sup></a>
				<a class="btn btn-xs btn-default" data-role="h3" href="#" title="Heading 3"><i class="fa fa-header"></i><sup>3</sup></a>
				<a class="btn btn-xs btn-default" data-role="p" href="#" title="Paragraph"><i class="fa fa-paragraph"></i></a>
			</div>
		</div>
		<div id="editor" contenteditable></div>
		<textarea name="text" id="editorCopy" required="required" style="display:none;"></textarea>
    </div>
    <br>
    <form class="sm-form">
  			                <div class="file-field ">
    			             <div class="btn btn-outline-primary  waves-effect float-left">
      				                <input type="file" name="fileupload">
				                </div>
                        </div>
                        <div style="text-align: center;">
                                <input type="submit" name="submit" class="btn btn-outline-primary btn-lg" value="Add news">
                            </div>
                        </form>
              </form>
              <br>
          </div>
          <div class="col-md-3"></div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      jQuery(document).ready(function($) {
	$('#editControls a').click(function(e) {
		e.preventDefault();
		switch($(this).data('role')) {
			case 'h1':
			case 'h2':
			case 'h3':
			case 'p':
				document.execCommand('formatBlock', false, $(this).data('role'));
				break;
			default:
				document.execCommand($(this).data('role'), false, null);
				break;
		}

		var textval = $("#editor").html();
		$("#editorCopy").val(textval);
	});

	$("#editor").keyup(function() {
		var value = $(this).html();
		$("#editorCopy").val(value);
	}).keyup();
	
	$('#checkIt').click(function(e) {
		e.preventDefault();
		alert($("#editorCopy").val());
	});
});
    </script>
  </body>
</html>