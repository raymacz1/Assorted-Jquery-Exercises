
<html>
	<head>
	 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">	 </script>
	  <script type="text/javascript">
	  $(document).ready(function() {
		$("#taskText").keydown(function(evt) {
		   if (evt.keyCode == 13) {
				addTask (this, evt);
			}
		});
		$("#addTask").click(function(evt) {
				addTask(document.getElementById('taskText'), evt);
		});
	  $("#tasks li").live("click" , function(evt) {
			if ($(this).hasClass('done')) {
		
				$(this).fadeOut("slow", function(evt) {
					$(this).remove();
				});
			}
			else {
				$(this).addClass('done');
		    }
	  });
	 });	
	  function addTask (textBox, evt) {
				evt.preventDefault();
				var taskText=textBox.value;
				$('<li>').text(taskText).appendTo('#tasks');
				//$('#tasks').append('<li>').text(tastText);
				textBox.value="";
		}
 
	 </script>
	
	  <style type="text/css">
		.done {
			text-decoration: line-through;
		}
	 </style>
	</head>
	<body>
		<ul id="tasks" />
		<input type="text" id="taskText" />
		<input type="submit" id="addTask" />
	</body>
</html>


