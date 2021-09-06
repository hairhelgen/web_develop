<div class="form"> <!-- создаем форму на нашем сайте -->
    <form class="appForm" method="post"> <!-- форма создается по методу пост, 
    так же задается класс форм (форма для отправки заявки) -->
        Name:<br>
        <input type="text" name="name"><br>
        2nd name:<br>
        <input type="text" name="2ndName"><br>
        <button>Send</button>
        <p class="err"><p>
    </form>
</div>

<!-- далее идет JS -->

<script>
    let form = document.querySelector('.appForm') //получаем форму чере QS
//создаем перехватчик формы и прописывем привент, чтобы форма не отправлялась
    form.addEventListener('submit', function(e){
        e.preventDefault();
        //получение объекта класса форм ДАТА
        //готовим поля для отправки формы при помощи фича на сервер
        let formData = new FormData(form);
        //console.log(formDate.name); //пишем логи по ключу name
        //делаем вызов методом ФЕТЧ
        fetch('send.php', {
            method: 'POST',
            body: formData
        })
        //ждем ответа от сервера
        // .then(response => response.json())
        // .then(data => {
        //     console.log(data);
        // })
    });
</script>