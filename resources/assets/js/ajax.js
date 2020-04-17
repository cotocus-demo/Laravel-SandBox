// <script type="text/javascript">
	$(document).ready(function() {

		$('#addform').on('submit', function(e){
			e.preventDefault();

			$.ajax({
				type:"get",
				url:"/ajaxOnSubmit",
				data:{
					name: $("#name").val()
				},
				success: function(response){
					console.log(response)

					alert("name saved");
				},
				error: function(error){
					console.log(error)
					alert("Name does not exist")
				}
			});

		});
	});

// </script>