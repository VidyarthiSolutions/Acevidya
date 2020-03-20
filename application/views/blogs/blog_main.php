<style type="text/css">

main
  {
    min-height:           80vh;
    padding-top:          10vh;
    padding-bottom:       5vh;
    background-color:     #fff;
  }
  

.mainButtonBright
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
      background-color:   #defcef;

  	}

.mainButtonBright:hover
  {
    cursor:               pointer;
    transition:           scale(1.08);
    box-shadow:           0 8px 16px 0 rgba(0,0,0,0.2);
    color:                #000000;
  }

#intro
  {
    height:               60vh  !important;
    background-image:     url("<?=base_url('assets/img/Landing_Page/background.jpg')?>");
  }

.intro-test
  	{
    	padding-top:     20%;
  	}
li
{
	font-weight: 		bold;
	font-size: 			20px;
	color:				black;
}
big
  {
    font-weight:          bold;
    font-size:            30px;
    color:                black;
  }
.blogPost
  {
     box-shadow:          0 8px 16px 0 rgba(0,0,0,0.2);
     padding:             5%;
     border-radius:       5px;
     margin:              2%;
  }
  h2,h3
  {
    color:                #ffffff;
  }
</style>

<section id="intro">
  <div class="intro-text">
  	<br><br><br><br><br>
    <h2>Acevidya</h2>
    <h3>Simple, effective and efficient</h3>
    <a href="#challengeInformation" class="btn-get-started scrollto">Let's start reading</a>
  </div>
</section>

<main>
	<div class = "container" id = "challengeInformation">
		  <div class = "blogPost">
        <big>Necessity of Internships</big><hr>
        <p>This seems to be the biggest issue for young adults transitioning into the workforce these days.
          Employers in today’s labor market rely heavily on resumes that illustrate a relevant work history, whether that’s from internships, volunteer work, or actual job experience.
          A practical work background carries a major significance when attempting...<a href = "<?=base_url('welcome/read/internship')?>" class = "mainButtonBright">Read More</a></p>   
      </div>

      <div class = "blogPost">
        <big>Know the differences between a CV and Resume</big><hr>
        <p>You all must have heard about both, but are accustomed to use one or the other. All job applications follow different sets of rules and hence you need to know when to use a CV or a Resume......<a href = "<?=base_url('welcome/read/cv_and_resume')?>" class = "mainButtonBright">Read More</a></p>   
      </div>

      <div class = "blogPost">
        <big>Improving Communication Skills</big><hr>
        <p>Communication skills are an important aspect of our everyday life. But sound communication skills require time and effort, which shall pay you back in many folds. Everytime you go for campus placements, you have to make them aware about yourself in a limited and short time. Among hundreds of candidates similar academic backgrounds...<a href = "<?=base_url('welcome/read/communication_skills')?>" class = "mainButtonBright">Read More</a></p>   
      </div>
	</div>
</main>
