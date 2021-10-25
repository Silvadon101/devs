const form = document.querySelector("form"),

eField = form.querySelector(".username"),
eInput = eField.querySelector("input"),
pField = form.querySelector(".password"),
pInput = pField.querySelector("input"),
errorOne = eField.querySelector(".error"),
errorTwo = pField.querySelector(".error")

form.onsubmit = (e)=>{
    // ?-----Preventing form from submitting------
    e.preventDefault()
    if(eInput.value == ""){
        // ?-------if empty, then do below ------
        //-----adding css classes to form------
        eField.classList.add("shake")
        errorOne.classList.add("error_show")
    }
    if(pInput.value == ""){
        // ?-------if empty, then do below ------
        //-----adding css classes to form------
        pField.classList.add("shake")
        errorTwo.classList.add("error_show")
    }

    setTimeout(()=>{
        //!--------remove 'shake' class after 500ms--------
        //*------shake will now occur everytime user submits an empty field------
        eField.classList.remove("shake")
        pField.classList.remove("shake")
    },500)

    eInput.onkeyup = ()=>{
        if(eInput.value == ""){
            //?--------keeps error msg if username field is empty----------
            errorOne.classList.add("error_show")
        }else{
            //?--------if username field is not empty remove error msg--------
            errorOne.classList.remove("error_show")
        }
    }
    pInput.onkeyup = ()=>{
        if(pInput.value == ""){
            //?--------keeps error msg if password field is empty----------
            errorTwo.classList.add("error_show")
        }else{
            //?--------if password field is not empty remove error msg--------
            errorTwo.classList.remove("error_show")
        }
    }

    //?-------------Submit Form if there's no error----------------------
    // if(!eField.classList.contains("error_show") && !pField.classList.contains("error_show")){
    //     window.location.href = {{ route('login') }}
    // }
 }

