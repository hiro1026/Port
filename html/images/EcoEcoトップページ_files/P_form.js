var language = document.querySelector('html').lang;

var lang;
if (language === 'ja') {
  lang = document.querySelector('option[value="P_form.html"]');
} else {
  lang = document.querySelector('option[value="P_form_En.html"]');
}

lang.Selected = true;

document.getElementById('form').select.onchange = function(){
  location.href = document.getElementById('form').select.value;
}
