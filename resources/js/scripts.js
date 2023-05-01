(function() {

    "use strict";

    /*  Une fonction facile de sélection */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
          return [...document.querySelectorAll(el)]
        } else {
          return document.querySelector(el)
        }
    }


    /**
        * Une fonction facile d'écouteurs d'événements
    */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
            selectEl.addEventListener(type, listener)
            }
        }
    }



    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.mobile-nav-toggle', function(e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    });

    /**
    * Mobile nav dropdowns activate
    */
    on('click', '.navbar .dropdown > a', function(e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
          e.preventDefault()
          this.nextElementSibling.classList.toggle('dropdown-active')
        }
    }, true)



    /**
     * Changement de position des icons dans un input
     */
    on('focus', '.nonFocus.pl-35', function(e) {
        if (select('.nonFocus').classList.contains('pl-35')) {
          e.preventDefault();
          this.classList.remove('pl-35');
          this.classList.add("fw-bolder");
        }
    }, true);

    on('blur', '.nonFocus.pl-35', function(e) {
        e.preventDefault();
        this.classList.add('pl-35');
        this.classList.remove("fw-bolder");
    }, true);
    



    /* 
    * FONCTION DE COMPTAGE NU NOMBRE DES CARACTERES AUTORISES DANS UNE SAISIE 
    */
    on('keyup', '.isCounting', function(e) {

        const compteur  = 500;
        const setCount  = this.value.length;
        const getCount  = select('.count-chars');
        e.preventDefault();
        if (this.value.length > 0) {
            getCount.innerText = compteur - setCount;
            getCount.classList.add('text-danger');
        }
        else {
            getCount.innerText = 0;
            getCount.classList.remove("text-danger");           
        }

    }, true);


    /*
    * CONTROL DE SAISIE SUR DES CHAMP NUMBER
    */
    on('keyup', '.isNumber', function(e) {
        
        e.preventDefault();
        // Caractères autorisés
        let regex = new RegExp("[0-9]", "i");
        let valid;
        
        for (x = 0; x < this.value.length; x++) {
            valid = regex.test(this.value.charAt(x));
            if (valid == false) {
                this.value = this.value.substring(0, x) + this.value.substring(x + 1, this.value.length - x + 1); x--;
            }
        }

    }, true);



    on('click', '.open-soumenu', function(e) {

        //const soumenus  = select('.soumenu');
        const soumenus  = this.nextElementSibling;
        e.preventDefault();
        this.nextElementSibling.classList.toggle('d-none');
        
    }, true);


    // ARRET DE CHARGEMENT DE LA PAGE
    setTimeout(() => {
      select(".overlays").classList.add("d-none");
    }, 3000);

    
})();

