<style type="text/css">
main
  {
    min-height:           80vh;
    padding-top:          10vh;
    padding-bottom:       5vh;
    background-color:     #fff;
  }
  
 #challengeInformation .mainButtonBright
  {
      font-family:        'Muli', sans-serif;
      font-weight:        400;
      font-size:          16px;
      letter-spacing:     1px;
      display:            inline-block;
      padding:            8px 28px;
      border-radius:      50px;
      transition:         0.5s;
      margin:             10px;
      color:              #000;
      background-color:   #fff;
  }
 #challengeInformation .mainButtonBright:hover
  {
    cursor:               pointer;
    transition:           scale(1.08);
    box-shadow:           0 8px 16px 0 rgba(0,0,0,0.2);
  }
  #intro
  {
    height:               60vh  !important;
    background-image:     url("<?=base_url('assets/img/Landing_Page/background.jpg')?>");
  }
  .intro-test
  {
    padding-top:         20%;
  }
  big
  {
    font-weight:          bold;
    font-size:            25px;
    color:                black;
  }
</style>

<section id="intro">
  <div class="intro-text">
  	<br><br><br><br><br>
    <center><h2>CV or RESUME</h2></center>
    <center><p>Know the difference</p></center>
    <a href="#challengeInformation" class="btn-get-started scrollto">Read</a>
  </div>
</section>

<main>
	<div class = "container" id = "challengeInformation">
		    <br><br><br>
			
			<center><h2>Know the differences between a CV and Resume</h2></center><hr>	
			
			<p>You all must have heard about both, but are accustomed to use one or the other. All job applications follow different sets of rules and hence you need to know when to use a CV or a Resume.</p>
			
			<p><big>CV is an in depth document</big> laying out all your educational, professional history as well as any other accomplishments. CV is generally long and a detailed document and is organized chronologically to make it easily readable.</p>
		    
		    <p><big>RESUME is a concise document</big> which contains your personal, educational and professional achievements or experiences relevant to a specific job application. It is generally of one page and gives a quick overview of your fitness for the specific job</p>

		    <p>
		    	<h3><big>How are they different?</big></h3>
		    </p>

		    <ul class="diff">
			  <li><b>CV</b> covers your entire career and hence becomes long as compared to <b>Resume</b> which covers a brief summary of skills and experiences for a specific job application.</li>
			  
			  <li><b>CV</b> is static as you don’t need to change or customize it for different job applications because it contains all the information required whereas a <b>Resume</b> is highly customizable because you need to tailor your Resume to a specific job application.</li>
			  
			  <li><b>CV</b> should always be written in a chronological manner whereas for a <b>Resume</b> every recruiter wants to see your recent experiences first or at the top and hence you need to write a Resume in reverse chronological order.</li>
			</ul>

			<p>
		    	<h3><big>When to use what?</big></h3>
		    </p>

		    <ul class="use">
			  <li><b>CV</b> should be used when you are applying for a job where you don’t have any relevant experience or you are trying to change your career field. People in academics and medical industry generally use CV.</li>
			  
			  <li><b>Resume</b> should be used where you have got some relevant experience or knowledge about the industry as here recruiters want to know that how your skills or experiences fits into their requirement.</li>
			  
			</ul>

            <p>Always keep in mind to read the job description well as sometimes the recruiter needs only the CV or Resume and if you send the wrong one you may not stand a chance of being interviewed.</p>
            
            <div class="Disclaimer">
            	<b>We will be updating you on how to write a perfect Resume and CV in our coming posts!</b>
        	</div>

        <center><a href = "<?=base_url('welcome')?>" class = "mainButtonBright">Show Similar Articles</a></center>
	</div>
</main>
