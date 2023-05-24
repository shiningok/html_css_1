// Object.assign()// 객체 복제
   // Object.keys() //키 배열 반환
   // Object.values() // 값 배열 반환
   // Object.entries()// 키/값 배열 반환
   // Object.fromEntries() // 키/값 배열을 객체로 

// 변수 n 과 a 로 선언해두고
let n = "name";
let a = "age";

const user = { // 객체를 만든다
 [n] : "Ann",
 [a] : 30,
}
console.log(user);





// 모르겟다....
function makeObject(key,val) { // 객체를 받아주고
 return { // 객체를 return해준다
     [key] : val, // 받아온 key값을 val값을 쓴다 
 };
}
const obj = makeObject('성별',"female")
console.log(obj);



const color = { // 객체에 선언을 해둔 후에 
 no : 1,
 name : "green",
};

const color2 = Object.assign({},color); // 복제하기
const result = Object.keys(color); // key값만 배열로 반환된다
const result2 = Object.values(color); // value값만 배열로 반환된다
const result3 =  Object.entries(color); // [key,key] [value ,value]
// [ [ 'no', 1 ], [ 'name', 'green' ] ] 이렇게 됩니도 ~ 



console.log(color2);
console.log(result);
console.log(result2);
console.log(result3);

let arr = [
    ['mon','월'],
    ['tue','화']
]

const result4 = Object.fromEntries(arr); // 배열을 객체로 만들어줌 

console.log(result4);