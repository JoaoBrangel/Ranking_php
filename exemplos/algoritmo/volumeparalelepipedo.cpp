#include<stdio.h>
#include<locale.h>
//João Luiz Rangel De Barros Reis.
//Yuri Soares De Castro Santos.


main() {
	setlocale(LC_ALL,"portuguese");
	
	int base,altura,largura, v;
	printf("digite a base do paralelepípedo: ");
	scanf("%d", &base);
	printf("digite a altura do paralelepípedo: ");
	scanf("%d", &altura);
	printf("digite a largura do paralelepípedo: ");
	scanf("%d", &largura);
	
	v = (base * altura * largura);
	
	printf("O volume do paralelepípedo é %.2d", v);
}
