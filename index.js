window.addEventListener('load', () => {
   const fname = sessionStorage.getItem('First Name');
   const lname = sessionStorage.getItem('Last Name')
   const email = sessionStorage.getItem('E-mail');
   const dob = sessionStorage.getItem('Date Of Birth')
   const country= sessionStorage.getItem('Country')

   document.getElementById('result-firname').innerHTML = fname;
   document.getElementById('result-lasname').innerHTML = lname;
   document.getElementById('result-mails').innerHTML = email;
   document.getElementById('result-dobs').innerHTML = dob;
   document.getElementById('result-countries').innerHTML = country;


})