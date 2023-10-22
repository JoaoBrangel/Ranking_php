#include <stdio.h>
#include <locale.h>
#include <math.h>
main(){
	setlocale(LC_ALL, "portuguese");
	float a, b, c;
	float delta, raiz1, raiz2;
	printf("Digite o valor do A: ");
	scanf("%f", &a);
	printf("Digite o valor do B: ");
	scanf("%f", &b);
	printf("Digite o valor do C: ");
	scanf("%f", &c);
	
 	delta = b * b - 4 * a * c;
	if (delta <0){
		printf("Não exitem raizes.");
	}
	else{
		if(delta == 0){
		   raiz1 = -b /2 * a;
		   printf("A raiz é: %.2f", raiz1);
	}
		else{
			raiz1 = (-b + sqrt(delta))/2*a;
			raiz2 = (-b - sqrt(delta))/2*a;
		printf("As raizes são: %.2f %.2f", raiz1, raiz2);
			
		} 
		
	}
			
}
