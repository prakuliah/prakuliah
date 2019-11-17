//const HOST = "139.99.22.150";
const HOST = "localhost/prakuliah";
const PHP_URL = "http://"+HOST+"/php/";

function validatePassword(str) {
    // at least one number, one lowercase and one uppercase letter
    // at least 8 characters
    var re = /(?=.*\d)(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    return re.test(str);
}

function isStringContainsNumber(str) {
    var re = /(?=.*\d)(?=.*[0-9])/;
    return re.test(str);
}

function isStringContainsUppercase(str) {
    var re = /(?=.*[A-Z])/;
    return re.test(str);
}

function isStringContainsLowercase(str) {
    var re = /(?=.*[a-z])/;
    return re.test(str);
}