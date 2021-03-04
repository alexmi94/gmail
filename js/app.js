document.addEventListener("DOMContentLoaded", () => {
    console.log("ok")

    let form_nom = document.getElementById("nom");
    let form_prenom = document.getElementById("prenom");
    let form_mail = document.getElementById("mail");
    let form_mail = document.getElementById("password");

    class form{
        constructor(nom, prenom, mail, password){
            this.nom = nom;
            this.prenom = prenom;
            this.mail = mail;
            this.password = password;
        }

        get nom() {
            return this.nom;
        }

        get prenom() {
            return this.prenom;
        }

        get mail() {
            return this.mail;
        }

        get password() {
            return this.password;
        }
        
        mail_check(){
            let expr = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
            return expr.test(this.mail);  
        }

        storage(){
            sessionStorage.setItem("nom", this.nom);
        }
        
        verif(){

        }

    }

});