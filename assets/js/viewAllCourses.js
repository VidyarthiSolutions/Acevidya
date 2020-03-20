(function(){
    angular
        .module("viewAllCourses",[]);
})();

(function(){
	angular
        .module("viewAllCourses")
        .controller("viewAllCoursesController",viewAllCoursesController);
    
    function viewAllCoursesController($http,$location)
    {
        var vm              = this;
        
        //functions should be initialized here
        vm.loadCourses      = loadCourses;
        vm.loadModelData    = loadModelData;

        //variables should be initialized here
        vm.data             = [];
        vm.test             = "Test Purpose";
        vm.modelData        = {};

        vm.url              = $location.absUrl()+"returnCourseList/";   

        function loadCourses(subjectCode)
        {
            $http.get(vm.url+subjectCode).then(function(response)
            {
                vm.data     = response.data;
            });
        }

        function loadModelData(course)
        {
            vm.modelData    = course;
        }
    }

})();