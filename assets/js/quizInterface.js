(function(){

    angular
        .module("PracticeQuestions",[]);
})();

(function(){
	angular
        .module("PracticeQuestions")
        .controller("practice", PracticeController);
    
    function PracticeController($http)
    {

        var vm              = this;
        vm.dataService      = [];
        vm.init             = init;
        vm.activeQuestion   = 0;
        vm.questionPrevious = questionPrevious;
        vm.questionAnswered = questionAnswered;
        vm.totalQuestions   = 0;
        vm.setQuestion      = setQuestion;
        vm.selectAnswer     = selectAnswer;
        vm.resetQuestion    = resetQuestion;
        vm.quizInterface    = true;
        vm.askConfirm       = false;
        vm.quizSolution     = false;
        vm.submit           = submit;
        vm.confirm          = confirm;

        //Marks Calculation
        vm.positiveMarks    = 0;
        vm.negativeMarks    = 0;
        vm.correct          = 0;
        vm.inCorrect        = 0;
        vm.attempted        = 0;
        vm.totalMarks       = 0;
        vm.marksObtained    = 0;
        vm.percentage       = 0;

        function confirm()
        {
            vm.quizInterface    = false;
            vm.askConfirm       = true;
            vm.quizSolution     = false;

        }

        function submit()
        {
            vm.quizInterface    = false;
            vm.askConfirm       = false;
            vm.quizSolution     = true;

            for(var i = 0; i < vm.totalQuestions; i++)
            {
                if(vm.dataService[i].selected == 0);
                else if (vm.dataService[i].selected == vm.dataService[i].correctOption)
                {
                    vm.positiveMarks    = Number(vm.positiveMarks) + Number(vm.dataService[i].correctMarks);
                    vm.attempted++;     vm.correct++; 
                    vm.dataService[i].correct = 1;                   
                }
                else if (vm.dataService[i].selected != vm.dataService[i].correctOption)
                {
                    vm.negativeMarks    = Number(vm.negativeMarks) + Number(vm.dataService[i].inCorrectMarks);
                    vm.attempted++;     vm.inCorrect++;  
                }
            }   

            vm.marksObtained    = Number(vm.positiveMarks - vm.negativeMarks);
        }

        function setQuestion(index)
        {
            vm.activeQuestion = index;
        }

        function init(quizID)
        {

            $http.get("../../attemptQuiz/returnQuestions/"+quizID).then(function(response)
            {
                vm.dataService      = response.data;
                vm.totalQuestions   = response.data.length;
            });

            vm.quizInterface    = true;
            vm.askConfirm       = false;
            vm.quizSolution     = false;
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
            vm.dataService[vm.activeQuestion].selected = index;
        } 

        function resetQuestion()
        {
            vm.dataService[vm.activeQuestion].selected = 0;
        }    
    }

})();