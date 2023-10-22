#include<stdio.h>
#include<locale.h>
//João Luiz Rangel De Barros Reis.
//Yuri Soares De Castro Santos.

main() {
	setlocale(LC_ALL,"portuguese");
	
	float consumo_carro,distancia_viagem, consumo_combustivel;
	printf("digite a distancia da viagem carro: ");
	scanf("%f", &distancia_viagem);
	printf("digite a quantidade de litros abastecido: ");
	scanf("%f", &consumo_carro);
	
	
	consumo_combustivel = (distancia_viagem / consumo_carro);
	
	printf("O consumo do veiculo é de: %.2f", consumo_combustivel);
}
}
