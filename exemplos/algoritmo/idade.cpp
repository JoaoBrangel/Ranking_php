#include<stdio.h>
#include<locale.h>

main() {
	setlocale(LC_ALL,"portuguese");
	
	int idade;
	
	printf("Digite a sua idade: \n");
	scanf("%d", &idade);

	
	if(idade < 18){
		printf("Voc� � Adolescente");
	}else{
	if(idade >= 18 && idade < 60){
	printf("Voc� � adulto");
	}
	else{
		printf("Voc� � idoso");
	}
	}
	
}
