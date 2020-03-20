(function(){

    angular
        .module("PracticeQuestions",['ngSanitize']);
})();

(function(){
	angular
        .module("PracticeQuestions")
        .controller("practice", PracticeController);
    
    function PracticeController($http,$location){

        var vm                      = this;
        vm.dataService              = "";
        
        vm.activeQuestion           = 0;
        vm.questionAnswered         = questionAnswered;
        vm.questionPrevious         = questionPrevious;
        vm.totalQuestions           = 0;
        vm.showSolutions            = false;
        vm.selectAnswer             = selectAnswer;
        vm.setQuestion              = setQuestion;

        vm.attempted                = 0;
        vm.correct                  = 0;
        vm.incorrect                = 0;
        vm.init                     = init;
        vm.url                      = $location.$$absUrl;

        function init(practiceUrl,studentId)
        {
            if(studentId == 0)
            {
                $http.get("../../user/initializeQuiz/8").then(function (response){
                    vm.dataService              = response.data;
                    vm.totalQuestions           = response.data.length;
                });
            }
            else
            {
               $http.get("../../user/initializeQuiz/8/1").then(function (response){
                    vm.dataService              = response.data;
                    vm.totalQuestions           = response.data.length;

                    for (var i = 0; i < vm.dataService.length; i++) 
                    {
                        if(vm.dataService[i].correctOption == vm.dataService[i].selected && vm.dataService[i].selected != 0)
                        {
                            vm.correct++;
                            vm.attempted++;
                        }
                        else if (vm.dataService[i].correctOption != vm.dataService[i].selected && vm.dataService[i].selected != 0)
                        {
                            vm.attempted++;
                            vm.incorrect++;
                        }
                    }
                }); 
            }
        }
        

        function selectAnswer(index)
        {

            if(vm.dataService[vm.activeQuestion].selected==null){

                vm.dataService[vm.activeQuestion].selected  = index;
                vm.attempted                                = vm.attempted + 1;
                
                if(vm.dataService[vm.activeQuestion].correctOption == index){
                    vm.correct                                  = vm.correct + 1;
                    vm.dataService[vm.activeQuestion].correct  = true;
                }
                else{
                    vm.incorrect        = vm.incorrect + 1;
                    vm.dataService[vm.activeQuestion].correct = false;
                }
                vm.showSolutions        = true;
            }
        }

        function setQuestion(index)
        {
            vm.activeQuestion    = index;
            vm.showSolutions     = false;
        } 

        function questionPrevious()
        {
          
          if(vm.activeQuestion>0)
            {
                vm.activeQuestion   = (vm.activeQuestion-1)%vm.totalQuestions;
                vm.showSolutions    = false;
            }
        }

      function questionAnswered()
        {
            vm.activeQuestion       = (vm.activeQuestion+1)%vm.totalQuestions;
            vm.showSolutions        = false;
        }
    }

})();