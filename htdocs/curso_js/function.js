function calc(x1, x2, operator){
	//A função eval tentar calcular os resultados
	var resultado = eval(`${x1} ${operator} ${x2}`);
	return resultado;

}

let resultado = calc(1,2, "+");

console.log(resultado);