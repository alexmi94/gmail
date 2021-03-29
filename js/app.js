document.addEventListener("DOMContentLoaded", () => {
    let compte = document.getElementsByClassName("compte")[0];
    compte.style.backgroundColor = "#9d2b29";
    compte.style.color = "#fafafa";

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
            sessionStorage.setItem("prenom", this.prenom);
        }

        setwarning(text){
            let p = document.getElementsByClassName("warning")[0];
            p.innerText=text;
            event.preventDefault();
        }

        verif(){
            if(!this.nom || !this.prenom || !this.mail || !this.password){
                this.setwarning("Merci de remplir tous les champs");
                return
            }

            if(this.mail_check()){
                this.storage();
            }else{
                this.setwarning("Adresse email incorrect");
                return
            }

            if(this.password.length < 5){
                this.setwarning("Mot de passe trop court");
                return
            }
        }
    }

    let btn = document.getElementsByTagName('input')[4];

    btn.addEventListener("click",(event)=>{
        console.log("click");
        let objet_form = new form(forum_nom, forum_prenom, forum_mail, forum_password, forum_warning)
        objet_form.verif();
        
    })

});