function checkVowel() {
    var inputString = document.getElementById("inputString").value;
    var vowels = 'aeiouAEIOU';
    var foundVowels = [];

    document.getElementById("output").innerText = "Given word is: " + inputString;

    for (var i = 0; i < inputString.length; i++) {
        if (vowels.indexOf(inputString[i]) !== -1) {
            foundVowels.push(inputString[i]);
        }
    }

    if (foundVowels.length > 0) {
        document.getElementById("output").innerText += "\nPresent Vowel's is: " + foundVowels.join(", ");
    } else {
        document.getElementById("output").innerText += "\nNo vowels found in the string.";
    }
}