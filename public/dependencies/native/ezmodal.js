const backdrop=()=>{
    let backdrop = document.createElement('div');
    backdrop.setAttribute('id', 'ezmodal');
    backdrop.style.backgroundColor = "#aaaaaaaa";
    backdrop.style.position = "fixed";
    backdrop.style.top = 0;
    backdrop.style.left = 0;
    backdrop.style.width = "100vw";
    backdrop.style.height = "100vh";
    backdrop.style.zIndex = 99;
    backdrop.classList.add('d-flex', 'justify-content-center', 'align-items-center', 'pb-5');
    return backdrop;
}

const messagebox=()=>{
    let messagebox = document.createElement('span');
    messagebox.style.maxWidth = "400px";
    messagebox.classList.add('bg-white', 'p-4', 'rounded-1', 'shadow', 'flex-shrink-1');
    return messagebox;
}

const dismisser=()=>{
    let dismisser = document.createElement("div");
    dismisser.classList.add("pt-4", "text-end");
    let button = document.createElement("button");
    button.classList.add('btn', 'btn-sm', 'btn-primary');
    button.innerText = "OK";
    button.setAttribute("onclick", "document.dispatchEvent(new Event('ezmodal.close'));");
    dismisser.appendChild(button);
    return dismisser;
}

export const openModal=(message)=>{
    let modal = backdrop();
    let content = messagebox();
    if(typeof message =='string'){
        content.innerHTML = message;
    }
    else{
        content.appendChild(message);
    }
    content.appendChild(dismisser());
    modal.appendChild(content);
    document.querySelector("body").appendChild(modal);
}

export const closeModal=()=>{
    document.getElementById('ezmodal').remove();
}

document.addEventListener('ezmodal.open', (event)=>{
    openModal(event.detail.message);
});

document.addEventListener('ezmodal.close', ()=>{
    closeModal();
});