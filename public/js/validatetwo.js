const formtwo = document.querySelector(".form_bd"),

eField = formtwo.querySelector(".username_two"),
eInput = eField.querySelector("input"),
pField = formtwo.querySelector(".password_two"),
pInput = pField.querySelector("input"),
fField = formtwo.querySelector(".fullname"),
fInput = fField.querySelector("input"),
mField = formtwo.querySelector(".email"),
mInput = mField.querySelector("input"),
errorOne = eField.querySelector(".error"),
errorTwo = pField.querySelector(".error"),
errorThree = mField.querySelector(".error"),
errorFour = fField.querySelector(".error")

formtwo.onsubmit = (e)=>{
    // ?-----Preventing form from submitting------
    e.preventDefault()
    if(eInput.value == ""){
        // ?-------if empty, then do below ------
        //-----adding css classes to formtwo------
        eField.classList.add("shake")
        errorOne.classList.add("error_show")
    }
    if(pInput.value == ""){
        // ?-------if empty, then do below ------
        //-----adding css classes to formtwo------
        pField.classList.add("shake")
        errorTwo.classList.add("error_show")
    }
    if(mInput.value == ""){
        // ?-------if empty, then do below ------
        //-----adding css classes to formtwo------
        mField.classList.add("shake")
        errorThree.classList.add("error_show")
    }
    if(fInput.value == ""){
        // ?-------if empty, then do below ------
        //-----adding css classes to formtwo------
        fField.classList.add("shake")
        errorFour.classList.add("error_show")
    }

    setTimeout(()=>{
        //!--------remove 'shake' class after 500ms--------
        //*------shake will now occur everytime user submits an empty field------
        eField.classList.remove("shake")
        pField.classList.remove("shake")
        mField.classList.remove("shake")
        fField.classList.remove("shake")
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



