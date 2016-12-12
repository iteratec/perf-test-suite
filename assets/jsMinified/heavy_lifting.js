function factorial(i){return 0===i||1===i?1:i*factorial(i-1)}console.log("Start heavy lifting"),console.time("heavy lifting");for(var i=1;5e5>i;i++)factorial(2e3);console.timeEnd("heavy lifting");
