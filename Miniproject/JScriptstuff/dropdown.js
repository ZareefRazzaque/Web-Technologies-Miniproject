///////////////////////////////////////////////////////////////////////////////////////////////////////
//function allowing the filter by months to work
function displaydropdown(){
    console.log("filter was clicked");
    dropped = (!dropped);
    const dropdownarray = document.querySelectorAll('ul')
    
    for (i = 0; i<dropdownarray.length;i++){
       
        if(dropped == true){
            dropdownarray[i].className ="dropdownpiece" ;
        }
        else{
            dropdownarray[i].className="hidden";
        }
        
    }

}

dropped = false;
filterbutton = document.getElementById("dropdown button");
filterbutton.addEventListener('click', displaydropdown);

////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
 function findmonthnumber(month){
    var montharray = ["Show All", "January", "Febuary", "March", "April", "May", "June", "July", "August", "Sepetember", "October", "Novemeber", "December"];
    for (i=0; i<montharray.length;i++){
        if (montharray[i] == month){
            monthnumber = (i).toString();

            if(monthnumber.length<2){
                monthnumber= "0"+monthnumber;
            }
            return monthnumber;
        }
    }
    


}

const filteroptions = document.querySelectorAll("ul");

for(i = 0; i<filteroptions.length;i++){
    const filteroption = filteroptions[i]
    

    
    filteroption.addEventListener('click', () => {

        monthnumber = findmonthnumber(filteroption.innerHTML);

        const allblogs = document.getElementsByClassName("para");
        for(i=0;i<allblogs.length;i++){
            var text= allblogs[i].textContent;
            var monthwritten = text[text.length-48].toString() + text[text.length-47].toString();
            console.log(monthwritten);


            if(monthwritten == monthnumber){
                allblogs[i].parentElement.className="article"
            }
            else if(monthnumber ==0){
                allblogs[i].parentElement.className="article"
            }
            else{
                allblogs[i].parentElement.className="hidden"
            }

            
            
        }
    });
}
