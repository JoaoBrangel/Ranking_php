#include<stdio.h>
#include<locale.h>

main() {
	setlocale(LC_ALL,"portuguese");
	
	int i,j;
	printf("digite o primeiro valor: ");
	scanf("%d", &i);
	printf("digite o segundo valor: ");
	scanf("%d", &j);
	
	printf("O primeiro valor = %d � igual a segundo valor = %d? %d", i, j, i==j);
	
	printf("\n O primeiro valor = %d � diferente do segundo valor = %d? %d", i, j, i!=j);
	
 	printf("\n O primeiro valor = %d � menor ou igual do segundo valor = %d? %d", i, j, i<=j);
		
	printf("\n O primeiro valor = %d � maior ou igual do segundo valor = %d? %d", i, j, i>=j);
	
	printf("\n O primeiro valor = %d � menor do segundo valor = %d? %d", i, j, i<j);
		
	printf("\n O primeiro valor = %d � maior do segundo valor = %d? %d", i, j, i>j);
	
	
}
