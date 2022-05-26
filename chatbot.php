<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chat With Us - Foodbuddy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/jquery.convform.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
	<section id="demo">
	    <div class="vertical-align">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">
	                    <div class="card no-border">
	                        <div id="chat" class="conv-form-wrapper">
	                            <form action="" method="GET" class="hidden">
	                                <select data-conv-question="Hello! I'm foodbuddy bot. How can I help you?" name="first-question">
	                                    <option value="query">Donate Food</option>
	                                    <option value="good">Join Community</option>
	                                </select>
									<select data-conv-question="Please Signup as Donor & Choose Add Post option from sidebar." name="first-question">
	                                    <option value="Assistance">Need More Assistance</option>
	                                    <option value="resolved">All queries resolved.Thank you!</option>
										
	                                </select>
									
	                                <div data-conv-fork="first-question">
	                                    <div data-conv-case="Assistance">
	                                        <input type="text" name="name" data-conv-question="Alright! First, tell me your full name, please.|Okay! Please, tell me your name first.">
											
	                                <input type="text" data-conv-question="okey, {name}:0! We are here to solve all your quaries" data-no-answer="true">
	                                <input type="text" data-conv-question="Please write your quary below" >
									<!-- <input type="text" data-conv-question="Your quary has been submitted" data-no-answer="true"> -->
	                                
	                               
	                                
	                                <select data-conv-question="Your quary has been submitted" id="">
	                                    <option value="">thank you</option>
	                                </select>
	                                    </div>
	                                    <div data-conv-case="resolved">
		                                    <select name="thought" data-conv-question="Nice to talk to you have a good day!">
		                                    </select>
	                                    </div>
	                            </form>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="dist/autosize.min.js"></script>
	<script type="text/javascript" src="dist/jquery.convform.js"></script>

	<script>
		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		
		
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(convForm);
		});
	</script>
</body>
</html>