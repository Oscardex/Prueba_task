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
  	function CrearProducto(producto){
		
		$http.post("ProductoCrear",producto).then(function(data){
			vistaProducto();
		},function(error){
			console.log(error);
		});	
	};

	$scope.agregar= function(item){
		
		$http.post("ProductoAgregar").then(function(data){
			$scope.edicion = data.data.productos;

		},function(error){
			console.log(error);
		});	
	};

	
	$scope.editar = function(item){
			$http.post("Productos/"+item).then(function(data){
			;
				$scope.edicion = data.data.producto;
			},function(error){
				console.log(error);
			});	
	};
	$scope.editarProducto = function(id,identificador){
		if(identificador == 2){
			$http.post("ProductosGuardar/"+id,$scope.edicion).then(function(data){
				alert("Producto editado exitosamente");
				vistaProducto();
			},function(error){
				console.log(error);
			});
		}else if(identificador == 1){
			CrearProducto($scope.edicion);
			alert("Producto creado exitosamente");
			vistaProducto();
			
		}

	};

	$scope.eliminarProducto = function(id){
		if(confirm("Desea Eliminar el producto")){
				$http.post("ProductosEliminar/"+id).then(function(data){
				alert("Producto eliminado");
				vistaProducto();
							
			},function(error){
				console.log(error);
			});
		}else{
			alert("El registro no fue borrado");
		}
		
	};

});
