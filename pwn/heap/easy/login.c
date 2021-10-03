#include <stdio.h>
#include <stdlib.h>
#include <string.h>
typedef struct auth {
    int uid;
    int gid;
    char* name;
} auth_t;

void welcome() {
    printf("Welcome to the secure login app!");
}

auth_t* login() {
    char buffer[50];
    unsigned int uid;
    unsigned int gid;
    printf("Name:\n");
    scanf("%49s", buffer);
    printf("User id:\n");
    scanf("%d", &uid);
    prinf("Group id:\n");
    scanf("%d", &gid);
    char* name = (char*)calloc(50);
    strcpy(name, buffer);
    auth_t *a = (auth_t *)calloc(sizeof(auth_t));
    a->name = name;
    a->uid = uid;
    a->gid = gid;
    return a;
}

void logout(auth_t *a) {
    free(a);
}

void admin(auth_t *a) {
    if (a->uid == 0 && a->gid == 1337) {
        printf("you logged in\n");
    }
}

int main() {
    welcome();
    
}
