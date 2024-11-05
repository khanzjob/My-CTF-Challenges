#include <stdio.h>
#include <stdbool.h>
#include <stdint.h>


//flag uguntu{fake_fl4g}

typedef int32_t i32;

i32 axor(int a,int b){
	i32 res = 0;
	for(i32 i = 31; i >= 0; i--){
		bool b1 = a & ( 1 << i );
		bool b2 = b & ( 1 << i );

		bool xbit = (b1 & b2) ? 0 : (b1 | b2);
		res <<= 1;
		res |= xbit;
	}
	return res;
}

int main(void){
	char *flag = "\x54\x46\x54\x4f\x55\x54\x5a\x59\x11\x53\x7e\x44\x15\x59\x7e\x44\x15\x59\x5c";
	char key[40];
	printf("enter the password:> ");
	scanf("%40s",key);

	int m = 0;
	for (int i=0; i<23; i++){
		m |= axor(
			axor(key[i],0x21),
			flag[i]
		);
	}

	if(m==0){
		puts("Correct password!");
	}else{
		puts("Wrong password");
	}

	return 0;
}
