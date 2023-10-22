#include<stdio.h>
#include<locale.h>

main() {
	setlocale(LC_ALL,"portuguese");
	
	int i,j;
	printf("digite o primeiro valor: ");
	scanf("%d", &i);
	printf("digite o segundo valor: ");
	scanf("%d", &j);
	
	printf("O primeiro valor = %d é igual a segundo valor = %d? %d", i, j, i==j);
	
	printf("\n O primeiro valor = %d é diferente do segundo valor = %d? %d", i, j, i!=j);
	
 	printf("\n O primeiro valor = %d é menor ou igual do segundo valor = %d? %d", i, j, i<=j);
		
	printf("\n O primeiro valor = %d é maior ou igual do segundo valor = %d? %d", i, j, i>=j);
	
	printf("\n O primeiro valor = %d é menor do segundo valor = %d? %d", i, j, i<j);
		
	printf("\n O primeiro valor = %d é maior do segundo valor = %d? %d", i, j, i>j);
	
	
}
