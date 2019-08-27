
 var base_url = $('#base_url').val();

  function login_auth(){

  	var user 	=	$('#user').val();
  	var pass 	=	$('#pass').val();
  
  	var action 	=	'submit';

  	var data = {
  		user : user,
  		pass : pass,
  		action: action
  	}

  	$.post(base_url + 'LoginCtrl/login_auth', data, function(response) {
			var data = JSON.parse(response);

			// get url using json encode
			var url = data.url;


				if (data.status == 'success') {
					swal ({
						title: data.title,
		                text: data.message,
		                type: data.status,
		                timer: 1000,
		                showConfirmButton: false
		            }, function() {
		               	window.location.href = url;
					});
				}

				else {
					swal({
		                title: data.title,
		                text: data.message,
		                type: data.status,
		                timer: 1000,
		                showConfirmButton: false
		            });
				}



		});


  }