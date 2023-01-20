const firebaseConfig = {
    apiKey: "AIzaSyDaRht6mf1sYTRQAvc_uvtT6l5LIZp6hdw",
    authDomain: "tsugami-1f04d.firebaseapp.com",
    databaseURL: "https://tsugami-1f04d-default-rtdb.firebaseio.com",
    projectId: "tsugami-1f04d",
    storageBucket: "tsugami-1f04d.appspot.com",
    messagingSenderId: "488915205363",
    appId: "1:488915205363:web:5f735f064346c135238b86"
  };
  
  // initialize firebase
  firebase.initializeApp(firebaseConfig);
  
  // reference your database
  var contactFormDB = firebase.database().ref("contactForm");
  
  document.getElementById("contactForm").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
    var name = getElementVal("name");
    var email = getElementVal("email");
    var phone = getElementVal("phone");
    var subject = getElementVal("subject");
    var buisness = getElementVal("buisness");
    var product = getElementVal("product");
    var company = getElementVal("company");
    var city = getElementVal("city");
    var country = getElementVal("country");
    var pincode = getElementVal("pincode");
    var option = getElementVal("option");
    var message = getElementVal("message");
    var other = getElementVal("other");
  
    saveMessages(name, email, phone, subject, buisness, product, company, city, country, pincode, option, message, other);
  
    //   enable alert
    document.querySelector(".alert").style.display = "block";
  
    //   remove the alert
    setTimeout(() => {
      document.querySelector(".alert").style.display = "none";
    }, 3000);
  
    //   reset the form
    document.getElementById("contactForm").reset();
  }
  
  const saveMessages = (name, email, phone, subject, buisness, product, company, city, country, pincode, other, message) => {
    var newContactForm = contactFormDB.push();
  
    newContactForm.set({
      name: name,
      email: email,
      phone: phone,
      subject: subject,
      buisness: buisness,
      product: product,
      company: company,
      city: city,
      country: country,
      pincode: pincode,
    other: other,
      message: message,
    });
  };
  
  const getElementVal = (id) => {
    return document.getElementById(id).value;
  };