#include<stdio.h>
#include<locale.h>
//João Luiz Rangel De Barros Reis.

main() {
	setlocale(LC_ALL,"portuguese");

	char opcao;
	int +,-,*,/;
	printf("Digite I ou R:  \n");
	scanf("%c", &opcao);
	
	switch(opcao){ //se variavel
		case 'i': // for tal
		 	printf("\nVoce escolheu a letra i");
		 	break;
		case 'r':
			printf("\nVoce escolheu a letra r");
			break;
		default:
			printf("\nVocê errou viado");
	}	
 }
