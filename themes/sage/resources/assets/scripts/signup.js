class SignUp {
  constructor(){
    this.mailForm = document.querySelector('#signup-form');
    if(this.mailForm) {
      this.mailForm.addEventListener('submit', function(e){
        e.preventDefault();
        this.input = document.querySelector('#signup-input');
        this.input.value = '';
        this.snackbar = document.getElementById('snackbar');
        this.snackbar.className = 'show';
        setTimeout(function(){ this.snackbar.className = this.snackbar.className.replace('show', ''); }, 3000);
     });
    }
  }
}

export default SignUp;
