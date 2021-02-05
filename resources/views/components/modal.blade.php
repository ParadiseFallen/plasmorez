<div class="modal fade " id="contact-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content data-card">
      <div class="modal-body d-flex flex-column">
          <div class="d-flex flex-column first ">
              <h1>Связаться с нами</h1>
              <form action="" class="d-flex flex-column">
                  @csrf
                  <div class="form-group d-flex flex-column">
                      <label class="my-3">Имя</label>
                      <input type="text" name="name" placeholder="Введите имя" required>
                  </div>
                  <div class="form-group d-flex flex-column">
                      <label class="my-3">Телефон</label>
                      <input type="tel" name="phone" placeholder="Введите ваш номер телефона" required>
                  </div>
              </form>
              <button type="submit" class="my-4 align-self-center dark-btn">Оставить заявку</button>
          </div>
          <div class="second d-none">
              <div class="d-flex flex-column justify-content-center text-center">
                  <h3>Благодарим за остваленную заявку</h3>
                  <p class="my-4">Мы вам презвоним в ближайшее время </p>
                  <button class="my-4 align-self-center dark-btn">На сайт</button>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

<script>
    let globalModal
    $(()=>{
        const modalSection = document.querySelector('#contact-modal')
        const modal = new bootstrap.Modal(modalSection, {
            keyboard: false
        })
        globalModal =  modal
        const first =  modalSection.querySelector('.first')
        const second = modalSection.querySelector('.second')
        const form =   modalSection.querySelector('form')
        first.querySelector('button').addEventListener('click',event=>
        {
            event.preventDefault()
            if (form.reportValidity())
            {
                let data = new FormData(form)

                fetch('/contact-me',
                    {
                        method : 'POST',
                        body : data
                    }).then(data=>{
                    if (data.ok)
                    {
                        first.classList.toggle('d-none')
                        second.classList.toggle('d-none')
                    }
                    else
                        alert('Smth goes wrong')
                })
            }
        })
        second.querySelector('button').addEventListener('click',function ()
        {
            modal.toggle()
            first.classList.toggle('d-none')
            second.classList.toggle('d-none')
        })
    })
    function callPopup(event)
    {
        event.preventDefault()
        globalModal.toggle()
    }
</script>
