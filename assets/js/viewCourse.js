(function(){

    angular
        .module("viewCourse",['ngSanitize']);
})();

(function(){
	angular
        .module("viewCourse")
        .controller("viewCourseController", viewCourse);
    
    function viewCourse($http)
    {

    	var vm              = this;
        
        //functions should be initialized here
        vm.init             = init;
        vm.nextQuestion     = nextQuestion;
        vm.previousQuestion = previousQuestion;
        

        //data should be initialized here
        vm.data             = [];
        vm.currentQuestion  = 0;
        vm.len              = 0;
        vm.startOption      = 0;

        function init(courseId)
        {
            $http.get("../../admin/returnCourseQuestion/"+courseId).then(function(response)
            {
                vm.data     = response.data;
                vm.len      = response.data.length;
            });
        }

        function nextQuestion()
        {
            vm.currentQuestion = (vm.currentQuestion + 4) % vm.len;
            vm.startOption     = vm.currentQuestion;
        }

        function previousQuestion()
        {
            if(vm.currentQuestion != 0)
            {
                vm.currentQuestion = (vm.currentQuestion - 4) % vm.len;
                vm.startOption     = vm.currentQuestion;   
            }
        }
    }

})();