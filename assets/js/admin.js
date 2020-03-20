(function(){
	angular
		.module("admin",[]);
})();


(function(){
	angular
		.module("admin")
		.controller("addCourse",addCourse);

function addCourse($http){
	    
	    var vm 	        		= this;
	    vm.init					= init;
	    vm.viewCourse			= viewCourse;
	    vm.courses 				= [];
	    vm.search 				= "";

	    function viewCourse(index){
	    	
	    	vm.singleCourse 	= index; 
	    }

	    function init(){

	    	$http.get("admin/returnCourseList").then(function(response){
                vm.courses 		= response.data;
            });
	    }
}

})();