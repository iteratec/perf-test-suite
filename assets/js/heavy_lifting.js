function factorial (num) {
    // The base case
    if (num === 0 || num === 1) {
        return 1;
    }

    // The general case
    return num * factorial(num - 1);
}


console.log("Start heavy lifting");
console.time("heavy lifting");
for (var i = 1; i < 500000; i++) {
    factorial(2000);
}
console.timeEnd("heavy lifting");
