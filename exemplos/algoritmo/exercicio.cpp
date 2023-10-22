#include<stdio.h>
#include<locale.h>
//#include<stdlib.h>

//João Luiz Rangel De Barros Reis.

main() {
	setlocale(LC_ALL,"portuguese");

	char operacao;
	
	
	float n1,n2, resultado;
	
	
	printf("Digite o primeiro numero \n");
	scanf("%f", &n1);
	
	printf("Digite o segundo numero\n");
	scanf("%f", &n2);
	
	//system("cls");
	printf("Digite a operação logica +, -, *, / \n");
	scanf(" %c", &operacao);
	
	
	switch(operacao){
		case '+':
			resultado = (n1 + n2);
			printf("A soma é %.2f",resultado);
			break;
		case '-':
			resultado = (n1 - n2);
			printf("A subtração é %.2f", resultado);
			break;
		case '*':
			resultado = (n1 * n2);
			printf("A subtração é %.2f", resultado);
			break;
		case '/':
			resultado = (n1 / n2);
			printf("A divisão é %.2f",resultado);
			break;
		default:
			printf("Apresente uma operação valida");
	}		
}
	
	
	
