#include<stdio.h>
#include<locale.h>
//Jo�o Luiz Rangel De Barros Reis.
//Yuri Soares De Castro Santos.


main() {
	setlocale(LC_ALL,"portuguese");
	
	int base,altura,largura, v;
	printf("digite a base do paralelep�pedo: ");
	scanf("%d", &base);
	printf("digite a altura do paralelep�pedo: ");
	scanf("%d", &altura);
	printf("digite a largura do paralelep�pedo: ");
	scanf("%d", &largura);
	
	v = (base * altura * largura);
	
	printf("O volume do paralelep�pedo � %.2d", v);
}
