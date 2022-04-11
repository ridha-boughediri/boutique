<main>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Vos cordonnées </h3>
            <label for="fname"><i class="fa fa-user"></i> Nom</label>
            <input type="text" id="fname" name="firstname" placeholder="SAMIR M. BELHDJ">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="jekiffe@lamama.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="25 rue st louis 13015 marseille">
            <label for="city"><i class="fa fa-institution"></i> Ville</label>
            <input type="text" id="city" name="city" placeholder="MARSEILLE">

            <div class="row">
              <div class="col-50">
                <label for="state">CODE POSTAL</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Paiment</h3>
            <label for="fname">les CB acceptées</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nom de la carte</label>
            <input type="text" id="cname" name="cardname" placeholder="ridha samir">
            <label for="ccnum">numero de la carte credit</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">mois d'experation</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Septembre">
            <div class="row">
              <div class="col-50">
                <label for="expyear">année d'experation</label>
                <input type="text" id="expyear" name="expyear" placeholder="2022">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> Adresse de livraison de votre colis
        </label> -->
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">produit 1</a> <span class="price">15e</span></p>
      <p><a href="#">produit 2</a> <span class="price">5€</span></p>
      <p><a href="#">produit  3</a> <span class="price">8€</span></p>
      <p><a href="#">produit  4</a> <span class="price">2€</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>30€</b></span></p>
    </div>
  </div>
</div>


</main>