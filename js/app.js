document.addEventListener("DOMContentLoaded", () => {

    let forum_nom = document.getElementsByName("nom")[0];
    let forum_prenom = document.getElementsByName("prenom")[0];
    let forum_mail = document.getElementsByName("mail")[0];
    let forum_password = document.getElementsByName("password")[0];
    let forum_warning = document.getElementsByClassName("form")[0];



    class form{
        constructor(nom, prenom, mail, password, warning){
            this.nom = nom.value;
            this.prenom = prenom.value;
            this.mail = mail.value;
            this.password = password.value;
            this.warning = warning;
        }
        
        mail_check(){
            let expr = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
            return expr.test(this.mail);  
        }

        storage(){
            sessionStorage.setItem("nom", this.nom);
        }

        setwarning(text){
            let p = document.createElement("p");
            this.warning.prepend(p);
            p.innerText=text;
        }

        verif(){
            if(this.mail_check()){
                this.storage();
                console.log("ok");
            }else{
                this.setwarning("Adresse email incorrect");
            }

        }

    }

    let btn = document.getElementsByTagName('input')[4];

    btn.addEventListener("click",(event)=>{
        console.log("click");
        event.preventDefault();

        let objet_form = new form(forum_nom, forum_prenom, forum_mail, forum_password, forum_warning)
        objet_form.verif();
        
    })

});