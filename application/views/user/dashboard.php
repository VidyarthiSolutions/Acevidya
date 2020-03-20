<div id="layoutSidenav_content">
  <main ng-app="viewAllCourses" ng-controller="viewAllCoursesController as pq">
    <div class="container-fluid">
      <div class="header">
        <h3>practice</h3>
      </div>
      <div class="contentImg"> <img src="<?=base_url('assets/img/dashboard.png')?>"> </div>
      <!-- <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search....">
        <div class="input-group-append">
          <button class="btn btn-outline-info"><i class="fa fa-search"></i></button>
        </div>
      </div> 
      <br>-->
      <div class="accordion" id="accordionExample">
        <?php for($i=0;$i<count($subjects);$i++):?>
          <div class="card">
            
            <div class="card-header" id="<?='heading'.$i?>">
              <h5 class="mb-0">
                <?=$subjects[$i]['subjectName']?>
                <button   class         = "btn btn-outline-info float-right" 
                          type          = "button" 
                          data-toggle   = "collapse" 
                          data-target   = "<?='#collapse'.$i?>" 
                          aria-controls = "<?='collapse'.$i?>"
                          ng-click      = "pq.loadCourses('<?=$subjects[$i]['subjectCode']?>')">
                  Expand <i class="fa fa-arrow-down"></i>
                </button>
              </h5>
            </div>

            <div id="<?='collapse'.$i?>" class="collapse" aria-labelledby="<?='heading'.$i?>" data-parent="#accordionExample">
              <div class="card-body">
                <div class = "horizontalScrollContainer ">

                  <div class="cards" ng-repeat="course in pq.data">
                    <img src="<?=base_url('data/courses/{{course.imgUrl}}')?>">
                    <div class="container">
                      <center><h5><b>{{ course.courseName }}</b></h5></center> 
                      <center>
                        <button class = "btn btn-outline-info">Attempt</button>
                        <button class       = "btn btnC float-right" 
                                data-toggle = "modal" 
                                data-target = "<?='#headingModal'.$i?>"
                                ng-click    = "pq.loadModelData(course)">i</button>
                      </center><br> 
                    </div>
                  </div>

                  <!-- Modal -->
                    <div class="modal fade" id="<?='headingModal'.$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <img src="<?=base_url('data/courses/{{pq.modelData.imgUrl}}')?>">
                            <br><br>
                            <center><h4>{{ pq.modelData.courseName }}</h4></center>
                            <center>{{ pq.modelData.shortDescription }}</center>
                            <div class = "row">
                              <div class = "col-md-2"></div>
                              <div class = "col-md-5">
                                <big><b>{{ pq.modelData.noOfQuestion }}</b></big><small>questions</small>
                              </div>
                              <div class = "col-md-5">
                                <big><b>{{ pq.modelData.totalMarks }}</b></big><small>marks</small>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                             <button type="button" class="btn btn-outline-info" data-dismiss="modal">Attempt</button>
                            <button type="button"  class="btn btn-secondary"    data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!--end of modal-->

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
        <?php endfor?>
      </div>
    </div>
  </main>
