<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 justify-content-center">
        <div class="col">
            <h1 class="h3 border-bottom border-secondary pb-2">
                Invoice Lookup
            </h1>
            <h2 class="h6 mb-4">
                <img src="<?= env->base_url ?>/favicon.svg" style="height: 1rem;">
                <?= env->company_name ?>
            </h2>
            <div class="form-floating mb-3">
                <input type="text" class="form-control border-secondary" id="InvoiceNumber" placeholder="INV-#####" value="INV-">
                <label for="InvoiceNumber">Invoice number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control border-secondary" id="CustomerPin" placeholder="12345" step="1">
                <label for="CustomerPin">Customer PIN</label>
            </div>
            <a href="#" class="small" data-pinmsg>Help with PIN</a>
        </div>
    </div>
</div>
<script type="module">
    import * as ezmodal from './dependencies/native/ezmodal.js';
    document.querySelector(`[data-pinmsg]`).addEventListener('click', ()=>{
        let PinMsg=()=>{
            let container = document.createElement('div');
            let p1 = document.createElement('p');
            p1.innerText = `Check your invoice notification for a customer PIN, or try one of these options:`;
            let list = document.createElement('ul');
            [
                "last 4 digits of your phone number",
                "last 4 digits of your license plate",
                "your 5-digit zip code"
            ].forEach(item=>{
                let li = document.createElement('li');
                li.classList.add('small', 'fw-bold', 'text-success');
                li.innerText = item;
                list.appendChild(li);
            });
            let p2 = document.createElement('p');
            p2.innerHTML = `PIN not working? Please feel free to send us a message or give us a call!`;
            container.appendChild(p1);
            container.appendChild(list);
            container.appendChild(p2);
            return container;
        }
        ezmodal.openModal(PinMsg());
    });
</script>