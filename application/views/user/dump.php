<div class="viewAll"> <a href="#" class="float-right viewAllButton">View All</a><br></div>
            <button class="collapsible">automata fix</button>
            <div class="courseList">
                <div    class     = "card"
                        ng-repeat = "course in pq.data"> 
                    <img src="<?=base_url('data/courses/{{course.imgUrl}}')?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center><h5 class="card-title">{{ course.courseName }}</h5></center>
                        <hr>
                        <p class="card-text">{{ course.shortDescription }}</p>
                        <center><a href="#" class="btn btn-outline-primary">Start Practice&nbsp;<i class="fa fa-arrow-right"></i></a></center>
                    </div>
                </div>
            </div>