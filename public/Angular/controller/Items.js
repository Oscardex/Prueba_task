var app = angular.module("HomeProductos",[],function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});


app.controller("ItemsController",function($scope,$http){
	$scope.productos = [];
	$scope.edicion = [];
	$scope.categorias = [];
	$scope.loading= true;

	vistaProducto();

  	function vistaProducto(){
  			$http.get("Productos").then(function(data){
			$scope.productos = data.data.productos;
			$scope.loading= false;
		},function(error){
			console.log(error);
			$scope.loading= false;

		});	
  	};

  	function CrearProducto(){
		
		$http.post("ProductoCrear",$scope.edicion).then(function(data){
			console.log(data);
			vistaProducto();
		},function(error){
			console.log(error);
		});	
	};


	$scope.agregar= function(item){
		
		$http.post("ProductoAgregar").then(function(data){
			console.log(data.data.productos.categoria);
			$scope.edicion = data.data.productos;
			$scope.categorias = data.data.productos.categoria;

			vistaProducto();
		},function(error){
			console.log(error);
		});	
	};

	

	$scope.editar = function(item){
			$http.post("Productos/"+item).then(function(data){
			console.log(data.data.productos);
			
				$scope.edicion = data.data.producto;
				$scope.categorias = data.data.producto.categoria;
			},function(error){
				console.log(error);
			});	
	};

	$scope.editarProducto = function(id,identificador){
		if(identificador == 2){
			$http.post("ProductosGuardar/"+id,$scope.edicion).then(function(data){
				console.log(data);
				vistaProducto();
			},function(error){
				console.log(error);
			});
		}else if(identificador == 1){
			CrearProducto();
		}

	};
	$scope.eliminarProducto = function(id){
		if(confirm("Desea Eliminar el producto")){
				$http.post("ProductosEliminar/"+id).then(function(data){
				console.log(data);
				vistaProducto();
							
			},function(error){
				console.log(error);
			});
		}else{
			alert("El registro no fue borrado");
		}
		
	};

});
