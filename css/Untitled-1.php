 
#include <stdio.h>
#include <math.h>
 
int main() {
    unsigned long pecahan[] = {100000, 50000, 20000, 10000, 5000,
    2000, 1000, 500, 200, 100, 50, 25, 10, 1};
    
    unsigned long total;
    unsigned long uang;
    unsigned long kembalian;
    unsigned long genap;
    unsigned long sisa;
    
    unsigned int jumlahPecahan;
    unsigned int hitung;
    
    printf("Ketik total belanja: Rp ");
    scanf("%lu", &total);
    printf("Ketik uang yang diserahkan: Rp ");
    scanf("%lu", &uang);
    
    printf("\n");
    if (uang < total) {
        printf("Error: Uang yang diserahkan kurang.");  
    }
    else if (uang == total) {
        printf("Tidak ada uang kembalian.");
    }
    else {
        kembalian = uang - total;
        printf("Uang kembalian adalah Rp %lu\n", kembalian);
        printf("\n");
        printf("Yang meliputi pecahan:\n");
        
        jumlahPecahan = (int) (sizeof(pecahan) / sizeof(pecahan[0]));
        for (hitung = 0; hitung < jumlahPecahan; hitung++) {
            genap = floor(kembalian / pecahan[hitung]);
            sisa = kembalian % pecahan[hitung];
            if (genap > 0) {
                printf("%lu ", genap);
                if (pecahan[hitung] > 1000) {
                    printf("lembar");
                }
                else {
                    printf("keping");
                };
                printf(" uang pecahan Rp %lu\n", pecahan[hitung]);
            };
            kembalian = sisa;
        };
    };
 
    return 0;
}