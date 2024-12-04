
         <!-- <img src= class="Menu"> -->

<nav class= 'navbarC'><?php 
              
                    ?> <div  ><img class ='logo' src="../img/logo.svg" alt="" ></div>
                    <div ><img class ='closeM' src="../img/ferme.png" alt="" ></div>
                        <img src='../img/dwldbtn.png' class="Menu">
                <div class="nav-link">
                        <div class='btn'> </div><ul>
                        <li><a href="../index.php" class="A"><p>Home</p></a></li>
                        <li><a href="../Articles/Articles.php" class="Ar">About</a></li>
                        <li><a  href="../Inscription.php" class="I">Agenda</a></li>
                        <li><a href="../Connexion.php" class= "C">Contact Us</a></li>
                      
                    
                        </ul></div>
                        <div class= "co"><li><a href="../Connexion.php" class= "">Register Now !</a></li></div>
                       
                
                        
<!--                        
                <div class='IC'>
                    
              
                        
                    
                    
                </div> -->
                
                      <?php 
                       
                        
                        ?> 
                             
                       
                     </div>
                        
                     
                      
                    
                
                                   
       
             
     
             </div>    
            
             
</nav>
<script>
   
    let prevScrollPos = window.pageYOffset;
    const scrollThreshold = 150;          
    window.addEventListener("scroll", () => {
    const currentScrollPos = window.pageYOffset;
    if (currentScrollPos > scrollThreshold){
        if (prevScrollPos > currentScrollPos) {
            // Faire défiler vers le haut : afficher la barre de navigation
            document.querySelector(".navbarC").style.top = "0";
            document.querySelector(".navbarC").style.transition="all 0.1s";
          
        } else {
            // Faire défiler vers le bas : masquer la barre de navigat
            document.querySelector(".navbarC").style.transition="all 0.3s";
            document.querySelector(".navbarC").style.top = "-100PX";
    
        
        }
    }else{
        document.querySelector(".navbarC").style.top = "0";
    } 
    prevScrollPos = currentScrollPos;
});

   window.addEventListener('DOMContentLoaded', (event) => {
        // Obtenez tous les liens sur la page
        const liens = document.querySelectorAll('a');

        // Parcourez les liens et ajoutez une classe si l'URL correspond à la page actuelle
        liens.forEach(lien => {
            if (lien.href === window.location.href) {
                lien.classList.add('lien-actif');
            }
        });
    });
    function showPopup() {
        document.getElementById("popup").style.display = "block";
        popup.style.right = '0';
        popup.style.transition = 'all 0.5s';
    }

    function hidePopup() {
        document.getElementById("popup").style.display = "block";
        popup.style.right = '-2500px ';
        popup.style.transition = 'all 0.5s';
    }
    function showPopup1() {
        document.getElementById("popupMSG").style.display = "block";
        popupMSG.style.top = '0';
        popupMSG.style.transition = 'all 0.5s';
    }

    function hidePopup1() {
        document.getElementById("popupMSG").style.display = "block";
        popupMSG.style.top = '-2500px ';
        popupMSG.style.transition = 'all 0.5s';
    }
    function showPopup2() {
        document.getElementById("popup").style.display = "block";
        popupS.style.top= '0';
        popupS.style.transition = 'all 0.5s';
    }

    function hidePopup2() {
        document.getElementById("popup").style.display = "block";
        popupS.style.top = '-2500px ';
        popupS.style.transition = 'all 0.5s';
    }
</script>
<?php?>
                   
                      
                                                 

          
                    
        
       
 
