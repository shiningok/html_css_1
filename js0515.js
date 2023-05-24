//생성자 함수 첫글자를 대문자로 하기 
function User(name,age) {
    // this = {}; 이건데 생략되어있을 뿐 ! 
    this.name = name;
    this.age = age;
    this.SayName = function(){ // 자신의 이름을 말하는 메소드 추가
      console.log(this.name); // 맥락을 나타내는 객체
    }
    // return this;
   }
   let user1 = new User('Ann',25);
   let user2 = new User('Lily',27);
   let user3 = new User('Jack',33);
   let user5 = new User('hogong',20);
   
   //console.log(user1,user2,user3,user5);
   user5.SayName(); // hogong 츌력
   user1.SayName();

   