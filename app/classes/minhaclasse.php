<?php 
	
	namespace  App\classes;

		class minhaclasse{
			public static function CriarCodigo(){

				$valor ='';
				$caracteres = 'abcdefghijklmnoqprtsuvwxyz_ABCDEFGHIJKLMNOQPRTSUVWXYZ1234567890!?#$%';
				for($i=0;$i < 10 ; $i++){
					$index = rand(0,strlen($caracteres));
					$valor .= substr($caracteres, $index,1);
				}
				return $valor;
			}
		}

 ?>