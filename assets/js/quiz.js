(function(){

    angular
        .module("QuizQuestions",['ngSanitize']);
})();

(function(){
	angular
        .module("QuizQuestions")
        .controller("quiz", QuizController);
    
    function QuizController($http,$location)
    {

        var vm              = this;
        /*
            FUNCTIONS SHOULD BE INITIALIZED HERE
        */
        vm.init             = init;
        vm.questionPrevious = questionPrevious;
        vm.questionAnswered = questionAnswered;
        vm.selectAnswer     = selectAnswer;
        vm.setQuestion      = setQuestion;
        vm.reset            = reset;
        vm.endQuiz          = endQuiz;

        /*
            VARIABLES SHOULD BE INITIALIZED HERE
        */
        vm.data             = [];
        vm.activeQuestion   = 0;
        vm.totalQuestions   = 0;
        vm.showQuiz         = true;
        vm.testQuiz         = "This is for testing";
        vm.answered         = 0;
        vm.examKey          = [];
        vm.courseID         = 0;

        function init(courseID)
        {
            $http.get("../../user/initializeQuiz/"+courseID).then(function (response){
                vm.data             = response.data;
                vm.totalQuestions   = response.data.length;
                vm.courseID         = courseID;
            });
        }

        function questionPrevious()
        {
          if(vm.activeQuestion>0)
                vm.activeQuestion   = (vm.activeQuestion-1)%vm.totalQuestions;
        }

        function questionAnswered()
        {
            vm.activeQuestion       = (vm.activeQuestion+1)%vm.totalQuestions;
        }

        function selectAnswer(index)
        {
            vm.data[vm.activeQuestion].selected  = (index+1);    
        }

        function setQuestion(index)
        {
            vm.activeQuestion       = index;
        }

        function reset()
        {
            vm.data[vm.activeQuestion].selected  = null;
        }

        function endQuiz()
        {
            vm.showQuiz         = false;
            for (var i=0;i<vm.data.length;i++) 
               {
                   if(vm.data[i].selected != null)
                   {
                        vm.answered++;
                        vm.examKey[i] = vm.data[i].selected;
                   }
                   else
                   {
                        vm.examKey[i] = 0;
                   }
               }

            var request = $http({
                    method: "post",
                    url:'../../user/finalizeQuiz',
                    data: 
                    {
                        examKey:    vm.examKey,
                        courseID:   vm.courseID,
                    },
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
                });
        }
    }

})();