//создание возможности нажимать на кнопку в мобильном меню
const kofee = document.querySelector('#kofee');
const menu = document.querySelector('#menu');

kofee.addEventListener('click', () => {
   menu.classList.toggle('disp'); 
});

//создадим проверку формы брони
function validateForm()
{
	var form_object = document.forms.zakaz;
	var number = document.forms.zakaz.elements.number.value;

	if(form_object.elements.firstname.value == '')
	{
    	alert('Вы должны ввести свое имя!');
	    return false;
	}
	if(form_object.elements.lastname.value == '')
	{
    	alert('Вы должны ввести свою фамилию!');
	    return false;
	}
    if(form_object.elements.number.value == '')
    {
        alert('Вы должны ввести свой номер!');
        return false;
    }
    if(form_object.elements.dateb.value == '')
    {
        alert('Вы должны ввести дату бронирования!');
        return false;
    }
}
