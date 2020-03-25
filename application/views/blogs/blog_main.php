<style type="text/css">

main
  {
    min-height:           80vh;
    padding-top:          5vh;
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
    height:                     60vh  !important;
    background-image:           linear-gradient(#0c4e4d, #199e9d,#1fc7c7);
    clip-path: polygon(
                                0 0,
                                100% 0,
                                100% 100%,
                                0 calc(100% - 5vw)
  );
  }
.intro-test
  	{
    	padding-top:              20%;
      transform:                skewY(6deg);
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
    font-size:            20px;
    color:                black;
    text-transform:       uppercase;
    color:                #0c4e4d;
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

  h2,h3
  {
    color:                #ffffff;
  }

  .blogPost img
  {
    width:               100%;
  }

  @media screen and (max-width: 600px) {
    .column
    {
      width:              100%;
      display:            block;
      margin-bottom:      20px;
    }
}

</style>

<section id="intro">
  <div class="intro-text">
  	<br><br><br><br><br>
    <h2>acevidya<sub>placements</sub></h2>
    <h3>Simple, effective and efficient</h3>
    <a href="#challengeInformation" class="btn-get-started scrollto">Let's start reading</a>
  </div>
</section>

<main>
	<div class = "container" id = "challengeInformation">
      <div class = "row">
        
        <div class = "column">
    		  <div class = "blogPost">
            <img src = "<?=base_url('assets/img/1.png')?>">
            <center><big>Necessity of Internships</big></center>
            <small>February 2020 | <i class="fa fa-clock-o" aria-hidden="true"></i> 4 min Read</small>
            <hr>
            <p>Learn how Intershipts affect your job prospects</p>
            <center><a href = "<?=base_url('welcome/read/internship')?>" class = "mainButtonBright">Read More</a></center>   
          </div>
        </div>

        <div class = "column">
          <div class = "blogPost">
            <img src = "<?=base_url('assets/img/2.png')?>">
            <center><big>Top Ten emerging careers</big></center>
            <small>February 2020 | <i class="fa fa-clock-o" aria-hidden="true"></i> 4 min Read</small>
            <hr>
            <p>Learn how Intershipts affect your job prospects</p>
            <center><a href = "<?=base_url('welcome/read/internship')?>" class = "mainButtonBright">Read More</a></center>   
          </div>
        </div>

        <div class = "column">
          <div class = "blogPost">
            <img src = "<?=base_url('assets/img/3.png')?>">
            <center><big>How to make a good CV</big></center>
            <small>February 2020 | <i class="fa fa-clock-o" aria-hidden="true"></i> 4 min Read</small>
            <hr>
            <p>Learn how Intershipts affect your job prospects</p>
            <center><a href = "<?=base_url('welcome/read/internship')?>" class = "mainButtonBright">Read More</a></center>   
          </div>
        </div>
        
      </div>

	</div>
</main>

<div class = "fixed-bottom alert alert-danger">
  This site uses cookies
  <a href="#" class="btn btn-success float-right" data-dismiss="alert" aria-label="close">COOL</a>
  <a href="#" class="btn btn-default float-right" >REVIEW</a>
</div>