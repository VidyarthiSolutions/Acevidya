<style type="text/css">

main
  {
    min-height:           80vh;
    padding-top:          5vh;
    padding-bottom:       5vh;
    background-color:     #fff;
    color:                #000000;
		font-size: 			18px;
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
      background-color:   #FFCC46;

  	}

.mainButtonBright:hover
  {
    cursor:               pointer;
    transition:           scale(1.08);
    box-shadow:           0 8px 16px 0 rgba(0,0,0,0.2);
    color:                #000000;
  }

  p {
    font-size: 2.5em;
    text-align: center;
    margin-top: 5em;
  }




#intro
  {
    height:                     60vh;
    background-image:           linear-gradient(#03adfc, #82c7e0,#82c7e0);
    /* background-image:             linear-gradient(#FFCC46, #FFCC46, #FFCC46); */
  }

li
{
	/* font-weight: 		bold; */
	font-size: 			18px;
	color:				black;
}
big
  {
    font-weight:          bold;
    font-size:            20px;
    color:                black;
    text-transform:       uppercase;
    color:                #000000;
  }
.blogPost
  {
    padding:             5%;
    border-radius:       5px;
    margin:              2%;
    transition:          all .2s ease-in-out;
  }

  .column
  {
    float:               left;
    width:               33%;
    margin-bottom:       20px;
  }
  .blogPost:hover
  {
    box-shadow:          0 12px 20px 0 rgba(0,0,0,0.2);
    transform:           scale(1.06);
  }

	strong
	{
		font-weight: bold;
	}

  h2,h3
  {
    color:                #000000;
  }

  .blogPost img
  {
    width:               100%;
  }

  .headerImg img
  {
    width:               100%;
    transform:           scale(0.6);
  }
   .headerImg
    {
      margin-top:         -7%;
    }
  .intro-header
  {
    margin-top:          25vh;
  }


  .secondaryMenu
  {
    width:                100%;
    height:               10%;
    background-color:     #f5f5f5;
    display:              block;
    padding:              1%;
  }

  .secondaryMenu a
  {
    text-decoration:      none;
    margin-left:          3%;
    margin-right:         3%;
    cursor:               pointer;
    color:                #000;
    font-size:            17px;
    text-transform:       uppercase;
  }

  @media screen and (max-width: 600px)
  {
    .column
    {
      width:              100%;
      display:            block;
      margin-bottom:      20px;
    }

    .intro-header
    {
      margin-top:          0vh;
    }

    #intro
    {
      height:             100vh;
    }

    .headerImg
    {
      margin-top:         10%;
    }

    .secondaryMenu
    {
      padding:              3%;
    }

    .headerImg img
    {
        width:               100%;
        transform:           scale(0.8);
    }
  }


  .icon-bar {
  position: absolute;
  top: 80%;
  left: 10%;
  width: 50px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  /* display: none; */
  animation: fadeEffect 2s;
}

@keyframes fadeEffect { /* from 0 to full opacity */
   from {opacity: 0;}
   to {opacity: 1;}
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}
.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

/* .google {
  background: #dd4b39;
  color: white;
} */

.linkedin {
  background: #007bb5;
  color: white;
}
</style>

<script>
window.addEventListener("scroll", function() {showFunction()});

function showFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 500) {
      document.getElementById("socialBar").style.position = "sticky";
			document.getElementById("socialBar").style.top = "30%";
  } else {
      document.getElementById("socialBar").style.position = "absolute";
			document.getElementById("socialBar").style.top = "80%";
  }
}
</script>



<section id="intro">
  <div class = "container">
    <div class="row">
			<!-- <img src="<?=base_url('assets/img/cover-1.jfif')?>" width="100%"> -->

      <div class="col-sm headerImg">
        <img src="<?=base_url('assets/img/girl-on-mac.png')?>">
      </div>

      <div class="col-sm">
        <center class = "intro-header">
          <h2 style="color: black">acevidya
            <sub>
              <span     class="txt-rotate"     data-period="2000"     data-rotate='[ "blog" ]'></span>
            </sub>
          </h2>
          <h3>Simple, effective and efficient</h3>
          <a href="#challengeInformation" class="btn-get-started scrollto" style="color: black; background-color: white">Let's start reading</a>
        </center>
      </div>

    </div>


  </div>
