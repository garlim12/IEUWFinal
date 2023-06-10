//Registro, validaciones
const registroForm = document.getElementById('registroForm');
const usernameForm = document.getElementById('name');
const emailForm = document.getElementById('username2');
const passwordForm = document.getElementById('password2');
const password2Form = document.getElementById('password22');

registroForm.addEventListener('submit', e => {
  e.preventDefault();

  validateInputs();
});

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay =inputControl.querySelector('.error');

  errorDisplay.innerText = message;
  inputControl.classList.add('error');
  inputControl.classList.remove('success');
};

const setSuccess = element => {
  const inputContorl =element.parentElement;
  const errorDisplay =inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
};

const isValidEmail = email => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
  const usernameFormValue = usernameForm.value.trim();
  const emailFormValue = emailForm.value.trim();
  const passwordFormValue = passwordForm.value.trim();
  const password2FormValue = password2Form.value.trim();

  if(usernameFormValue === '') {
      setError(usernameForm, 'Username is required');
  } else {
      setSuccess(usernameForm);
  }

  if(emailFormValue === '') {
      setError(emailForm, 'Email is required');
  } else if (!isValidEmail(emailFormValue)) {
      setError(emailForm, 'Provide a valid email address');
  } else {
      setSuccess(emailForm);
  }

  if(passwordFormValue === '') {
      setError(passwordForm, 'Password is required');
  } else if (passwordFormValue.length < 8 ) {
      setError(passwordForm, 'Password must be at least 8 character.')
  } else {
      setSuccess(passwordForm);
  }

  if(password2FormValue === '') {
      setError(password2Form, 'Please confirm your password');
  } else if (password2FormValue !== passwordValue) {
      setError(password2Form, "Passwords doesn't match");
  } else {
      setSuccess(password2Form);
  }
};