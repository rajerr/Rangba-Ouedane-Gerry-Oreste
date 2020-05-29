function myFunction() {
    var number, message;
  
    // Get the value of the input field with id="numb"
    number = document.getElementById("number").value;
  
    // If x is Not a Number or less than one or greater than 10
    if (isNaN(number) || number < 5 ) {
      message = "erreur le nombre doit être superieur ou égal à 5";
    } 
    document.getElementById("liste").innerHTML = text;
  }