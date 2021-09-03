function handleSubmit () {
    const fname = document.getElementById('firname').value;
    const lname = document.getElementById('lasname').value;
    const email = document.getElementById('mails').value;
    const dob = document.getElementById('dobs').value;
    const country = document.getElementById('countries').value;


    sessionStorage.setItem("First Name", fname);
    sessionStorage.setItem("Last Name", lname);
    sessionStorage.setItem("E-mail", email);
    sessionStorage.setItem("Date Of Birth", dob);
    sessionStorage.setItem("Country", country);

    localStorage.setItem("First Name", fname);
    localStorage.setItem("Last Name", lname);
    localStorage.setItem("E-mail", email);
    localStorage.setItem("Date Of Birth", dob);
    localStorage.setItem("Country", country);

    return;

}