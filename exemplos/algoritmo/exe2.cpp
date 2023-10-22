#include<stdio.h>
#include<locale.h>
#include<stdlib.h>

//João Luiz Rangel De Barros Reis.

//10 funcionarios
// 7 clientes vips
// 3 clientes comum


main() {
	setlocale(LC_ALL,"portuguese");

	char comprador;
	
	
	float vltotal,resultado;
	printf("======================================================================= \n ");
		printf("                           SISTEMA DE VENDA \n");
	printf("======================================================================= \n ");
	
	printf("Quem esta comprando?  \n\nCliente Comum(1)\nCliente Vips(2)\nFuncionario(3) \n\nDigite:  ");
	scanf("%c",&comprador);
	
	
	printf("Digite o valor total a ser pago\nValor: ");
	scanf("%f",&vltotal);
	
	
	switch(comprador){
		case '3':
			resultado = vltotal - (vltotal * 0.1);
			printf("O valor total a ser pago do é funcionario é R$%.2f",resultado);
			break;
		case '2':
			resultado = vltotal - (vltotal * 0.07);
			printf("O valor total do Cliente vip é R$%.2f", resultado);
			break;
		case '1':
			resultado = vltotal - (vltotal * 0.03);
			printf("O valor total do Cliente comun R$%.2f", resultado);
			break;
		default:
			printf(" ERRO : Digite o comprador correto!");
	}		
}
	
	
	
