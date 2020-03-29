<style type="text/css">

main
  {
    min-height:           80vh;
    padding-top:          5vh;
    padding-bottom:       5vh;
    background-color:     #fff;
    color:                #000000;
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
    /* height:                     60vh  !important; */
    height: 100vh;
    background-image:           linear-gradient(#FFCC46, #FFCC46, #FFCC46);
    /* clip-path: polygon(
                                0 0,
                                100% 0,
                                100% 100%,
                                0 calc(100% - 5vw)
  ); */
    /* background-color: #FFD464; */
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

  h2,h3
  {
    color:                #000000;
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

  .fl-right
  {
    float: right;
  }

</style>



<script>
<!-- /* Text animation js script */ -->
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  /* // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css); */
};

/* End */
</script>

<section id="intro">
  <div class="intro-text">
  	<br><br><br><br><br>
    <h2 style="color: black">acevidya
      <sub>
        <span     class="txt-rotate"     data-period="2000"     data-rotate='[ "blog" ]'></span>
      </sub>
    </h2>
    <h3>Simple, effective and efficient</h3>
    <img src="<?=base_url('assets/img/girl-on-mac.png')?>" class="fl-right" style="max-width:20%;height:auto;" >
    <a href="#challengeInformation" class="btn-get-started scrollto" style="color: black; background-color: white">Let's start reading</a>

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
