
// symbol이란 고유한 데이터를 의미함
const a = Symbol(); // new 를 붙이지 않는다
const b = Symbol();

console.log(a);
Symbol();

console.log(b);
Symbol();


const id = Symbol('id'); // 이것을 symbol로 설정을 해두었기 때문에
const user = {
    name : "ann",
    age : 30,
    [id] : "myid", // 얘는 [Symbol(id)]: 'myid' 이렇게 출력된다
}
id.description;
// Object.getOwnPropertySymbols(user);
//Reflect.ownKeys(user);
console.log(user);
const result = Object.keys(user);
console.log(result);


Symbol.for(); // 전역심볼

let num = 10
num.toString(); // 숫자를 문자열로 바꿔줍니다

parseInt(); //문자열을 숫자로 바꿔줍니다

// 문자열메소드




