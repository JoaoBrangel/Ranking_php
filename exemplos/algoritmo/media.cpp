#include<stdio.h>
#include<locale.h>

main() {
	setlocale(LC_ALL,"portuguese");
	
	float valor1,valor2,valor3,valor4,valor5, media;
	printf("digite o primeiro valor: ");
	scanf("%f", &valor1);
	printf("digite o segundo valor: ");
	scanf("%f", &valor2);
	printf("digite o primeiro valor: ");
	scanf("%f", &valor3);
	printf("digite o segundo valor: ");
	scanf("%f", &valor4);
	printf("digite o segundo valor: ");
	scanf("%f", &valor5);
	
	media = (valor1 + valor2 + valor3 + valor4 + valor5) / 5;
	
	printf("O valor da média é %.2f", media);
}
