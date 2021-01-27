"use strict"

const cat_btn = document.getElementById('cat_btn');

cat_btn.addEventListener("click", function() {
   const form = document.getElementById("formID");
   form.addEventListener('click', formSend);

   function formSend(e) {
        e.preventDefault();

       let error = formValidate(form);

        let formData = new FormData(form);
        // formData.append('image', formImage.files[0]);

       if(error===0) {
        form.classList.add('_sending');

        let response = await fetch('sendmail.php', {
            method: 'POST',
            body: formData
        });
        if(response.ok) {
            let result = await response.json();
            alert(result.message);
            form.reset();
        }else{
            alert('ОШИБКА ОТВЕТА JSON');
        }
       }else{
           alert('Заполните обязательные поля');
       }
   }

   function formValidate(form) {
       let error = 0;
       let formReq = document.querySelectorAll("._req");

        for (let i = 0; i < formReq.length; i++){
            const input = formReq[i];
            formRemoveError(input);

            if(input.classList.contains("_email")){
                if(emailTest(input)){
                    formAddError(input);
                    error++;
                }
            }else{
                if(input.value === ""){
                    formAddError(input);
                    error++;
                }
            }

        }
        return error;

   }
   function formAddError(input){
    input.parentElement.classList.add("_error");
    input.classList.add("_error");
   }
   function formRemoveError(input){
    input.parentElement.classList.remove("_error");
    input.classList.remove("_error");
   }

   function emailTest(input){
       return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
   }

});

