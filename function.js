function roundTwo(n) {
  return parseFloat(n.toFixed(2));
}
console.log(roundTwo(7.899)); // 7.90


// 2.
function checkIsNumber(x) {
  return typeof x === "number" && !Number.isNaN(x);
}
console.log(checkIsNumber(0)); // true
console.log(checkIsNumber("0")); // false


// 3. 
function numberToStringLength(n) {
  return n.toString().length;
}
console.log(numberToStringLength(98765)); // 5


// 4
function integerPartOf(num) {
  return Math.trunc(num);
}
console.log(integerPartOf(-2.7)); // -2


// 5
function makeAllUpper(txt) {
  return String(txt).toUpperCase();
}
console.log(makeAllUpper("Good morning")); // "GOOD MORNING"


// 6
function containsSubstr(str, word) {
  return String(str).indexOf(String(word)) !== -1;
}
console.log(containsSubstr("study hard", "hard")); // true


// 7. 
function replaceSpacesWithUnderscore(s) {
  return String(s).replaceAll(" ", "_");
}
console.log(replaceSpacesWithUnderscore("a b c d")); // "a_b_c_d"


// 8. 
function first3Last3(s) {
  s = String(s);
  if (s.length <= 6) return s;
  return s.slice(0, 3) + s.slice(-3);
}
console.log(first3Last3("developer")); // "devper"


// 9. 
function trimSides(s) {
  return String(s).trim();
}
console.log(trimSides("   spaced   ")); // "spaced"


// 10.
function strLen(s) {
  return String(s).length;
}
console.log(strLen("code")); // 4


// 11. 
function pushElement(arr, el) {
  arr.push(el); 
}
let listA = [10, 20];
pushElement(listA, 30);
console.log(listA); // [10, 20, 30]


function findIndexGreaterThan10(arr) {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > 10) return i;
  }
  return -1;
}
console.log(findIndexGreaterThan10([1, 11, 5])); // 1


function onlyEven(arr) {
  const res = [];
  for (let i = 0; i < arr.length; i++) {
    if (typeof arr[i] === "number" && arr[i] % 2 === 0) res.push(arr[i]);
  }
  return res;
}
console.log(onlyEven([7, 8, 10, 3])); // [8, 10]


function multiplyAllByTwo(arr) {
  for (let i = 0; i < arr.length; i++) {
    arr[i] = arr[i] * 2;
  }
}
let listB = [2, 4, 6];
multiplyAllByTwo(listB);
console.log(listB); // [4, 8, 12]


function sumNumbers(arr) {
  let s = 0;
  for (let i = 0; i < arr.length; i++) s += arr[i];
  return s;
}
console.log(sumNumbers([5, 5, 5])); // 15


function arrayHas(arr, value) {
  return arr.includes(value);
}
console.log(arrayHas(["a", "b", "c"], "b")); // true
console.log(arrayHas(["a", "b", "c"], "d")); // false


function joinArrays(a, b) {
  return a.concat(b);
}
console.log(joinArrays([1], [2, 3])); // [1, 2, 3]


function sliceFrom1To3(arr) {
  return arr.slice(1, 4);
}
console.log(sliceFrom1To3([9, 8, 7, 6, 5])); // [8, 7, 6]


function sortAsc(arr) {
  return arr.slice().sort(function(a, b) { return a - b; });
}
console.log(sortAsc([3, 1, 4, 2])); // [1, 2, 3, 4]


function getObjectKeys(obj) {
  return Object.keys(obj);
}
console.log(getObjectKeys({ title: "Book", pages: 120 })); // ["title", "pages"]


function getObjectValues(obj) {
  return Object.values(obj);
}
console.log(getObjectValues({ title: "Book", pages: 120 })); // ["Book", 120]


function objectHasKey(obj, key) {
  return key in obj;
}
console.log(objectHasKey({x:1}, "x")); // true
console.log(objectHasKey({x:1}, "y")); // false


function combine(o1, o2) {
  return Object.assign({}, o1, o2);
}
console.log(combine({x:1}, {y:2, x:9})); // {x:9, y:2}


function objectEntriesList(obj) {
  return Object.entries(obj);
}
console.log(objectEntriesList({name: "Mariam", age: 30})); // [["name","Mariam"],["age",30]]