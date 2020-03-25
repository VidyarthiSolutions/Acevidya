<style type="text/css">
	#solve
	{
		font-size: 	45px;
	}
</style>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <div class="header">
                <h3>stats at glance</h3> </div>
            <div class="contentImg"> <img src="<?=base_url('assets/img/profile.png')?>"></div>

            <br><br>
            <div class="row">
            		<h4 class="col-md-3">Solved&nbsp;&nbsp;<b>567 Questions</b></h4>
            		<h4 class="col-md-3">Correct&nbsp;&nbsp;<b>456 Questions</b></h4>
            		<h4 class="col-md-3">Incorrect&nbsp;&nbsp;<b>456 Questions</b></h4>
            		<h4 class="col-md-3">Accuracy&nbsp;&nbsp;<b>97%</b></h4>

            </div>
            <br>
            <div class="progress" style="height: 20px;">
			  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;background-color:green;">
			   CORRECT
			  </div>
			  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%;background-color:red;">
			    INCORRECT
			  </div>
			</div>
            <br>
            <a href="" class="float-right">View Details</a><br>
            <div class="row" >
            	<div class="col-md-12">
            		<center><h3>Recommanded Courses</h3></center><hr>
            		<div class="cards" ng-repeat="course in pq.data">
                    <img src="<?=base_url('assets/img/admin.png')?>">
                    <div class="container">
                      <center><h5><b>Logical</b></h5></center> 
                      <center>
                        <button class = "btn btn-outline-info">Attempt</button>
                        <button class       = "btn btnC float-right" 
                                data-toggle = "modal" 
                                data-target = "">i</button>
                      </center><br> 
                    </div>
                  </div>

                  <div class="cards" ng-repeat="course in pq.data">
                    <img src="<?=base_url('assets/img/admin.png')?>">
                    <div class="container">
                      <center><h5><b>Logical</b></h5></center> 
                      <center>
                        <button class = "btn btn-outline-info">Attempt</button>
                        <button class       = "btn btnC float-right" 
                                data-toggle = "modal" 
                                data-target = "">i</button>
                      </center><br> 
                    </div>
                  </div>

                  <div class="cards" ng-repeat="course in pq.data">
                    <img src="<?=base_url('assets/img/admin.png')?>">
                    <div class="container">
                      <center><h5><b>Logical</b></h5></center> 
                      <center>
                        <button class = "btn btn-outline-info">Attempt</button>
                        <button class       = "btn btnC float-right" 
                                data-toggle = "modal" 
                                data-target = "">i</button>
                      </center><br> 
                    </div>
                  </div>

                  <div class="cards" id="final">
                    <img src="<?=base_url('assets/img/loading.png')?>">
                    <div class="container">
                      <center><h5><b>WE HAVE MORE..</b></h5></center> 
                      <center>
                        <button class="btn btn-warning">View More&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
                      </center><br> 
                    </div>
                  </div>

            	</div>
            </div>
        </div>
    </main>