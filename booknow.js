let totalSeats1=5;
let totalSeats2=100;

var btn1=document.querySelector("#book1");
btn1.addEventListener("click",bookOneSeat1);

function bookOneSeat1(){
    if(totalSeats1===1){
        window.alert("All the slots are booked");
        return
    }
    totalSeats1--;
    console.log(totalSeats1);
    window.alert("Your seat has been reserved");
}

var btn2=document.querySelector("#book2");
btn2.addEventListener("click",bookOneSeat2);

function bookOneSeat2(){
    if(totalSeats2===1){
        window.alert("All the slots are booked");
        return
    }
    totalSeats2--;
    console.log(totalSeats2);
    window.alert("Your seat has been reserved");
}