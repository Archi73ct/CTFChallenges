#include <stdio.h>
#include <unistd.h>
#include <string.h>

void vuln() {
    char buffer[255];
    read(1, buffer, 2*255);
    return;
}

int main() {
    vuln();
}
