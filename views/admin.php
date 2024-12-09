<div class="d-flex justify-content-center">
    <form action="<?= env->base_url ?>/checkadminkey" data-callback="result" data-expectation="http">
        <div class="border-bottom pb-3 mb-4 border-secondary">
            <img src="<?= env->base_url . env->logo_path ?>" style="height: 1.25rem;">
            <?= env->company_name ?>
        </div>
        <div class="form-floating mb-3">
            <input
                class="form-control form-control-lg border-secondary font-monospace"
                style="letter-spacing: 0.75rem;"
                type="number"
                maxlength="6"
                oninput="this.value=this.value.slice(0, this.maxLength)"
                max="999999"
                inputmode="numeric"
                id="AdminKey"
                name="AdminKey"
            >
            <label for="AdminKey">Admin security key</label>
        </div>
        <div class="text-center">
            <button class="btn btn-secondary">Submit</button>
        </div>
    </form>
</div>
<script type="module">
    import * as ezforms from './dependencies/native/ezforms.js';

    const result=(response)=>{
        console.log(response);
    }

    ezforms.registerCallback('result', result );
</script>