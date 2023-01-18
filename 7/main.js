'use strict'; 

{
  // 問1
  let numbers = [2, 5, 12, 13, 15, 18, 22];
  function isEven() {
    for (let i = 0; i < numbers.length; i++) {
      if (numbers[i]%2 === 0) {
        console.log(numbers[i] + 'は偶数です');
      }
    }
  }
  isEven();

  // 問2
  class Car {
    constructor(gass, number) {
      this.gass = gass;
      this.number = number;
    }
    getNumGas() {
      console.log(`ガソリンは${this.gass}です。ナンバーは${this.number}です`);
    }
  }
  let content = new Car(38, 1234);
  content.getNumGas();
}