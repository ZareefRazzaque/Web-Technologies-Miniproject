function previewsubmission(){
    console.log('clicked')
    submitbutton.click();
}

const previewsubmitbutton = document.getElementById('preview submit');
previewsubmitbutton.addEventListener('click', previewsubmission);

//////////////////////////////////////////////////////////////////////////////////////////////
//function and listener for the preview button 
function preview(e){
    console.log("preview button pressed");


    if (checkiffilled() == false ){ 
        pleasefillin()
        
    }
    else{
        //hides the form and shows the preview
        const form = document.getElementById('form');
        const previewsection = document.getElementById('preview');
        const previewheader = document.getElementById('preview header');
        const previewtext = document.getElementById('preview text');


        previewsection.className= "article";
        previewheader.innerHTML = document.querySelector("input").value;
        previewtext.innerHTML = document.querySelector("textarea").value + "<br> Written: YY-MM-DD HH-MM-SS";
        form.className = "hidden";


        const previewbuttons = document.getElementById('preview buttons');
        previewbuttons.className = "center";
    }



}

const previewbutton = document.getElementById('preview button');
previewbutton.addEventListener('click', preview);


//////////////////////////////////////////////////////////////////////////////////////////////////////
//function and listen for the editbutton
function returntoedit(){
    console.log("continue edit button pressed")

    const askuser  = document.getElementById("fill in");
    askuser.innerHTML = " ";
    
    const previewbuttons = document.getElementById('preview buttons');
    previewbuttons.className = "hidden";

    const previewsection = document.getElementById('preview');
    previewsection.className = "hidden";

    const form = document.getElementById('form');
    form.className = "";
}
editbutton =document.getElementById('edit');
editbutton.addEventListener('click', returntoedit)