function convertToRoman(num) {
    let roman=[];
    let temp=num-num%10;
    if (temp!=0){
     switch (temp){
       case 1:
         roman.unshift("I");
         break;
       case 2:
         roman.unshift("II");
         break;
       case 3:
         roman.unshift("III");
         break;
       case 4:
         roman.unshift("IV");
         break;
       case 5:
         roman.unshift("V");
         break;
       case 6:
         roman.unshift("VI");
         break;
       case 7:
         roman.unshift("VII");
         break;
       case 8:
         roman.unshift("VIII");
         break;
       case 9:
         roman.unshift("IX");
         break;
     }
    }
    return roman;
   }
   
   console.log(convertToRoman(36));