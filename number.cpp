#include<stdio.h>

void printSum(int candidates[], int index[], int n) {
  for (int i = 1; i <= n; i++)
    printf("%d %s", candidates[index[i]], ((i == n) ? "" : "+"));
  //cout << endl;
  printf("\n");
}

void solve(int target, int sum, int candidates[], int sz, int index[], int n) {
  if (sum > target)
    return;
  if (sum == target)
    printSum(candidates, index, n);
 
  for (int i = index[n]; i < sz; i++) {
    index[n+1] = i;
    solve(target, sum + candidates[i], candidates, sz, index, n+1);
  }
}

void solve(int target, int candidates[], int sz) {
  int index[10000];
  index[0] = 0;
  solve(target, 0, candidates, sz, index, 0);
}

int main() {
  int a[10] = {1,2,3,4,5,6,7,8,9,10};
  int sum = 10;
  int size = 10;
  solve(sum, a, size);
  return 0;
}