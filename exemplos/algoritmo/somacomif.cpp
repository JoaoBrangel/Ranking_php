#include<stdio.h>
#include<locale.h>

main() {
	setlocale(LC_ALL,"portuguese");
	
	int n1,n2, soma;
	
	printf("Digite o primeiro numero!: \n");
	scanf("%d", &n1);
	
	printf("Digite o segundo numero: \n");
	scanf("%d", &n2);
	
	soma = n1 + n2;
	
	if(soma <= 10){
		printf("ahh o seu numero foi %d, e ele é menor que 10, digite novamente!!", soma);
	}else{
		printf("Parabens!! o seu numero é: %d, e ele é maior que 10,", soma);
	}
	
}
