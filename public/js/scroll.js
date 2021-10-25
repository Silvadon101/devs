const links = document.querySelectorAll(".scroll_to")
links.forEach((item)=>{
    item.addEventListener("click", ()=>{
        const el = document.getElementById(item.getAttribute("data-link"))
        el.scrollIntoView({behaviour:"smooth", block: "end" })
    })
})