
function fizzbuzz(){
    for(let i =0; i< 151 ; i++){
        if(i % 3 && i%5){
            console.log("FizzBuzz")
        }else if(i % 5){
            console.log("Buzz")
        }else if(i % 3){
            console.log("Fizz")

        }
    }
}


fizzbuzz();
