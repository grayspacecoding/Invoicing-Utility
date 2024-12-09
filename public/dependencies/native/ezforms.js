const callbackRegistry = {};

export const registerCallback=(name, action)=>{
    callbackRegistry[name] = action;
}

const submitForm=(form)=>{
    fetch(form.action, {method: 'POST', body: new FormData(form)})
    .then( response=>{
        let data = false;
        switch(form.dataset.expectation){
            case 'http': data = response.status; break;
            case 'json': data = response.json(); break;
            case 'text': data = response.text(); break;
        }
        return data;
    })
    .then(data=>{
        if(data){
            let callback = form.dataset.callback;
            if(callback && typeof callbackRegistry[callback] =='function'){
                callbackRegistry[callback](data);
            }
        }
    });
}

document.querySelectorAll(`form`).forEach(form=>{
    form.addEventListener('submit', event=>{
        if( !event.target.dataset.synchronous ){
            event.preventDefault();
            submitForm(event.target);
        }
    });
});