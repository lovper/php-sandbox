//Arrayer
console.log("-------Deluppgift: array-------")

let arr1 = [1,2];

console.log(arr1[1]);

let num1 = arr1[1] + 100;
console.log(num1);

let strArr = ["Den", "stundande", "framtid", "är", "vår"];
let newStr = strArr.push("Hurra");

let weekArr = ["Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag"];
weekArr.pop();
weekArr.shift();
console.log(weekArr[0]);
console.log(weekArr[4]);