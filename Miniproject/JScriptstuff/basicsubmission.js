//normal functions

//function asking user to fill in missing details
function pleasefillin(){
    const askuser  = document.getElementById("fill in");
        console.log("there is an empty field");
        askuser.innerHTML = "please fill in all details";

    
}

//function checking all inputs have been filled in
function checkiffilled(){
    const allinputs = document.querySelectorAll("input");
    const alltextareas = document.querySelectorAll("textarea");

    empty = true;

    //checks every textinput to make sure it is not empty
    for(i=0;i<(allinputs.length-1);i++){
        var written = allinputs[i].value;

        if ( written.replace(/\s/g,"").length == 0){
            empty = false;
            allinputs[i].className = "blogunfilled";
        }
        else{
            allinputs[i].className = "blogtitle";
        }
        
    }


    for(i=0;i<(alltextareas.length);i++){
        var written = alltextareas[i].value;

        if ( written.replace(/\s/g,"").length == 0){
            empty = false;
            alltextareas[i].className = "pleasefill";
        }
        else{
            alltextareas[i].className = "";
        }


    }

    return empty;
}


//button functions
/////////////////////////////////////////////////////////////////////////////////////////////////
//function and listener to allow the clear button to work
function clear(){
    console.log("clearing written data");
    
    allinputs = document.querySelectorAll("input");
    alltextareas = document.querySelectorAll("textarea");


    //goes through all input fields and resets them back to ""
    for(i=0;i<(allinputs.length-1);i++){
        allinputs[i].value = "";
    }

    //goes through all textareas and resets them to "" 
    for(i=0;i<(allinputs.length-1);i++){
        alltextareas[i].value = "";
    }


    
}

clearbutton =document.getElementById('clear button');
clearbutton.addEventListener("click", clear);

/////////////////////////////////////////////////////////////////////////////////////////////////
//function and listener to allow submission button to work in an altered state (making sure that details have been entered) for all fields.
submissionunatempted= false;
function submission(e){
    console.log("submit button pressed");

    if (checkiffilled() == false ){ 
    pleasefillin()

    e.preventDefault();
        
    }
    
    

}

function previewsubmission(){
    console.log('clicked')
    submitbutton.click();
}

const submitbutton =document.getElementById('submit button');
submitbutton.addEventListener('click', submission);

