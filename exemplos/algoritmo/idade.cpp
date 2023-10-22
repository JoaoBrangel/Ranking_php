#include<stdio.h>
#include<locale.h>

main() {
	setlocale(LC_ALL,"portuguese");
	
	int idade;
	
	printf("Digite a sua idade: \n");
	scanf("%d", &idade);

	
	if(idade < 18){
		printf("Você é Adolescente");
	}else{
	if(idade >= 18 && idade < 60){
	printf("Você é adulto");
	}
	else{
		printf("Você é idoso");
	}
	}
	
}
