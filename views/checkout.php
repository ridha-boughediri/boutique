<main>
  <div class="container-checkout">
    <div class="card-checkout">
      <h1 class="title-checkout">PAIEMENT</h1>
      <div class="form-checkout">
        <div class="mini-space">
          <div class="card-space">
            <label for="card-cart" class="label-cart">NUMÉRO DE CARTE:</label>
            <input maxlength="19" name="CARD_NUMBER" type="text" placeholder="XXXX XXXX XXXX XXXX" class="input-cart" id="card-cart">
          </div>
        </div>
        <div class="mini-space">
          <div class="date-space">
            <label for="card-cart" class="label-cart">DATE D'EXPIRATION:</label>
            <input maxlength="5" pattern="[0-9]+" name="EXPIRATION" placeholder="MM/AA" type="tel" class="input-cart" id="exp-cart">
          </div>
          <div class="cvv-space">
            <label for="card-cart" class="label-cart">CODE DE SÉCURITÉ:</label>
            <input maxlength="4" pattern="[0-9]+" name="CSC" placeholder="CVV" type="text" class="input-cart" id="cvv-cart">
          </div>
        </div>
        <div class="button-case-first">
          <button type="button" class="button-first">Pay</button>
        </div>
      </div>
    </div>
  </div>


</main>