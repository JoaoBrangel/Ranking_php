#include<stdio.h>
#include<locale.h>
//#include<stdlib.h>

//Jo�o Luiz Rangel De Barros Reis.

main() {
	setlocale(LC_ALL,"portuguese");

	char operacao;
	
	
	float n1,n2, resultado;
	
	
	printf("Digite o primeiro numero \n");
	scanf("%f", &n1);
	
	printf("Digite o segundo numero\n");
	scanf("%f", &n2);
	
	//system("cls");
	printf("Digite a opera��o logica +, -, *, / \n");
	scanf(" %c", &operacao);
	
	
	switch(operacao){
		case '+':
			resultado = (n1 + n2);
			printf("A soma � %.2f",resultado);
			break;
		case '-':
			resultado = (n1 - n2);
			printf("A subtra��o � %.2f", resultado);
			break;
		case '*':
			resultado = (n1 * n2);
			printf("A subtra��o � %.2f", resultado);
			break;
		case '/':
			resultado = (n1 / n2);
			printf("A divis�o � %.2f",resultado);
			break;
		default:
			printf("Apresente uma opera��o valida");
	}		
}
	
	
	
