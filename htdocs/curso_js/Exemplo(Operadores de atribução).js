let a = 10;
const b = "10";

//!== <= Diferente
//Não = False
//Sim = true
//|| <= Ou (Se uma ou as duas forem verdade ele vai dar true porque é uma ou outra)
//&& <= e (Se as duas forem true, porque é e, se a for igual a b e o tipo do b for string ele da true, se uma condição for false, ele da false)

console.log(a == b && typeof b == 'string'); // a é diferente de b(compara somente o valor da variavel)
//console.log(a != b); // a é diferente de b(compara somente o valor da variavel)
//console.log(a !== b); // a é diferente de b(compara o conteudo e o tipo da variavel)
//console.log(a == b); // a é igual a b? (Compara somente o conteudo da variavel)
//console.log(a === b); //compara o conteudo e o tipo da variavel!
