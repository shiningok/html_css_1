function createParagraph() {
    const para = document.createElement('p');
    para.textContent = 'You clicked the button!';
    document.body.appendChild(para);
  }
  
  const buttons = document.querySelectorAll('button');
  
  for (const button of buttons) {
    button.addEventListener('click', createParagraph);
  }

  //변수선언법
  function SayName(name) {
    return name;
  }
  SayName("shiningok");


  //객체 선언 방법 const를 해주고 객체명 적고 {}중괄호 사용 ! 
  const fruits = {
    name:'mango',
    price:1000,
  }
  // 접근 하는 방법 
  fruits.name
  fruits['price']

  //추가 방법
  fruits.color = 'green';
  fruits['taste'] = 'sweet';

  // 삭제 방법
  delete fruits.taste;


  // for - in 문 

function makeObject(name,age) { // 일단은 변수를 만들어서
  return {
    name : name, // 받고
    age : age, // 받을껀데
    hobby : "sing a song" // 취미는 고정으로 한다 
  };
}

const Ann = makeObject("Ann",10); // ann이라는 객체를 만들고 makeObject 가져와서 name이랑 age에 이름이랑 나이 넣어줌
console.log(Ann);
console.log("age" in Ann); // Ann안에 age가 있니 

let alsrud2 = alsrud;
const alsrud = alsrud;

console.log(alsrud);
console.log(alsrud2);

alert
prompt
confirm

let boy = {
  name : 'ann',
};

let girl = {
  name : "lily",
}

let obj = {키:값}; // 키와 값을 합쳐서 속성이라고 부른다

// 객체 만듦
let fruits = {
  mango:50,
  podo:500,
  cherry:100,
};
// 객체 호출 방법 
console.log(fruits["mango"]);
console.log(fruits.podo); // 점으로 출력할 때는 점으로 출력하면 안된다 


 function SayName(){
  let name = 'ann';
  return name;
 }


 function SayNickName(nickname) {
  return nickname;
 }
 let nickname = "lily";

 let star = {
  ann:100,
  lily:50,
  jack:400
 };

 // 여기서 ann lily jack는 key이고
 // 100 50 400은 value이다
 //이것 두개 다 합쳐서 속성(프로퍼티)라고 함

 console.log(star.ann);

 //생성자 함수 첫글자를 대문자로 하기 
 function User(name,age) {
  // this = {}; 이건데 생략되어있을 뿐 ! 
  this.name = name;
  this.age = age;
  this.SayName = function(){ // 자신의 이름을 말하는 메소드 추가
    console.log(this.name); // 여기의 this는 user5를 말한다.
  }
  // return this;
 }
 let user1 = new User('Ann',25);
 let user2 = new User('Lily',27);
 let user3 = new User('Jack',33);
 let user5 = new User('hogong',20);
 
 console.log(user1,user2,user3,user5);
 user5.SayName(); // hogong 츌력


