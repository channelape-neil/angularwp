angular
	.module('app')
	.factory('Data', ['$scope', '$http', '$q', function( $scope, $http, $q ) {
		var factory = {};

		factory.get = function( key, value ) {
			var ret      = [];
			var deferred = $q.defer();
			var api      = '/?awp_callback=JSON_CALLBACK&awp_key=' + key + '&awp_value=' + value;

            $http
                .jsonp( api )
                .success(function(data) {
                    try {
                        ret = data.responseData;
                    }
                    catch( _err ) { 
                        console.error('Error: Factory.Data could not complete API request.');
                        deferred.reject(ret);
                    }
                    finally {
                        deferred.resolve(ret);
                    }
                });
            return deferred.promise;
		};

		factory.post = function() {
			//
			//  Nothing to post, yet.
			//
		};

		return factory;
	}]);