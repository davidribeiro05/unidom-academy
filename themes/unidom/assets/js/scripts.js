let aboutMe = document.getElementById("aboutMe");
let social = document.getElementById("aboutMe_social_cta");
let contact = document.getElementById("aboutMe_contact_cta");

let aboutMe_social = document.getElementById("aboutMe_social");
let aboutMe_contact = document.getElementById("aboutMe_contact");
let aboutMe_text = document.getElementById("aboutMe_text");

aboutMe.addEventListener("click", function () {
    aboutMe_text.classList.toggle("hide");

    aboutMe_social.classList.add("hide");
    aboutMe_contact.classList.add("hide");

    social.classList.remove("border_bottom_active");
    contact.classList.remove("border_bottom_active");


    aboutMe.classList.toggle("border_bottom_active");

});

social.addEventListener("click", function () {
    aboutMe_social.classList.toggle("hide");

    aboutMe_text.classList.add("hide");
    aboutMe_contact.classList.add("hide");

    aboutMe.classList.remove("border_bottom_active");
    contact.classList.remove("border_bottom_active");

    social.classList.toggle("border_bottom_active");
});

contact.addEventListener("click", function () {
    aboutMe_contact.classList.toggle("hide");

    aboutMe_social.classList.add("hide");
    aboutMe_text.classList.add("hide");

    aboutMe.classList.remove("border_bottom_active");
    social.classList.remove("border_bottom_active");

    contact.classList.toggle("border_bottom_active");
});

function cpfMask(i) {

    var v = i.value;

    if (isNaN(v[v.length - 1])) {
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7) i.value += ".";
    if (v.length == 11) i.value += "-";

}