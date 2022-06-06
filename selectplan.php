<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Raccoon AI - Home</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Bootstrap 4 Template For Software Startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
	

</head> 

<script>

	//Tools to analyze data

	//analyze my data
	function Button01Submit () {
		var iframe = $("#button_01");
		iframe.attr("src", iframe.data("src")); 

		$(document).ready(function(){
			var url = "https://raccoon-ai.df.r.appspot.com/analyze";
			$('#button_01').attr("src", url);
		})
	}

	//PCA
	function Button02Submit () {

		var iframe = $("#button_01");
		iframe.attr("src", iframe.data("src") , iframe.data("data-src")); 

		$(document).ready(function(){
			var url = "https://racoon-ai.df.r.appspot.com/about";
			$('#button_01').attr("src", url);
		})
	}

	//Preprocess data
	function Button03Submit () {
		var iframe = $("#button_01");
		iframe.attr("src", iframe.data("src") , iframe.data("data-src"));
		
		$(document).ready(function(){
			var url = "https://raccoon-ai.df.r.appspot.com/preprocess";
			$('#button_01').attr("src", url);
		})	
	}




</script>

<body class="docs-page">    
    <header class="header fixed-top">	    
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
					<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none" type="button">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </button>
	                <div class="site-logo"><a class="navbar-brand" href="index.php"><img class="logo-icon me-2" src="assets/images/new_logo/favicon.ico" alt="logo"><span class="logo-text">Raccoon<span class="text-alt"> AI</span></span></a></div>    
                </div><!--//docs-logo-wrapper-->
	            <div class="docs-top-utilities d-flex justify-content-end align-items-center">
					
                &nbsp&nbsp
					<a href="logout.php" style="width: 150px; text-align: center;" class="btn btn-primary">Log Out</a>
						

					<ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
						<!-- <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
		                <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
		                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li> -->
		            </ul><!--//social-list-->
		            <!-- <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderdocs-free-bootstrap-5-documentation-template-for-software-projects/" class="btn btn-primary d-none d-lg-flex">Download</a> -->
	            </div><!--//docs-top-utilities-->
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->
    
	
    
	    <div class="docs-content">
		    <div class="container">


			    <article class="docs-article" id="section-1">
				    <header class="docs-header">
					    <h1 class="docs-heading">Select Your Plan <span class="docs-time"></span></h1>
					    <section class="docs-intro">
						    
						</section><!--//docs-intro-->

						<div class="page-content">
							<div class="container">
								<div class="docs-overview py-5">
									<div class="row justify-content-center">
					
									<div class="col-12 col-lg-4 py-3">
											<div class="card shadow-sm">
												<div class="card-body">
													<h5 class="card-title mb-3">
														<span class="theme-icon-holder card-icon-holder me-2">
															<i class="fas fa-box fa-fw"></i>
														</span><!--//card-icon-holder-->
														<span class="card-title-text">Plan 01 - Silver Package</span>
													</h5>
													<img src="assets/images/img/silv.png" width="300" height="400" alt="logo">
													<div class="card-text">
														<br>
														User have purchase Silver Package   							    
													</div>
													<a class="card-link-mask" href="#item-2-1" class="btn btn-primary" id="Button11Submit" onclick="Button11Submit()"></a>												</div><!--//card-body-->
											</div><!--//card-->
										</div><!--//col-->
					
										<div class="col-12 col-lg-4 py-3">
											<div class="card shadow-sm">
												<div class="card-body">
													<h5 class="card-title mb-3">
														<span class="theme-icon-holder card-icon-holder me-2">
															<i class="fas fa-box fa-fw"></i>
														</span><!--//card-icon-holder-->
														<span class="card-title-text">Plan 02 - Gold Package</span>
													</h5>
													<img src="assets/images/img/gold.png" width="300" height="400" alt="logo">
													<div class="card-text">
														<br>
														User have purchase Gold Package 							    
													</div>
													<a class="card-link-mask" href="#item-2-1" class="btn btn-primary" id="Button10Submit" onclick="Button10Submit()"></a>												</div><!--//card-body-->
											</div><!--//card-->
										</div><!--//col-->

										<div class="col-12 col-lg-4 py-3">
											<div class="card shadow-sm">
												<div class="card-body">
													<h5 class="card-title mb-3">
														<span class="theme-icon-holder card-icon-holder me-2">
															<i class="fas fa-box fa-fw"></i>
														</span><!--//card-icon-holder-->
														<span class="card-title-text">Plan 03 - Platinum Package</span>
													</h5>
													<img src="assets/images/img/plat.png" width="300" height="400" alt="logo">
													<div class="card-text">
														<br>
														User have purchase Platinum Package 							    
													</div>
													
													<a class="card-link-mask" href="#item-2-1" class="btn btn-primary" id="Button09Submit" onclick="Button09Submit()"></a>
												</div><!--//card-body-->
											</div><!--//card-->
										</div><!--//col-->
					
					
																		
									</div><!--//row-->
								</div><!--//container-->
							</div><!--//container-->
					   </div>
					   <a href="docs-page.html" style="width: 150px; text-align: center;" class="btn btn-primary">Back</a>  
					   <!--//page-content-
						



						<h5>Github Code Example:</h5> -->

						<!-- <p>You can <a id="LinkSubmit" onclick="LinkSubmit()" class="theme-link"  >Submit</a></p>

						<script>
							function LinkSubmit () {
								var iframe = $("#submitFrame");
								iframe.attr("src", iframe.data("src")); 
							}
						</script> -->

						<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
						<!-- <button id="LinkSubmit" onclick="LinkSubmit()">OPEN</button> -->
						<!-- <iframe id="submitFrame" data-src="https://slt-business-intelligence.el.r.appspot.com/about" src="about:blank" width="500" height="200" style="background:#a5cfbe"></iframe> -->


						
					     <!-- <h5>Highlight.js Example:</h5>
						<p>You can <a class="theme-link" href="https://github.com/highlightjs/highlight.js" target="_blank">embed your code snippets using highlight.js</a> It supports <a class="theme-link" href="https://highlightjs.org/static/demo/" target="_blank">185 languages and 89 styles</a>.</p>
						<p>This template uses <a class="theme-link" href="https://highlightjs.org/static/demo/" target="_blank">Atom One Dark</a> style for the code blocks: <br><code>&#x3C;link rel=&#x22;stylesheet&#x22; href=&#x22;//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css&#x22;&#x3E;</code></p> -->
						<!-- <div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="json hljs">[
														{
															<span class="hljs-attr">"title"</span>: <span class="hljs-string">"apples"</span>,
															<span class="hljs-attr">"count"</span>: [<span class="hljs-number">12000</span>, <span class="hljs-number">20000</span>],
															<span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
														},
														{
															<span class="hljs-attr">"title"</span>: <span class="hljs-string">"oranges"</span>,
															<span class="hljs-attr">"count"</span>: [<span class="hljs-number">17500</span>, <span class="hljs-literal">null</span>],
															<span class="hljs-attr">"description"</span>: {<span class="hljs-attr">"text"</span>: <span class="hljs-string">"..."</span>, <span class="hljs-attr">"sensitive"</span>: <span class="hljs-literal">false</span>}
														}
														]


						</code>
							</pre>
						</div> -->
						
						
				    </header>
				    <!-- <section class="docs-section" id="item-1-1">
						<h2 class="section-heading">Implement Your Workflows in Python</h2>
						<br>
						<h4>Prerequisites:</h4>
						<p>Make sure you have <a class="theme-link" href="https://git-scm.com/downloads" target="_blank">Git</a> , and <a class="theme-link" href="https://www.python.org/downloads/" target="_blank">Python</a> >= 3.7 installed.</p>
						
						<br>
						<h4>Start a new project / repository</h4>
						<p>Use following commands to construct your repository</p>

						<ul>
						    <li><strong class="me-1">(venv)$</strong> <code>git clone</code></li>
							<li><strong class="me-1">(venv)$</strong> <code>To be added</code></li>
							<li><strong class="me-1">(venv)$</strong> <code>To be added</code></li>

						</ul> -->
						

					
			    </article>
			    










			    

				
			    
			

			    <footer class="footer">
				    <div class="container text-center py-5">
				        <!-- <small class="copyright">Template Copyright &copy; <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small> -->
				        <ul class="social-list list-unstyled pt-4 mb-0">
						    <!-- <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
				            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
				            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li> -->
				        </ul><!--//social-list-->
				    </div>
			    </footer>
		    </div> 
	    </div>
    </div><!--//docs-wrapper-->
   
       
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/docs.js"></script> 

</body>
</html>