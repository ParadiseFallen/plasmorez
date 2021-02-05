<section id="call-me" class="my-4">
    <form action="">
        <div class="container">
            <div class="row py-4 align-items-center d-">
                <div class="col-md-7">
                    <input type="tel" class="w-100" name="phone" placeholder="Введите ваш телефон" required>
                </div>
                <div class="col-md-4 offset-md-1 my-2">
                    <button type="submit" class="white-btn">Мы перезвоним</button>
                </div>
            </div>
        </div>
    </form>
</section>

<script>
    (()=>{
        let callMeForm = document.querySelector('#call-me form')
        callMeForm.addEventListener('submit',event=>{
            event.preventDefault()
            if(form.reportValidity())
            {
                let data = new FormData(form)
                fetch('/contact-me',
                    {
                        method : 'POST',
                        body : data
                    }).then(data=>{
                    if (!data.ok)
                        alert('Smth goes wrong')
                })
            }
        })
    })()
</script>
