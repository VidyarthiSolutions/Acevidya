(function(){

    angular
        .module("viewQuestionApp",[]);
})();

(function(){
	angular
        .module("viewQuestionApp")
        .controller("viewQuestionController", viewQuestionController);
    
    function viewQuestionController($http){

    	var vm              = this;
        vm.welcomeMsg      	= "Hello Friends, How are you?";
        vm.question 		= "";
        vm.solution 		= "";
        vm.options 	 		= [];

        function init()
        {
        	
        }
            
    }

})();