</section>

<div class = "secondaryMenu">
  <a href = "">All</a>
  <a href = "">Popular</a>
  <a href = "">Latest</a>
  <a href = "" class = "float-right"><i class="fa fa-search" aria-hidden="true"></i></a>
</div>



<main>
  <div class = "icon-bar" id = "socialBar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  </div>
	<div class = "container" id = "challengeInformation">
		We often hear that most of the graduates are not employable and apart from academic majors there is a shortage of transferable skills among the recent graduates. Now, what are transferable skills actually? Those skills which you can develop and are applicable across all professions.

Our education system mainly focuses on memorization and recall which won't help much in future jobs because there is less demand for obedient workers now. Our workforce is changing and hence we need to upgrade ourselves with skills which will be required in the future, hence we look at few skills here which are necessary to have and will help you across all professions.
	<ol>
		<li><strong>Communication</strong>

			This includes listening, speaking and writing. Being able to articulate your ideas well and properly communicating with others is a big plus in today's workforce. Good communication helps you to build deeper relationships which directly affects your career growth.
		</li>
		<li>
			 <strong>Teamwork or Collaboration</strong>

				Our schools and colleges have always made us work in a competitive environment which has made us work independently and hence we don't easily fit into a team. Many companies now focus on team building more than hiring one great employee, as they no more want a bot who just listens to them and works accordingly. A team player can bring the best out of other coworkers which in turn boosts the productivity of the organization.
		</li>
		<li><strong>Problem Solving</strong>

			There is an increased demand for employees who can analyze a problem and solve them independently or come up with viable options. In a rapidly growing world, challenges will be there everywhere and employers need people who can solve problems, provide ideas to help the organization grow.
		</li>
		<li><strong>Adaptability</strong>

			In a rapidly changing job scenario, it is very important to be adaptable to different working conditions. You may need to use different software, tools or shift plans and adapt to new concepts in your domain, hence it is advisable to know the basic concepts in your domain and be friendly with different kinds of tools available.
		</li>
		<li><strong>Leadership</strong>

			No one likes a boss now, every organization seeks a leader in their employee. You can show that by using your interpersonal skills to help others develop along with you, motivate them and prioritizing to delegate tasks.
		</li>
		<li><strong>Professionalism</strong>

			You got to maintain professionalism while at work, you need to show personal accountability for your actions and habits. Be sure to reach on time, organize your work well, learn from your mistakes and be responsible.
		</li>
		<li><strong>Technology</strong>

			In this digital world, you got to know how to use technology efficiently in your domain of work. Employers will provide on the job training to use a particular technology but you never know when you need to adapt to a new technology hence being efficient with technology is a big advantage.
		</li>
		<li><strong>Detail Oriented</strong>

			Say no to silly mistakes and careless attitude. Whatever you do, do it thoroughly and cross-check it multiple times to be sure there aren't any errors. Employers need people who can finish a project on their own rather than someone who needs to get 100 feedbacks.
		</li>
		<li><strong>Initiative</strong>

			You need to be proactive to get a project for yourself or find solutions to your problems because nobody else is going to do that for you and employers like people who show interest on their own and start hustling.
		</li>
		<li><strong>Creativity</strong>

			You have to think differently to solve many complex problems and in turn, can innovate new solutions to the issues already in existence. Employers are constantly looking for people who have a different perspective on everything in life which shows their creativity in thinking. Creative thinking will help you come up with different solutions to the same problem.
		</li>
	</ol>

However, these skills don't require extra bucks to develop but you will definitely be paid extra bucks if you got these skills. Start practicing now and be ready to see the change in you.
	</div>
</main>
