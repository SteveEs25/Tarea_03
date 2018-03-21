#include <iostream>
#include <cstdlib>
using namespace std;

int main()
{
	double fuerza;
	double peso;
	
	cout<<"Ingrese la fuerza:\n";
	cin>>fuerza;
	
	peso = fuerza/9.8;
	cout<<"El Peso es de: "<<peso<<" Kg\n";
	
	system("Pause");
	return 0;
}
