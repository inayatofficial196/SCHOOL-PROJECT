let profile = document.getElementById("profile-pic");
let picture = document.getElementById("profile-file");
picture.onchange = function(){
    profile.src = URL.createObjectURL(picture.files[0]);
}

//////////////////////////////////////////////////

let bank = document.getElementById("bank-pic");
let image = document.getElementById("bank-file");
image.onchange = function(){
    bank.src = URL.createObjectURL(image.files[0]);
}

///////// This code admission form refrish the page not update the pag


if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
}

//  The follwing code is admission validation code

function validateForm() {
    
var textpattern = /^[A-Za-z\s]+$/;
let numberpattern = /^[0-9\s]+$/;
let cnicPattern = /^[0-9]+$/;
let gradePattern = /^[0-9A-F]/;
let percentagePattern = /^(\d{1,2}(\.\d{1,2})?|100(\.0{1,2})?)%$/;
let groupPattern = /^[A-Za-z-\s]+$/;
let sname = document.getElementById("sname").value;
let scnic = document.getElementById("scnic").value;
let smobile = document.getElementById("smobile").value;
let fname = document.getElementById("fname").value;
let fcnic = document.getElementById("fcnic").value;
let fmobile = document.getElementById("fmobile").value;
let gender = document.getElementById("gender").value;
let home = document.getElementById("home").value;
let school = document.getElementById("school").value;
let rollno = document.getElementById("rollno").value;
let year = document.getElementById("year").value;
let tmarks = document.getElementById("tmarks").value;
let omarks = document.getElementById("omarks").value;
let percent = document.getElementById("percent").value;
let grade = document.getElementById("grade").value;
let group = document.getElementById("group").value;


// The follwing code is a span tag error show only error text

let snameerror = document.getElementById("snameerror");
let scnicerror = document.getElementById("scnicerror");
let smobileerror = document.getElementById("smobileerror");
let fnameerror = document.getElementById("fnameerror");
let fcnicerror = document.getElementById("fcnicerror");
let fmobileerror = document.getElementById("fmobileerror");
let gendererror = document.getElementById("gendererror");
let homeerror = document.getElementById("homeerror");
let schoolerror = document.getElementById("schoolerror");
let rollnoerror = document.getElementById("rollnoerror");
let yearerror = document.getElementById("yearerror");
let tmarkserror = document.getElementById("tmarkserror");
let omarkserror = document.getElementById("omarkserror");
let grouperror = document.getElementById("grouperror");

// Validation for Student Name

if (sname === "") {
// alert("Please enter Student Name");
snameerror.innerHTML = "Please Enter Student Name";
return false;
} else if (!textpattern.test(sname)) {
snameerror.innerHTML = "Allow only alphabetic characters";
return false;
}else if (sname.length <= 3) {
snameerror.innerHTML = "Three alphabetic characters";
return false;
}else{
snameerror.innerHTML = "";
}


// Validation for Student CNIC

if (scnic === "") {
scnicerror.innerHTML = "Please Enter Student CNIC";
return false;
}if (!cnicPattern.test(scnic)) {
scnicerror.innerHTML = "Used only  Number";
return false;
}else if (scnic.length < 13) {
scnicerror.innerHTML = "13 Number allow";
return false;
}else{
scnicerror.innerHTML = "";
}


// Validation for Student Mobile Number

if (smobile === "") {
smobileerror.innerHTML = "Please Enter Student phone";
return false;
}else if (!numberpattern.test(smobile)) {
smobileerror.innerHTML = "Used only Number";
return false;
}else if (smobile.length <= 10) {
smobileerror.innerHTML = "11 Number allow";
return false;
}else{
smobileerror.innerHTML = "";
}

// Validation for Father Name

if (fname === "") {
fnameerror.innerHTML = "Please Enter Student Name";
return false;
} else if (!textpattern.test(fname)) {
fnameerror.innerHTML = "Allow only alphabetic characters";
return false;
}else if (fname.length <= 3) {
fnameerror.innerHTML = "Three alphabetic characters";
return false;
}else{
fnameerror.innerHTML = "";
}

// Validation for Father CNIC

if (fcnic === "") {
fcnicerror.innerHTML = "Please Enter Student CNIC";
return false;
}else if(!cnicPattern.test(fcnic)) {
fcnicerror.innerHTML = "Used  only number";
return false;
}else if (fcnic.length <= 10) {
fcnicerror.innerHTML = "11 Number allow";
return false;
}else{
fcnicerror.innerHTML = "";
}

// Validation for Father Mobile Number

if(fmobile === "") {
fmobileerror.innerHTML = "Please Enter Father phone";
return false;
}else if(!numberpattern.test(fmobile)){
fmobileerror.innerHTML = "Used only Number";
return false;
}else if(fmobile.length < 11) {
fmobileerror.innerHTML = "11 Number allow";
return false;
}else{
fmobileerror.innerHTML = "";
}

// Validation for Gender

if (gender === "") {
gendererror.innerHTML = "Please Enter Gender";
return false;
} else if(!textpattern.test(gender)) {
gendererror.innerHTML = "Allow only alphabetic characters";
return false;
}else if(gender.length <= 2) {
gendererror.innerHTML = "Three alphabetic characters";
return false;
}else{
gendererror.innerHTML = "";
}

// Validation for Home Address

if (home === "") {
homeerror.innerHTML = "Please Enter Student Home Address";
return false;
}else if (home.length <= 3) {
homeerror.innerHTML = "Three alphabetic characters";
return false;
}else{
homeerror.innerHTML = "";
}



// Validation for School & Board

if (school === "") {
// alert("Please enter Student Name");
schoolerror.innerHTML = "Please Enter school & board";
return false;
} else if (!textpattern.test(school)) {
schoolerror.innerHTML = "Allow only alphabetic characters";
return false;
}else{
schoolerror.innerHTML = "";
}

// Validation for Roll Number

if (rollno === "") {
rollnoerror.innerHTML = "Please Enter Student Roll Number";
return false;
}if (!cnicPattern.test(rollno)) {
rollnoerror.innerHTML = "Used only  Number";
return false;
}else{
rollnoerror.innerHTML = "";
}

// Validation for Passing Year

if (year === "") {
yearerror.innerHTML = "Please Enter passing year";
return false;
}if (!cnicPattern.test(year)) {
yearerror.innerHTML = "Used only  Number";
return false;
}else{
yearerror.innerHTML = "";
}

// Validation for Total Marks

if (tmarks === "") {
tmarkserror.innerHTML = "Please Enter Total Marks";
return false;
}if (!cnicPattern.test(tmarks)) {
tmarkserror.innerHTML = "Used only  Number";
return false;
}else{
tmarkserror.innerHTML = "";
}

// Validation for Obtained Marks

if (omarks === "") {
omarkserror.innerHTML = "Please Enter Obtained Marks";
return false;
}else if(!cnicPattern.test(omarks)) {
omarkserror.innerHTML = "Used only  Number";   
return false;
}else{
omarkserror.innerHTML = "";
}

// Validation for Percentage

if (percent === "") {
percenterror.innerHTML = "Please Enter Percentage";
return false;
}else if(!percentagePattern.test(percent)) {
omarkserror.innerHTML = "Used only  Number";   percentagePattern
return false;
}else{
percenterror.innerHTML = "";
}

// Validation for Grade

if (grade === "") {
gradeerror.innerHTML = "Please Enter grade";
return false;
}else if(!gradePattern.test(grade)) {
gradeerror.innerHTML = "text or Number";
return false;
}else{
gradeerror.innerHTML = "";
}

// Validation for Group

if (group === "") {
grouperror.innerHTML = "Please Enter group Selection";
return false;
} else if(!groupPattern.test(group)) {
grouperror.innerHTML = "Allow only alphabetic characters";
return false;
}else if(group.length < 2) {
grouperror.innerHTML = " More then Three alphabetic characters";
return false;
}else{
grouperror.innerHTML = "";
}

return true; // Submit the form if all validations pass.
}