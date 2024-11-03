#include <stdio.h>

unsigned long long flag[] = {
    1926573054, 1926849483, 1929643494, 1631165234, 
    1614598905, 1730665985, 1581828292, 2079854562
};

void printFlag(unsigned long long flag[], int nelems) {
    for (int i = 0; i < nelems; i++) {
        while (flag[i] != 0) {
            printf("%c", flag[i] % 255);
            fflush(stdout);
            flag[i] = (flag[i] - (flag[i] % 255)) / 255;
        }
    }
    printf("\n");
}

int main() {
    printFlag(flag, sizeof(flag) / sizeof(flag[0]));
    return 0;
}
