(function(){
	angular
		.module("myApp",[]);
})();


(function(){
	angular
		.module("myApp")
		.controller("courseList",courseList);

function courseList($scope,$http){
	    
	    var vm 	        = $scope;
	    vm.url 			= "data/courseList/courseList.json";
	    vm.search		= "";

	    $http.get(vm.url).success(function (response){
	        vm.courses  = response;
	    });
}

})();